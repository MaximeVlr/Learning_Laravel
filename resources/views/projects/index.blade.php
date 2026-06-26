@extends('layouts.app')

@section('title', 'Mes projets')

@section('content')
    <h1>Mes projets</h1>

    <ul>
        @forelse ($projects as $project)
            <x-project-card :project="$project" />
        @empty
            <li>Aucun projet trouvé.</li>
        @endforelse
    </ul>
@endsection