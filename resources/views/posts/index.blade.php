@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Posts <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary float-right">Create New Post</a>
                </div>
                <div class="card-body">
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
                                {{-- @foreach ($post->comments as $comment)
                                    ~ {{$comment->comment}} <em>{{$comment->user->name}}</em> <br>
                                @endforeach --}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($post->publish_at)->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$post->user->name}} <br>
                                {{-- @foreach ($post->user->posts as $userpost)
                                    - <em>{{$userpost->title}}</em> <br>
                                @endforeach --}}
                            </td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id]]) !!}
                                        <a href="{{ route('post.show',[$post->id]) }}" class="btn btn-primary btn-sm" alt="Show Details"> <i class="icon-eye-open"></i> </a>
                                        <a href="{{ route('post.edit',[$post->id]) }}" class="btn btn-warning btn-sm" alt="Edit Details"> <i class="icon-edit"></i> </a>
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')" class="btn btn-sm btn-danger"> <i class="icon-remove"></i> </button>
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
</div>
@endsection
