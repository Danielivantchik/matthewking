@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Schedule</strong>
                    <div class="pull-right">
                        <a href="/admin/schedule/create"><i class="fa fa-plus"></i> New Event</a>
                    </div>
                </div>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th width="200px"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules as $schedule)
                        <tr>
                            <td>
                                <strong><a href="#">{{ $schedule->title }}</a></strong>
                            </td>

                            <td>{{ $schedule->date }}</td>
                            <td>
                                <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="confirmAndDelete()">
                                    <i class="fa fa-trash"></i> Remove
                                </a>
                                <form id="deleteblog" action="{{ route('schedule.destroy', $schedule->id) }}" method="POST" style="display: none;">
                                    {{ method_field("DELETE") }}
                                    {{ csrf_field() }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $schedules->links() }}
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
