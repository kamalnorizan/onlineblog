@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Posts</div>

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
                            <td>
                                Action(s)
                            </td>
                        </tr>
                        @foreach ($posts as $key=>$post)
                        <tr>
                            <td>
                                {{ ($key+1) + ($posts->perPage()*($posts->currentPage() - 1)) }}
                            </td>
                            <td>
                                {{$post->title}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($post->publish_at)->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$post->user_id}}
                            </td>
                            <td>

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
