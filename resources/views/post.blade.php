<div class="post">
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->body }}</p>
    @include('like', ['model' => $post])
</div>