<?php

namespace App\Http\Controllers;

use App\Cheat;
use App\Game;
use App\Repositories\Interfaces\CheatRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CheatsController extends Controller
{
    /**
     * Cheat repository
     *
     * @var CheatRepositoryInterface
     */
    private CheatRepositoryInterface $cheatRepository;

    /**
     * CheatsController constructor.
     * @param CheatRepositoryInterface $cheatRepository
     */
    public function __construct(CheatRepositoryInterface $cheatRepository)
    {
        $this->cheatRepository = $cheatRepository;
    }

    /**
     * Show all spoofers
     *
     * @return \Illuminate\View\View
     */
    public function spoofers()
    {
        $spoofers = $this->cheatRepository->spoofers();

        return view('cheats.spoofers', compact('spoofers'));
    }

    /**
     * Show concrete spoofer
     *
     * @param Cheat $cheat
     * @return \Illuminate\View\View
     */
    public function spoofer(Cheat $cheat)
    {
        $game = $cheat->game;
        return view('cheats.show', compact('cheat', 'game'));
    }

    /**
     * Show all games
     *
     * @return \Illuminate\View\View
     */
    public function games()
    {
        $games = Game::orderBy('sort_order')->get();
        return view('cheats.games', compact('games'));
    }

    /**
     * Show concrete game
     *
     * @param Game $game
     * @return \Illuminate\View\View
     */
    public function game(Game $game)
    {
        $cheats = $game->cheats()->where('type', '!=', 'spoofer')->get();
        return view('cheats.game', compact('game', 'cheats'));
    }

    /**
     * Show concrete cheat
     *
     * @param Game $game
     * @param Cheat $cheat
     * @return \Illuminate\View\View
     */
    public function cheat(Game $game, Cheat $cheat)
    {
        return view('cheats.show', compact('cheat', 'game'));
    }

    public function buy(Request $request, Cheat $cheat)
    {
        $durationIndex = intval($request->get('subscription')) - 1;
        $duration = $cheat->durations[$durationIndex];
        $user = auth()->user();
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
            'cheat_id' => $cheat->id
        ]);
        DB::connection('cheats_db')
            ->insert('INSERT INTO license_keys (license_key, cheat, time, seller) VALUES (?, ?, ?, ?)',
                [$key, $cheat->name, $duration->duration, $user->email]);
        return response()->download($zipPath);
    }
}
