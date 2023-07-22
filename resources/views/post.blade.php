<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article</title>
    <link rel="stylesheet" href="../app.css">
</head>
<body>
 
   
        {!! $post !!}
 

</body>
</html>









{{-- <x-layout>

    <x-slot name='title'>Posts Page </x-slot>

    <x-slot name='firstInsert'>

        @foreach ($posts as $post)

        <article>
            <h1>{{ $post->username }}</h1>
            <p>{{ $post->excerpt }}</p>
            <p>{{ $post->body }}</p>
        </article>

        @endforeach

    </x-slot>

</x-layout> --}}