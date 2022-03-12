<x-layout>
    <x-slot name="banner">
        <h1>My Blog</h1>
    </x-slot>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article class="{{ $loop->even ? 'foobar' : ''}}">
                <h2>
                    <a href="/categories/{{ $post->category->id }}">{{$post->category->name}}</a>::<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <h3>By <a href="/bloggers/{{ $post->author->id }}">{!! $post->author->username !!}</a></h3>
                <p>
                    {{ $post->exceprt   }}
                </p>
            </article>
        @endforeach
    </x-slot>
</x-layout>

