<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Portfolio Laravel',
            'description' => 'Un projet pour présenter mes compétences en Laravel.',
        ]);

        Project::create([
            'title' => 'Application de gestion de tâches',
            'description' => 'Une application pour gérer les tâches quotidiennes.',
        ]);

        Project::create([
            'title' => 'Mini CRM freelance',
            'description' => 'Un mini CRM pour les freelances afin de gérer leurs clients.',
        ]);
    }
}