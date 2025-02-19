<!-- Modal -->
<div class="modal fade" id="exampleModalCenteraddbus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle" align="center">
            <i class="glyphicon glyphicon-log-in">Add New Destination</i></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('destination.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="source_id" class="form-control" required>
                      <option value="">Select Source</option>
                      @foreach ($sources as $source)
                      <option value="{{ $source->source_id }}">{{ $source->source_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="destination_name" class="form-control" placeholder="Enter Destination Name" type="text" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="destination_code" class="form-control" placeholder="Enter Destination Code" type="text" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input name="status" aria-describedby="emailHelp" type="checkbox">
                    <label for="status">Active</label>
                  </div>
                </div>
              </div>
            </fieldset>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register Destination</button>
          </form>
        </div>
      </div>
    </div>
</div>
