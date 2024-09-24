<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //- Creamos 10 usuarios
        User::factory()->create(['email' => 'jacajali@gmail.com']);
        User::factory(9)->create();

        //- Creamos 10 categorías, cada una con 20 hilos
        Category::factory(10)
            ->hasThreads(20)
            ->create();

        //- Creamos 400 respuestas
        Reply::factory(400)->create();
    }
}
