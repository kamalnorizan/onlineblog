@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $post->title }} ~ <em>{{ $post->user->name }}</em>
                </div>

                <div class="card-body">
                    {{ $post->body }}
                    <hr>
                    <br>
                <h4>{{ $post->comments->count() }} Comments:</h4>
                    @foreach ($post->comments as $comment)
                        <strong>{{$comment->user->name}}</strong><br>
                        <small>{{\Carbon\Carbon::parse($comment->created_at)->format('d-m-Y')}}</small><br>
                        {{$comment->comment}}
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
