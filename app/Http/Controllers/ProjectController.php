<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $search = trim($request->query('search', ''));

        $query = Project::query();

        if ($search) {
            $query->searchByTitleOrDescription($search);
        }

        $projects = $query
            ->with('technologies')
            ->orderBy('title')
            ->paginate(2)
            ->withQueryString();

        return view('projects.index', [
            'projects' => $projects,
            'projectsCount' => $projects->total(),
            'search' => $search,
        ]);
    }

    public function show(Project $project)
    {
        $project->load('technologies');

        return view('projects.show', [
            'project' => $project,
        ]);
    }
}