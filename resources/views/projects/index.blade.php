<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes projets</title>
</head>
<body>
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
</body>
</html>