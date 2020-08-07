<?php


namespace App\Repositories\Interfaces;


use App\Cheat;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface CheatRepositoryInterface
{
    public function all(): Collection;

    public function create(Request $request): Cheat;

    public function get(int $id): Cheat;

    public function update(Cheat $cheat, Request $request): Cheat;

    public function delete(Cheat $cheat): void;
}
