@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <h1>Détail du projet</h1>
    
    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>
    <p>Technologies :</p>
    <ul>
        @foreach ($project->technologies as $technology)
            <li>{{ $technology->name }}</li>
        @endforeach
    </ul>
    <a href="{{ route('projects.index') }}">Retour à la liste</a>
@endsection