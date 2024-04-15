<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Repositories\Repository;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        touch('database/database.sqlite'); /* creer le fichier si n'existe pas. modifier la date de creation du fichier */
        $repository = new Repository();
        // Creation de la bd avec la commande php artisan db:seed
        $repository->createDatabase();
    }
}
