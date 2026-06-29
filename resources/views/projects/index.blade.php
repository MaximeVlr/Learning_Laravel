@extends('layouts.app')

@section('title', 'Mes projets')

@section('content')
    <h1>Mes projets</h1>
    
    <form action="{{ route('projects.index') }}" method="GET">
        <input type="search" name="search" value="{{ $search }}">
        <input type="submit" value="Rechercher">
    </form>

    @if ($search)
        <h2>Recherche : {{ $search }}</h2>
        <a href="{{ route('projects.index') }}">Réinitialiser la recherche</a>
    @endif

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
            @if ($search)
                <li>Aucun projet ne correspond à votre recherche.</li>
            @else
                <li>Aucun projet trouvé.</li>
            @endif
        @endforelse
    </ul>
    
    {{ $projects->links() }}
@endsection