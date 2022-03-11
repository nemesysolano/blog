<x-layout>
    <x-slot name="banner">
        <h1>My Blog</h1>
    </x-slot>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article class="{{ $loop->even ? 'foobar' : ''}}">
                <h2>
                    <a href="/posts/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                </h2>
                <div>
                    {{ $post->exceprt   }}
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>

