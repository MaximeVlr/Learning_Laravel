@props(['project'])

<li>
    <article>
        <h2>{{ $project['title'] }}</h2>
        <p>{{ $project['description'] }}</p>

        <p>Technologies :</p>
        <ul>
            @foreach ($project['technologies'] as $technology)
                <li>{{ $technology }}</li>
            @endforeach
        </ul>

        <a href="{{ route('projects.show', ['id' => $project['id']]) }}">
            Voir le projet
        </a>
    </article>
</li>