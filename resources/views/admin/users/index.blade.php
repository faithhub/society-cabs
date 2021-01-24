@extends('admin.layout.base')
@extends('admin.layout.base2')


@section('title', 'Users ')

@section('content')

<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<div class="content-wrapper">
<section class="content">
    <div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Users</h3>
            <a href="{{ route('admin.user.create') }}" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New User</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="table-1" class="table table-bordered table-hover">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Rating</th>
                        <th>Wallet Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        @if(Setting::get('demo_mode', 0) == 1)
                        <td>{{ substr($user->email, 0, 3).'****'.substr($user->email, strpos($user->email, "@")) }}</td>
                        @else
                        <td>{{ $user->email }}</td>
                        @endif
                        @if(Setting::get('demo_mode', 0) == 1)
                        <td>+919876543210</td>
                        @else
                        <td>{{ $user->mobile }}</td>
                        @endif
                        <td>{{ $user->rating }}</td>
                        <td>{{ currency($user->wallet_balance) }}</td>
                        <td>
                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <a href="{{ route('admin.user.request', $user->id) }}" class="btn btn-info"><i class="fa fa-search"></i> History</a>
                                <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Rating</th>
                        <th>Wallet Amount</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
    <!-- <div class="container-fluid">
        <div class="box card-body">
            <h5 class="mb-1">
                Users
                @if(Setting::get('demo_mode', 0) == 1)
                <span class="pull-right">(*personal information hidden in demo)</span>
                @endif
            </h5>
            
            <table class="table table-striped table-bordered dataTable" id="example-1">
             
            </table>
        </div>
    </div> -->

    
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</div>
@endsection