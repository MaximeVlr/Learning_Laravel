<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes projets</title>
</head>
<body>

</body>
</html>

@extends('layouts.app')

@section('title', 'Mes projets')

@section('content')
    <h1>Détail du projet</h1>
    
    <h2>{{ $project['title'] }}</h2>
    <p>{{ $project['description'] }}</p>
    <a href="{{ route('projects.index') }}">Retour à la liste</a>
@endsection