<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:users {count}';
  
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Dummy Users for your App';
  
    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $numberOfUsers = $this->argument('count');
    
        for ($i = 0; $i < $numberOfUsers; $i++) { 
            User::factory()->create();
        }
    }
}

// {
//     /**
//      * The name and signature of the console command.
//      *
//      * @var string
//      */
//     protected $signature = 'app:create-users';

//     /**
//      * The console command description.
//      *
//      * @var string
//      */
//     protected $description = 'Command description';

//     /**
//      * Execute the console command.
//      */
//     public function handle(): void
//     {
//         //
//     }
// }