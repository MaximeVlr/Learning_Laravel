@props(['project'])

<li>
    <article>
        <h2>{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
        <p>Technologies :</p>
        <ul>
            @foreach ($project->technologies as $technology)
                <li>{{ $technology->name }}</li>
            @endforeach
        </ul>
        <a href="{{ route('projects.show', ['project' => $project]) }}">
            Voir le projet
        </a>
    </article>
</li>