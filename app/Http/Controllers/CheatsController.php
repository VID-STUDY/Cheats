<?php

namespace App\Http\Controllers;

use App\Cheat;
use App\Game;
use App\Repositories\Interfaces\CheatRepositoryInterface;
use Illuminate\Http\Request;

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
}
