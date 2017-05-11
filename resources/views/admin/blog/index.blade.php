@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Blog Posts</strong>
                        <div class="pull-right">
                            <a href="/admin/blog/create"><i class="fa fa-plus"></i> New Post</a>
                        </div>
                    </div>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Tags</th>
                            <th>Date Created</th>
                            <th width="200px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>
                                    <strong><a href="#">{{ $blog->title }}</a></strong>
                                </td>
                                <td>
                                    @foreach($blog->tags as $tag)
                                        <span class="label label-primary">{{ $tag->name }}</span>
                                    @endforeach
                                </td>
                                <td>{{ $blog->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm" onclick="confirmAndDelete()">
                                        <i class="fa fa-trash"></i> Remove
                                    </a>
                                    <form id="deleteblog" action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display: none;">
                                        {{ method_field("DELETE") }}
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        function confirmAndDelete() {
            var c = confirm("Are you sure you want to delete this?");

            if(c == true) {
                event.preventDefault();
                document.getElementById('deleteblog').submit();
            } else {
                return false;
            }
        }
    </script>

@endsection
