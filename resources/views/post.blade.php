@extends('layouts.main')

@section('container')
<article>
<h3 class="mb-5">{{ $post->title }}</h3>

<p>By. <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

{!!  $post->body !!} 
</article>

<a href="/blog">Back to post</a>
@endsection