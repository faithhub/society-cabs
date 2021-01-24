@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', 'Request History ')

@section('content')

<link rel="stylesheet" href="{{url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<div class="content-wrapper">
    <section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">TaxiMeter History</h3>
						
					</div>
					<div class="card-body">
                        @if(count($requests) != 0)
						<table id="table-1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Provider ID</th>
                                    <th>Distance</th>
                                    <th>Amount</th>
                                    <th>Date & Time</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($requests as $index => $request)
                                <tr>
                                    <td>{{ $request->id }}</td>
                                   	<td>{{ $request->provider_id }}</td>
                                    <td>{{ $request->distance }} Km</td>
                                    <td>{{ currency($request->amount) }}</td>
                                    <td>{{ $request->created_at }}</td>
                                    </td>
                                   
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Provider ID</th>
                                    <th>Distance</th>
                                    <th>Amount</th>
                                    <th>Date & Time</th>
                                </tr>
                            </tfoot>
						</table>
						@else
						<h6 class="no-result">No results found</h6>
						@endif 
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