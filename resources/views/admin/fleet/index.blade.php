@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', 'Fleets ')

@section('content')

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-1">
                            Fleet Owners
                            @if(Setting::get('demo_mode', 0) == 1)
                            <span class="pull-right">(*personal information hidden in demo)</span>
                            @endif
                        </h5>
                        <a href="{{ route('admin.fleet.create') }}" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Fleet Owner</a>
                    </div>
                    <div class="card-body">
                        <table id="table-1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Avatar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fleets as $index => $fleet)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $fleet->name }}</td>
                                    <td>{{ $fleet->company }}</td>
                                    @if(Setting::get('demo_mode', 0) == 1)
                                    <td>{{ substr($fleet->email, 0, 3).'****'.substr($fleet->email, strpos($fleet->email, "@")) }}</td>
                                    @else
                                    <td>{{ $fleet->email }}</td>
                                    @endif
                                    @if(Setting::get('demo_mode', 0) == 1)
                                    <td>+919876543210</td>
                                    @else
                                    <td>{{ $fleet->mobile }}</td>
                                    @endif
                                    <td><img src="{{img($fleet->logo)}}" style="height: 100px;"></td>
                                    <td>
                                        <form action="{{ route('admin.fleet.destroy', $fleet->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="{{ route('admin.provider.index') }}?fleet={{$fleet->id}}" class="btn btn-info"> Show Provider</a>
                                            <a href="{{ route('admin.fleet.edit', $fleet->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Avatar</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
@endsection