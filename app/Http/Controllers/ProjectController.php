<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
        return view('projects.show', [
            'project' => $project,
        ]);
    }
}