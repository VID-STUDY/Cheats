<?php

namespace App\Http\Controllers\Admin;

use App\Cheat;
use App\Game;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheatRequest;
use App\Repositories\Interfaces\CheatRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CheatController extends Controller
{
    private CheatRepositoryInterface $cheatRepository;

    public function __construct(CheatRepositoryInterface $cheatRepository)
    {
        $this->cheatRepository = $cheatRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $cheats = $this->cheatRepository->all();
        return view('admin.cheats.index', compact('cheats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $games = Game::all();
        return view('admin.cheats.create', compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CheatRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => [
                'required',
                Rule::in(['spoofer', 'cheat', 'macros'])
            ],
            'description' => 'required|string',
            'image' => 'nullable|image',
            'file' => 'nullable|file|mimes:zip',
            'game_id' => 'required|integer'
        ]);
        $cheat = $this->cheatRepository->create($request);
        return redirect()->route('admin.cheats.index')->with('success', "Чит {$cheat->name} добавлен");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cheat  $cheat
     * @return \Illuminate\View\View
     */
    public function edit(Cheat $cheat)
    {
        $games = Game::all();
        return view('admin.cheats.edit', compact('cheat', 'games'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cheat  $cheat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cheat $cheat)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => [
                'required',
                Rule::in(['spoofer', 'cheat', 'macros'])
            ],
            'description' => 'required|string',
            'image' => 'nullable|image',
            'file' => 'nullable|file|mimes:zip',
            'game_id' => 'required|integer'
        ]);
        $cheat = $this->cheatRepository->update($cheat, $request);
        return redirect()->route('admin.cheats.index', "Чит {$cheat->name} изменён");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Cheat $cheat
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Cheat $cheat)
    {
        $this->cheatRepository->delete($cheat);
        return redirect()->back()->with('success', "Чит {$cheat->name} удалён");
    }
}
