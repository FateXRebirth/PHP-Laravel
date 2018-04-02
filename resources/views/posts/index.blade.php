@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card" >
                <div class="card-body">
                    <div class="row">
                        <div class="col col-sm-4 col-md-4">
                            <img style="width:100%" src="/storage/cover_images/{{ $post->cover_image }}">
                        </div>
                        <div class="col col-sm-8 col-md-8">
                            <h5 class="card-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$post->author}}</h6>
                            <p class="card-text"> {!! $post->body !!} </p>
                            <small> Written on {{ $post->created_at }} <br> by {{ $post->user->name }}</small>
                        </div>
                    </div>
                    
                </div>
            </div>
        @endforeach
        {{--  {{ $posts->links() }}  --}}
    @else
        <p>No posts found</p>
    @endif
@endsection