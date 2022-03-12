<x-layout>
    <x-slot name="banner">
        <h1>{{$post->category->name}}::{{ $post->title }}</h1> <!-- Use plalin {} for plain text -->
        <h2>By <a href="/bloggers/{{ $post->author->id }}">{!! $post->author->username !!}</a></h2>
    </x-slot>
    <x-slot name="content">
        <div>
            {!! $post->body !!} <!-- Use !! for HTML -->
        </div>
        <a href="/">Go Back</a>
    </x-slot>
    
</x-layout>

