<?php

namespace App\Http\Controllers;

use App\SubscriptionDuration;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BuyController extends Controller
{
    public function digiseller(Request $request)
    {
        $productId = $request->get('id');
        $inv = $request->get('inv');
        $sign = $request->get('sign');
        $checksum = md5($productId . ':' . $inv . ':' . env('DIGISELLER_PASSWORD'));
        if ($sign != $checksum)
            return response()->json([
                'id' => $productId,
                'inv' => $inv,
                'error' => 'Wrong checksum'
            ], 400);
        /** @var SubscriptionDuration $duration */
        $duration = SubscriptionDuration::where('digiseller_product_id', $productId)->first();
        if (!$duration)
            return response()->json([
                'id' => $productId,
                'inv' => $inv,
                'error' => 'Product not found'
            ], 404);
        /** @var array $queryOptions */
        $queryOptions = $request->get('options');
        $userEmail = $queryOptions[0]['user_data'];
        $user = User::where('email', $userEmail)->first();
        if (!$user)
            return response()->json([
                'id' => $productId,
                'inv' => $inv,
                'error' => 'User not found'
            ], 404);
        $cheat = $duration->cheat;
        $key = bin2hex(random_bytes(32));
        $fileToken = bin2hex(random_bytes(5));
        $filenameWithToken = $cheat->name . $fileToken . '.zip';
        Storage::disk('public')->copy($cheat->file, $filenameWithToken);
        $zipPath = Storage::disk('public')->getAdapter()->applyPathPrefix($filenameWithToken);
        $zip = new \ZipArchive();
        $zip->open($zipPath);
        $zip->addFromString('key.txt', $key);
        $zip->close();
        $user->subscriptions()->create([
            'serialnum' => $key,
            'serialtime' => $duration->duration,
            'filename' => $filenameWithToken,
            'cheat_id' => $cheat->id
        ]);
        $time = ''.$duration->duration;
        if ($duration->duration < 10)
            $time = '0'.$time;
        $time = "$time:00:00";
        DB::connection('cheats_db')
            ->insert('INSERT INTO license_keys (license_key, cheat, time, seller, status, banned) VALUES (?, ?, ?, ?, ?, ?)',
                [$key, $cheat->name, $time, $user->email, 0, 0]);
        $subscriptions = $user->subscriptions()->orderBy('serialstatus', 'desc')->get();
        $html = view('pages.account.index', compact('user', 'subscriptions'))->render();
        return response()->json([
            'id' => $productId,
            'inv' => $inv,
            'goods' => $html
        ]);
    }
}
