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

        $portfolio = Project::create([
            'title' => 'Portfolio Laravel',
            'description' => 'Un projet pour présenter mes compétences en Laravel.',
        ]);

        $portfolio->technologies()->attach([
            $laravel->id,
            $blade->id,
            $php->id,
        ]);

        Project::factory()->count(10)->create();
    }
}