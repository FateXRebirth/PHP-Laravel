@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$post->author}}</h6>
                    <p class="card-text"> {!! $post->body !!} </p>
                    <small> Written on {{ $post->created_at }} <br> by {{ $post->user->name }}</small>
                </div>
            </div>
        @endforeach
        {{--  {{ $posts->links() }}  --}}
    @else
        <p>No posts found</p>
    @endif
@endsection