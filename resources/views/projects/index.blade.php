@extends('layouts.app')

@section('title', 'Mes projets')

@section('content')
    <h1>Mes projets</h1>

    <form action="{{ route('projects.index',  ['search' => $search]) }}" method="get">
        <input type="search" name="value="{{ $search }}"" id="">
        <input type="submit" value="Search">
    </form>

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