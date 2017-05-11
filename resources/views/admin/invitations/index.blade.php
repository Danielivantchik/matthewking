@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Invitations</strong>
                    </div>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date Submitted</th>
                            <th width="200px"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($invitations as $invitation)
                            <tr>
                                <td>{{ ucwords($invitation->name) }}</td>
                                <td>
                                    <a href="mailto:{{ $invitation->email }}">{{ $invitation->email }}</a>
                                </td>
                                <td>{{ $invitation->phone }}</td>
                                <td>{{ $invitation->created_at->format("Y-m-d") }} ({{$invitation->created_at->diffForHumans()}})</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#details_{{$invitation->id}}">
                                        Details
                                    </button>
                                    <a href="#" class="btn btn-danger btn-sm" onclick="confirmAndDelete()">
                                        <i class="fa fa-trash"></i> Remove
                                    </a>
                                    <form id="deleteblog" action="{{ route('invitations.destroy', $invitation->id) }}" method="POST" style="display: none;">
                                        {{ method_field("DELETE") }}
                                        {{ csrf_field() }}
                                    </form>
                                    <div class="modal fade" id="details_{{$invitation->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Invitation Details</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Name: </b>{{ $invitation->name }}<br>
                                                    <b>Email: </b><a href="mailto:{{ $invitation->email }}">{{ $invitation->email }}</a><br>
                                                    <b>Phone: </b>{{ $invitation->phone }}<br><br>
                                                    <b>Description:</b><br>
                                                    <p>{{ $invitation->description }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
