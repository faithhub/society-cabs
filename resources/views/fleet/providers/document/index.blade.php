@extends('fleet.layout.basecode')
@extends('admin.layout.base2')

@section('title', 'Provider Documents ')

@section('content')


<link rel="stylesheet" href="{{url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

<div class="content-wrapper">
<div class="container-fluid">
    <div class="box box-block bg-white">
        <h5 class="col-12">Provider Service Type Allocation</h5>
        <div class="row">
            <div class="col-xs-12">
                @if($ProviderService->count() > 0)
                <hr><h6>Allocated Services :  </h6>
                <table id="table-1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Service Name</th>
                            <th>Service Number</th>
                            <th>Service Model</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ProviderService as $service)
                        <tr>
                            <td>{{ $service->service_type->name }}</td>
                            <td>{{ $service->service_number }}</td>
                            <td>{{ $service->service_model }}</td>
                            <td>
                                <form action="{{ route('admin.provider.document.service', [$Provider->id, $service->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-large btn-block">Delete</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Service Name</th>
                            <th>Service Number</th>
                            <th>Service Model</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
                @endif
                <hr>
            </div>
            <form action="{{ route('admin.provider.document.store', $Provider->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="col-xs-3">
                    <select class="form-control input" name="service_type" required>
                        @forelse($ServiceTypes as $Type)
                        <option value="{{ $Type->id }}">{{ $Type->name }}</option>
                        @empty
                        <option>- Please Create a Service Type -</option>
                        @endforelse
                    </select>
                </div>
                <div class="col-xs-3">
                    <input type="text" required name="service_number" class="form-control" placeholder="Number (CY 98769)">
                </div>
                <div class="col-xs-3">
                    <input type="text" required name="service_model" class="form-control" placeholder="Model (Audi R8 - Black)">
                </div>
                <div class="col-xs-3">
                    <button class="btn btn-primary btn-block" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <table id="table-1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Document Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Provider->documents as $Index => $Document)
                        <tr>
                            <td>{{ $Index + 1 }}</td>
                            <td>{{ $Document->document->name }}</td>
                            <td>{{ $Document->status }}</td>
                            <td>
                                <div class="input-group-btn">
                                    <a href="{{ route('admin.provider.document.edit', [$Provider->id, $Document->id]) }}"><span class="btn btn-success btn-large">View</span></a>
                                    <button class="btn btn-danger btn-large" form="form-delete">Delete</button>
                                    <form action="{{ route('admin.provider.document.destroy', [$Provider->id, $Document->id]) }}" method="POST" id="form-delete">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Document Type</th>
                            <th>Status</th>
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


<script src="{{url('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
@endsection