<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <!-- @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        @if ($post -> published)
        <span>Published</span>
        @else
        <span>Not Published</span>
        @endif
    @endforeach

    @php
    echo "Hello World";
    @endphp -->

    @datetime($post->created_at)
</div>