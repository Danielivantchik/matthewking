@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact</div>

                    <div class="panel-body">
                        <form action="{{ route('contact.update') }}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <input type="text" class="form-control phone" placeholder="Phone" name="phone" value="{{ auth()->user()->phone }}">
                            </div>
                            <div class="form-group">
                                <textarea name="address" class="form-control" placeholder="Address" rows="1">{{ auth()->user()->address}}</textarea>
                            </div>

                            <h5>Contact Map</h5>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Longitude" name="longitude" value="{{ auth()->user()->longitude }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Latitude" name="latitude" value="{{ auth()->user()->latitude }}">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
