<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $laravel = Technology::create([
            'name' => 'Laravel',
        ]);

        $blade = Technology::create([
            'name' => 'Blade',
        ]);

        $php = Technology::create([
            'name' => 'PHP',
        ]);

        $sqlite = Technology::create([
            'name' => 'SQLite',
        ]);

        $crm = Technology::create([
            'name' => 'CRM',
        ]);

        $portfolio = Project::create([
            'title' => 'Portfolio Laravel',
            'description' => 'Un projet pour présenter mes compétences en Laravel.',
        ]);

        $portfolio->technologies()->attach([
            $laravel->id,
            $blade->id,
            $php->id,
        ]);

        $taskManager = Project::create([
            'title' => 'Application de gestion de tâches',
            'description' => 'Une application pour gérer les tâches quotidiennes.',
        ]);

        $taskManager->technologies()->attach([
            $laravel->id,
            $blade->id,
            $sqlite->id,
        ]);

        $miniCrm = Project::create([
            'title' => 'Mini CRM freelance',
            'description' => 'Un mini CRM pour les freelances afin de gérer leurs clients.',
        ]);

        $miniCrm->technologies()->attach([
            $laravel->id,
            $php->id,
            $crm->id,
        ]);

        Project::factory()
            ->count(10)
            ->create();
    }
}