<x-layout>
    <x-slot name="banner">
        <h1>{{ $post->title }}</h1> <!-- Use plalin {} for plain text -->
    </x-slot>
    <x-slot name="content">
        <div>
            {!! $post->body !!} <!-- Use !! for HTML -->
        </div>
        <a href="/">Go Back</a>
    </x-slot>
    
</x-layout>

