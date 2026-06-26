@props(['project'])

<li>
    <article>
        <h2>{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
        <a href="{{ route('projects.show', ['id' => $project->id]) }}">
            Voir le projet
        </a>
    </article>
</li>