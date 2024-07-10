@extends('layouts.header')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Bus Schedule</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('bus_schedules.update', $schedule->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="bus_id" class="form-control">
                                                <option value="">Select Bus</option>
                                                @foreach ($buses as $bus)
                                                    <option value="{{ $bus->id }}" {{ $bus->id == $schedule->bus_id ? 'selected' : '' }}>{{ $bus->bus_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="operator_id" class="form-control">
                                                <option value="">Select Operator</option>
                                                @foreach ($operators as $operator)
                                                    <option value="{{ $operator->id }}" {{ $operator->id == $schedule->operator_id ? 'selected' : '' }}>{{ $operator->operator_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="source_id" class="form-control">
                                                <option value="">Select Source</option>
                                                @foreach ($sources as $source)
                                                    <option value="{{ $source->id }}" {{ $source->id == $schedule->source_id ? 'selected' : '' }}>{{ $source->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="destination_id" class="form-control">
                                                <option value="">Select Destination</option>
                                                @foreach ($destinations as $destination)
                                                    <option value="{{ $destination->id }}" {{ $destination->id == $schedule->destination_id ? 'selected' : '' }}>{{ $destination->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="depart_date" value="{{ $schedule->depart_date }}" class="form-control" placeholder="Enter Depart Date" type="date">
                                </div>
                                <div class="form-group">
                                    <input name="return_date" value="{{ $schedule->return_date }}" class="form-control" placeholder="Enter Return Date" type="date">
                                </div>
                                <div class="form-group">
                                    <input name="depart_time" value="{{ $schedule->depart_time }}" class="form-control" placeholder="Enter Depart Time" type="time">
                                </div>
                                <div class="form-group">
                                    <input name="return_time" value="{{ $schedule->return_time }}" class="form-control" placeholder="Enter Return Time" type="time">
                                </div>
                                <div class="form-group">
                                    <input name="pickup_address" value="{{ $schedule->pickup_address }}" class="form-control" placeholder="Enter Pickup Address" type="text">
                                </div>
                                <div class="form-group">
                                    <input name="dropoff_address" value="{{ $schedule->dropoff_address }}" class="form-control" placeholder="Enter Dropoff Address" type="text">
                                </div>
                                <div class="form-group">
                                    <input name="status" type="checkbox" {{ $schedule->status ? 'checked' : '' }}>
                                    <label for="status">Active</label>
                                </div>
                            </fieldset>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Update Bus Schedule</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
