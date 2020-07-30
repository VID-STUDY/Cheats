<?php

namespace App\Http\Controllers\Admin;

use App\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $games = Game::all();

        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
            'short_description' => 'required|string'
        ]);

        $game = Game::create($request->all());
        $image = $request->file('image');
        $filename = Str::random() . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->put($filename, File::get($image));
        $game->image = $filename;
        $game->save();
        return redirect()->route('admin.games.index')->with('success', "Game {$game->title} created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\View\View
     */
    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\View\View
     */
    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Game $game)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'short_description' => 'required|string'
        ]);

        $game->update($request->all());
        $image = $request->file('image');
        if ($image) {
            Storage::disk('public')->delete($game->filename);
            $filename = Str::random() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($filename, File::get($image));
            $game->image = $filename;
            $game->save();
        }

        return redirect()->route('admin.games.index')->with('success', "Game {$game->title} updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Game $game
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Game $game)
    {
        Storage::disk('public')->delete($game->filename);
        $title = $game->title;
        $game->delete();
        return redirect()->back()->with('success', "Game $title deleted");
    }
}
