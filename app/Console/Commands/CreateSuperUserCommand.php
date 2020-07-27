<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateSuperUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:superuser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('Type admin name: ');
        $email = $this->ask('Type admin email: ');
        $password = $this->secret('Type password: ');
        User::create(['email' => $email,
                      'name' => $name,
                      'password' => Hash::make($password),
                      'admin' => true]);
        $this->info("Admin user $name with email $email created!");
    }
}
