@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Create a Blog post</strong></div>

                    <div class="panel-body">
                        <form method="post" action="{{ url('/admin/blog') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                                       value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                                <input type="text" name="tags" class="form-control" placeholder="Tags (comma seperated tags)">
                                @if ($errors->has('tags'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('tags') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <textarea name="description" class="form-control" placeholder="Description"
                                          rows=2>{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <textarea name="body" id="editor" class="form-control" placeholder="Body"></textarea>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                        <input type="file" id="photo" name="photo">
                                        @if ($errors->has('photo'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                        @else
                                            <p class="help-block">Upload a photo.</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox pull-right">
                                        <label>
                                            <input type="checkbox" name="visible"> Visible
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                            <a href="/admin/blog" class="btn btn-danger"><i class="fa fa-undo"></i> Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
