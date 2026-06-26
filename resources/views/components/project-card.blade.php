@props(['project'])

<li>
    <article>
        <h2>{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
        <a href="{{ route('projects.show', ['project' => $project]) }}">
            Voir le projet
        </a>
    </article>
</li>