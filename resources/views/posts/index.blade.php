@extends('layouts.app')

@section('actionarea')
<a href="{{ route('post.create') }}" class="btn btn-primary">Create New Post</a>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-title">
                Posts
            </div>
            <div class="ibox-content">
                <table class="table">
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            Title
                        </td>
                        <td>
                            Publish Date
                        </td>
                        <td>
                            Author
                        </td>
                        <td width="15%">
                            Action(s)
                        </td>
                    </tr>
                    @foreach ($posts as $key=>$post)
                    <tr>
                        <td>
                            {{ ($key+1) + ($posts->perPage()*($posts->currentPage() - 1)) }}
                        </td>
                        <td>
                            {{$post->title}} <br>
                        </td>
                        <td>
                            {{\Carbon\Carbon::parse($post->publish_at)->format('d-m-Y')}}
                        </td>
                        <td>
                            {{$post->user->name}} <br>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id]]) !!}
                            <a href="{{ route('post.show',[$post->id]) }}" class="btn btn-primary btn-sm"
                                alt="Show Details"> <i class="fa fa-eye"></i> </a>
                            <a href="{{ route('post.edit',[$post->id]) }}" class="btn btn-warning btn-sm"
                                alt="Edit Details"> <i class="fa fa-edit"></i> </a>
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')"
                                class="btn btn-sm btn-danger"> <i class="fa fa-remove"></i> </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
