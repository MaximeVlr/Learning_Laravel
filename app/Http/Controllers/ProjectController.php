<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        if ($search = $request->query('search')) {
            $projects = Project::where('title', 'LIKE', '%' . $search . '%')->get();
        } else {
            $projects = Project::orderBy('title')->get();
        }

        return view('projects.index', [
            'projects' => $projects,
            'projectsCount' => $projects->count(),
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project,
        ]);
    }
}