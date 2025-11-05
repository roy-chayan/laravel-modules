<h1>Blog Posts</h1>
@foreach($posts as $post)
    <p><strong>{{ $post->title }}</strong> by {{ $post->author->name }}</p>
@endforeach
