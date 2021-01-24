@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', 'Account Manager ')

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
                            Account Manager
                            @if(Setting::get('demo_mode', 0) == 1)
                            <span class="pull-right">(*personal information hidden in demo)</span>
                            @endif
                        </h5>
                        <a href="{{ route('admin.account-manager.create') }}" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Account Manager</a>
                    </div>
                    <div class="card-body">
                        <table id="table-1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($accounts as $index => $account)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $account->name }}</td>
                                    @if(Setting::get('demo_mode', 0) == 1)
                                    <td>{{ substr($account->email, 0, 3).'****'.substr($account->email, strpos($account->email, "@")) }}</td>
                                    @else
                                    <td>{{ $account->email }}</td>
                                    @endif
                                    @if(Setting::get('demo_mode', 0) == 1)
                                    <td>+919876543210</td>
                                    @else
                                    <td>{{ $account->mobile }}</td>
                                    @endif
                                    <td>
                                        <form action="{{ route('admin.account-manager.destroy', $account->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="{{ route('admin.account-manager.edit', $account->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
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
                                    <th>Email</th>
                                    <th>Mobile</th>
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