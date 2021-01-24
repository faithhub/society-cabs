@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', 'Locations ')

@section('content')

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <div class="content-wrapper">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <h5 class="mb-1"><span class="s-icon"><i class="ti-zoom-in"></i></span> &nbsp;Zones </h5>
                <hr/>
                <a href="{{ route('admin.zone.create') }}" style="margin-left: 1em;" class="btn shadow-box btn-primary btn-rounded w-min-sm m-b-0-25 waves-effect waves-light pull-right"><i class="fa fa-plus"></i> Add New Location</a>
                <table id="table-1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Zone Name</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Currency</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th style="width:50px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($zones as $index => $zone)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$zone->zone_name}}</td>
                            <td>{{$zone->country}}</td>
                            <td>{{$zone->state}}</td>
                            <td>{{$zone->city}}</td>
                            <td>{{$zone->currency}}</td>
                            <td>{{$zone->status}}</td>
                            <td>{{ date('Y-m-d: H:i:A', strtotime( $zone->created_at ) )}}</td>
                            <td style="width: 100px;">
                                <form action="{{ route('admin.zone.destroy', $zone->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="{{ route('admin.zone.edit', $zone->id) }}" class="btn shadow-box btn-black"><i class="fa fa-eye"></i></a>
                                    <button class="btn shadow-box btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Location Name</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Currency</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </div>
    </div>
    
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

@endsection