<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('title') }}</small>
</div>

<div class="form-group{{ $errors->has('publish_at') ? ' has-error' : '' }}">
    {!! Form::label('publish_at', 'Publish Date') !!}
    {!! Form::date('publish_at',null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('publish_at') }}</small>
</div>

<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', 'Content') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('body') }}</small>
</div>
