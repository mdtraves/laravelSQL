<x-layout>
    <x-slot name='firstInsert'>

        @foreach ($posts as $post)

        {!! $post !!} 
    
        @endforeach


    </x-slot>
    <x-slot name='secondInsert'>

        @foreach ($posts as $post)
        
        {!! "im in the 2nd one" !!} 
        {{ $loop->iteration }} 
        <x-button class="">
            button
        </x-button>
    
        @endforeach


    </x-slot>
    
</x-layout>
