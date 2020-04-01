@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Create New Post</div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'post.store']) !!}

                        @include('posts._form')

                        <div class="btn-group pull-right">
                            {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                            {!! Form::submit("Post", ['class' => 'btn btn-success']) !!}
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

