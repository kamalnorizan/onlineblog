@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-title">
                    {{ $post->title }} ~ <em>{{ $post->user->name }}</em>
                </div>

                <div class="ibox-content">
                    {{ $post->body }}
                    <hr>
                    <br>
                    {!! Form::open(['method' => 'POST', 'route' => 'comment.store']) !!}

                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            {!! Form::label('comment', 'Comment') !!}
                            {!! Form::textarea('comment', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('comment') }}</small>
                        </div>

                        {!! Form::hidden('post_id', $post->id, ['id'=>'post_id']) !!}

                        <div class="btn-group pull-right">
                            {!! Form::submit("Submit", ['class' => 'btn btn-success']) !!}
                        </div>

                    {!! Form::close() !!}
                    <br>
                    <br>
                    <hr>
                <h4>{{ $post->comments->count() }} Comments:</h4>
                    @foreach ($post->comments as $comment)
                        {!! Form::open(['method' => 'DELETE', 'route' => ['comment.destroy',$comment->id]]) !!}
                            <strong>{{$comment->user->name}}</strong>
                            @if(Auth::user()->id == $comment->user_id)
                            <button type="submit" onclick="return confirm('Are you sure you want to remove this comment')" class="btn btn-link">
                                <i class="icon-trash text-danger"></i>
                            </button>
                            @endif <br>
                        {!! Form::close() !!}
                        <small>{{\Carbon\Carbon::parse($comment->created_at)->format('d-m-Y')}}</small><br>
                        {{$comment->comment}}
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
