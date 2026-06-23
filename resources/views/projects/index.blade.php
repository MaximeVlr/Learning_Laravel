@extends('layouts.app')

@section('title', 'Mes projets')

@section('content')
    <h1>Mes projets</h1>

    <ul>
        @forelse ($projects as $project)
            <li>
                <a href="{{ route('projects.show', ['id' => $project['id'], 'title' => $project['title']]) }}">
                    {{ $project['title'] }}
                </a>
            </li>
        @empty
            <li>Aucun projet trouvé.</li>
        @endforelse
    </ul>
@endsection