@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-title">Create New Post</div>

            <div class="ibox-content">
                {!! Form::open(['method' => 'POST', 'route' => 'post.store']) !!}

                    @include('posts._form')

                    <div class="btn-group pull-right">
                        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                        {!! Form::submit("Post", ['class' => 'btn btn-success']) !!}
                    </div>

                {!! Form::close() !!}
                <br> <br>
            </div>
        </div>
    </div>
</div>
@endsection

