@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Social Media Link</div>

                <div class="panel-body">
                    <form action="{{ route('social.update') }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="{{ auth()->user()->facebook }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{ auth()->user()->instagram }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="twitter" placeholder="Twitter" value="{{ auth()->user()->twitter }}">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
