@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Form</div>

                <div class="card-body">
                   {!! Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'PUT']) !!}

                        @include('posts._form')

                       <div class="btn-group pull-right">

                           {!! Form::submit("Update", ['class' => 'btn btn-success']) !!}
                       </div>

                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

