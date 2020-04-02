@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-title">Edit Form</div>

                <div class="ibox-content">
                   {!! Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'PUT']) !!}

                        @include('posts._form')

                       <div class="btn-group pull-right">

                           {!! Form::submit("Update", ['class' => 'btn btn-success']) !!}
                       </div>

                   {!! Form::close() !!}
                   <br> <br>
                </div>
            </div>
        </div>
    </div>
@endsection

