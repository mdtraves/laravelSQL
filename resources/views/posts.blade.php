<x-layout>
    <x-slot name='firstInsert'>

        @foreach ($posts as $post)

        <article>
            <h1>{{ $post->username }}</h1>
            <p>{{ $post->excerpt }}</p>
            <p>{{ $post->body }}</p>
        </article>

        @endforeach

    </x-slot>
</x-layout>
