@extends('layouts.header')
@section('content')
@include('admin.message')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <span class="pull-center">
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenteraddbus_schedule" 
                    data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
                    <i class="glyphicon glyphicon-plus"></i> Add New Bus Schedule</a>
                </span>
                <br>
                <br>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Bus Schedules List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if (count($schedules) > 0)
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Bus</th>
                                        <th>Operator</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Depart Date</th>
                                        <th>Return Date</th>
                                        <th>Depart Time</th>
                                        <th>Return Time</th>
                                        <th>Pickup Address</th>
                                        <th>Dropoff Address</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($schedules as $schedule)
                                            <tr>
                                                <td>{{ $schedule->id }}</td>
                                                <td>{{ $schedule->bus ? $schedule->bus->bus_name : 'N/A' }}</td>
                                                <td>{{ $schedule->operator ? $schedule->operator->operator_name : 'N/A' }}</td>
                                                <td>{{ $schedule->source->source_name }}</td>
                                                <td>{{ $schedule->destination->destination_name}}</td>
                                                <td>{{ $schedule->depart_date }}</td>
                                                <td>{{ $schedule->return_date }}</td>
                                                <td>{{ $schedule->depart_time }}</td>
                                                <td>{{ $schedule->return_time }}</td>
                                                <td>{{ $schedule->pickup_address }}</td>
                                                <td>{{ $schedule->dropoff_address }}</td>
                                                <td>{{ $schedule->status ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-info">Edit</a>
                                                    <form action="" method="post" style="display:inline-block;">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <input type="submit" name="submit" value="Delete" class="btn btn-sm btn-danger" />
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.bus_schedules.add-bus_schedules')
@endsection
