<!-- Modal -->
<div class="modal fade" id="exampleModalCenteraddbus_schedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLongTitle" align="center">
                    <i class="glyphicon glyphicon-log-in">Add New Bus Schedule</i></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('bus_schedules.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="bus_id" class="form-control">
                                        <option value="">Select Bus</option>
                                        @foreach ($buses as $bus)
                                            <option value="{{ $bus->bus_id }}">{{ $bus->bus_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="operator_id" class="form-control">
                                        <option value="">Select Operator</option>
                                        @foreach ($operators as $operator)
                                            <option value="{{ $operator->operator_id }}">{{ $operator->operator_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="source_id" class="form-control">
                                        <option value="">Select Source</option>
                                        @foreach ($sources as $source)
                                            <option value="{{ $source->source_id }}">{{ $source->source_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="destination_id" class="form-control">
                                        <option value="">Select Destination</option>
                                        @foreach ($destinations as $destination)
                                            <option value="{{ $destination->destination_id }}">{{ $destination->destination_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="depart_date" class="form-control" placeholder="Enter Depart Date" type="date">
                        </div>
                        <div class="form-group">
                            <input name="return_date" class="form-control" placeholder="Enter Return Date" type="date">
                        </div>
                        <div class="form-group">
                            <input name="depart_time" class="form-control" placeholder="Enter Depart Time" type="time">
                        </div>
                        <div class="form-group">
                            <input name="return_time" class="form-control" placeholder="Enter Return Time" type="time">
                        </div>
                        <div class="form-group">
                            <input name="pickup_address" class="form-control" placeholder="Enter Pickup Address" type="text">
                        </div>
                        <div class="form-group">
                            <input name="dropoff_address" class="form-control" placeholder="Enter Dropoff Address" type="text">
                        </div>
                        <div class="form-group">
                            <input name="status" type="checkbox" value="1">
                            <label for="status">Active</label>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Bus Schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
