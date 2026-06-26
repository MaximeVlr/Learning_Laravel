@extends('layouts.app')

@section('title', 'Mes projets')

@section('content')
    <h1>Mes projets</h1>
    <p>
        {{ $projectsCount }}
        @if ($projectsCount >= 2)
            projets disponibles
        @else
            projet disponible
        @endif
    </p>

    <ul>
        @forelse ($projects as $project)
            <x-project-card :project="$project" />
        @empty
            <li>Aucun projet trouvé.</li>
        @endforelse
    </ul>
@endsection