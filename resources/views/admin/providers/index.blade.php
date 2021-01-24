@extends('admin.layout.base')
@extends('admin.layout.base2')
@section('title', 'Providers ')
@section('content')

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<div class="content-wrapper">
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Providers</h3>
                    <a href="{{ route('admin.provider.create') }}" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Provider</a>
                </div>
                <div class="card-body">
                    <table id="table-1" class="table table-bordered table-hover">
                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>Full Name</th>

                                <th>Email</th>

                                <th>Mobile</th>

                                <th>Cancelled Requests</th>

                                <th>Documents / Service Type</th>

                                <th>Image</th>

                                <th>Online</th>

                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach($providers as $index => $provider)

                            <tr>

                                

                                <td>{{ $index + 1 }}</td>

                                <td>{{ $provider->first_name }} {{ $provider->last_name }}</td>

                                @if(Setting::get('demo_mode', 0) == 1)

                                <td>{{ substr($provider->email, 0, 3).'****'.substr($provider->email, strpos($provider->email, "@")) }}</td>

                                @else

                                <td>{{ $provider->email }}</td>

                                @endif

                                @if(Setting::get('demo_mode', 0) == 1)

                                <td>+919876543210</td>

                                @else

                                <td>{{ $provider->mobile }}</td>

                                @endif

                                

                                <td>{{ $provider->total_requests - $provider->accepted_requests }}</td>

                                <td>

                                    @if($provider->pending_documents() > 0 || $provider->service == null)

                                        <a class="btn btn-danger btn-block label-right" href="{{route('admin.provider.document.index', $provider->id )}}">Attention! <span class="btn-label">{{ $provider->pending_documents() }}</span></a>

                                    @else

                                        <a class="btn btn-success btn-block" href="{{route('admin.provider.document.index', $provider->id )}}">All Set!</a>

                                    @endif

                                </td>
                                
                                <td>
                                    @if(isset($provider->avatar))
                                    <img style="height: 70px; margin-bottom: 15px; border-radius:2em;" src=" {{  URL::to('/') }}/storage/{{$provider->avatar}}">
                                    @endif
                                </td>

                                <td>

                                    @if($provider->service)

                                        @if($provider->service->status == 'active')

                                            <label class="btn btn-block btn-primary">Yes</label>

                                        @else

                                            <label class="btn btn-block btn-warning">No</label>

                                        @endif

                                    @else

                                        <label class="btn btn-block btn-danger">N/A</label>

                                    @endif

                                </td>

                                <td>

                                    <div class="input-group-btn">

                                        @if($provider->status == 'approved')

                                        <a class="btn btn-danger btn-block" href="{{ route('admin.provider.disapprove', $provider->id ) }}">Disable</a>

                                        @else

                                        <a class="btn btn-success btn-block" href="{{ route('admin.provider.approve', $provider->id ) }}">Enable</a>

                                        @endif

                                        <button type="button" 

                                            class="btn btn-info btn-block dropdown-toggle"

                                            data-toggle="dropdown">Action

                                            <span class="caret"></span>

                                        </button>

                                        <ul class="dropdown-menu">

                                            <li>

                                                <a href="{{ route('admin.provider.request', $provider->id) }}" class="btn btn-default"><i class="fa fa-search"></i> History</a>

                                            </li>

                                            <li>

                                                <a href="{{ route('admin.provider.statement', $provider->id) }}" class="btn btn-default"><i class="fa fa-account"></i> Statements</a>

                                            </li>

                                            <li>

                                                <a href="{{ route('admin.provider.edit', $provider->id) }}" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a>

                                            </li>

                                            <li>

                                                <form action="{{ route('admin.provider.destroy', $provider->id) }}" method="POST">

                                                    {{ csrf_field() }}

                                                    <input type="hidden" name="_method" value="DELETE">

                                                    <button class="btn btn-default look-a-like" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>

                                                </form>

                                            </li>

                                        </ul>

                                    </div>

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

                                <th>Cancelled Requests</th>

                                <th>Documents / Service Type</th>

                                <th>Image</th>

                                <th>Online</th>

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