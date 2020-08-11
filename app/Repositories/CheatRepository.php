<?php


namespace App\Repositories;


use App\Cheat;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CheatRepository implements Interfaces\CheatRepositoryInterface
{

    public function all() : Collection
    {
        return Cheat::orderBy('sort_order')->get();
    }

    public function create(Request $request) : Cheat
    {
        $cheat = Cheat::create($request->all());
        $image = $request->file('image');
        if ($image) {
            $extension = $image->getClientOriginalExtension();
            $filename = 'images/' . $image->getClientOriginalName() . Str::random(10) . '.' . $extension;
            Storage::disk('public')->put($filename, File::get($image));
            $cheat->image = $filename;
            $cheat->save();
        }
        $file = $request->file('file');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $filename = 'files/' . $file->getClientOriginalName() . Str::random(10) . '.' . $extension;
            Storage::disk('public')->put($filename, File::get($file));
            $cheat->file = $filename;
            $cheat->save();
        }
        $features = $request->get('features', []);
        $cheat->features()->createMany(array_values($features));
        $durations = $request->get('durations');
        $cheat->durations()->createMany(array_values($durations));
        return $cheat;
    }

    public function get(int $id) : Cheat
    {
        return Cheat::findOrFail($id);
    }

    public function update(Cheat $cheat, Request $request) : Cheat
    {
        $cheat->update($request->all());
        $image = $request->file('image');
        if ($image) {
            Storage::disk('public')->delete($cheat->image);
            $extension = $image->getClientOriginalExtension();
            $filename = 'images/' . $image->getClientOriginalName() . Str::random(10) . '.' . $extension;
            Storage::disk('public')->put($filename, File::get($image));
            $cheat->image = $filename;
            $cheat->save();
        }
        $file = $request->file('file');
        if ($file) {
            Storage::disk('public')->delete($cheat->file);
            $extension = $file->getClientOriginalExtension();
            $filename = 'files/' . $file->getFilename() . Str::random(10) . '.' . $extension;
            Storage::disk('public')->put($filename, File::get($file));
            $cheat->file = $filename;
            $cheat->save();
        }
        $features = $request->get('features', []);
        $cheat->features()->delete();
        $cheat->features()->createMany($features);
        $durations = $request->get('durations');
        $cheat->durations()->delete();
        $cheat->durations()->createMany($durations);
        return $cheat;
    }

    public function delete(Cheat $cheat): void
    {
        Storage::disk('public')->delete($cheat->image);
        Storage::disk('public')->delete($cheat->file);

        $cheat->delete();
    }

    public function spoofers(): Collection
    {
        return Cheat::where('type', 'spoofer')->orderBy('sort_order')->get();
    }
}
