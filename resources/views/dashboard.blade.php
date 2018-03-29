@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                <h5 class="card-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h5>
                                <p class="card-text">{!! $post->body !!}</p>
                                <small> Written on {{ $post->created_at }} </small><br>
                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close() !!}
                                </div>
                            </div>
                        @endforeach
                        {{--  {{ $posts->links() }}  --}}
                    @else
                        <p>No posts found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
