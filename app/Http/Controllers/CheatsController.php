<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CheatRepositoryInterface;
use Illuminate\Http\Request;

class CheatsController extends Controller
{
    private CheatRepositoryInterface $cheatRepository;

    public function __construct(CheatRepositoryInterface $cheatRepository)
    {
        $this->cheatRepository = $cheatRepository;
    }

    public function spoofers()
    {
        $spoofers = $this->cheatRepository->spoofers();

        return view('cheats.spoofers', compact('spoofers'));
    }
}
