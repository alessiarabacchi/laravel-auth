<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Project::create([
        'name' => 'Progetto di Esempio',
        'description' => 'Questo è un progetto di esempio.',
    ]);
}

}
