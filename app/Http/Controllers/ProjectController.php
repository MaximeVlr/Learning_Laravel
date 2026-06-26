<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = $this->getProjects();

        return view('projects.index', [
            'projects' => $projects,
        ]);
    }

    public function show(int $id)
    {
        $projects = $this->getProjects();
        $selectedProject = null;

        foreach ($projects as $project) {
            if ($project['id'] === $id) {
                $selectedProject = $project;
                break;
            }
        }

        if ($selectedProject === null) {
            abort(404);
        }

        return view('projects.show', [
            'project' => $selectedProject,
        ]);
    }

    private function getProjects(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Portfolio Laravel',
                'description' => 'Un projet pour présenter mes compétences en Laravel.',
                'technologies' => [
                    'Laravel',
                    'Blade',
                    'PHP',
                ],
            ],
            [
                'id' => 2,
                'title' => 'Application de gestion de tâches',
                'description' => 'Une application pour gérer les tâches quotidiennes.',
                'technologies' => [
                    'Laravel',
                    'Blade',
                    'SQLite',
                ],
            ],
            [
                'id' => 3,
                'title' => 'Mini CRM freelance',
                'description' => 'Un mini CRM pour les freelances afin de gérer leurs clients.',
                'technologies' => [
                    'Laravel',
                    'CRM',
                    'PHP',
                ],
            ],
        ];
    }
}