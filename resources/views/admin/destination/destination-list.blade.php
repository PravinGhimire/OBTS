@extends('layouts.header')
@section('content')
@include('admin.message')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <span class="pull-center">
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenteraddbus" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">
                        <i class="glyphicon glyphicon-plus"></i> Add New Destination
                    </a>
                </span>
                <br><br>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Destination List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if (count($destinations) > 0)
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Source Name</th>
                                        <th>Destination Name</th>
                                        <th>Destination Code</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($destinations as $key => $data)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $data->source_name }}</td>
                                                <td><a data-toggle="modal" data-target="#exampleModalCenterviewOperator{{ $data->id }}" data-toggle="tooltip">{{ $data->destination_name }}</a></td>
                                                <td>{{ $data->destination_code }}</td>
                                                <td>{{ $data->created_at }}</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-info">Edit</button>
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
@include('admin.destination.add-destination')
@endsection
