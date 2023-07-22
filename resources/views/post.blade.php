@php

use App\Models\Team;

@endphp

<x-layout>

    <x-slot name='firstInsert'>

        <article>
            <h1>{{ $post->username }}</h1>
            <p>{{ $post->excerpt }}</p>
            <p>{{ $post->body }}</p>
        </article>

    </x-slot>

</x-layout>

@php

    $liverpol = new Team('Liverpool', 'England');

    echo $liverpol->introduce();
    echo $liverpol->country;

@endphp

<?= '<br><br>' ?>
<?= '<br><br>' ?>
<?= 'hello' ?>