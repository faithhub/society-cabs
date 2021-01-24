@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', $page)

@section('content')


<link rel="stylesheet" href="{{url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="box box-block bg-white">
			
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
					<span class="info-box-icon bg-success elevation-1"><i class="fas fa-car-side"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">@lang('dashboard.Total_Bookings')</span>
						<span class="info-box-number">
						{{$rides->count()}}
						</span>
					</div>
					<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
					<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times-circle"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Cancelled Rides</span>
						<span class="info-box-number">{{$cancel_rides}}</span>
					</div>
					<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
					<span class="info-box-icon bg-primary elevation-1"><i class="fas fa-file-invoice-dollar"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">@lang('dashboard.Total_Revenue')</span>
						<span class="info-box-number">
							{{currency($revenue[0]->overall)}}
						</span>
					</div>
					<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
					<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-money-bill-wave"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Total commision  <b>{{currency($finalcommission)}}</b></span>
						@if(isset($provider_id))
							@if($finalcommission > 0)
								<a href="{{route('admin.provider.paid', $provider_id)}}"><button style="margin-top: 10px" type="button" class="btn btn-success">Paid By Driver</button></a>
							@else
								<a href="{{route('admin.provider.paid', $provider_id)}}"><button style="margin-top: 10px" type="button" class="btn btn-success">Paid To Driver</button></a>
							@endif
							
						@endif
						</div>
					<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				
			</div>

		</div>
	</div>
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">{{$page}}</h3>
						
					</div>
					<div class="card-body">
						<div class="box-block clearfix">
							<h5 class="float-xs-left">Earnings</h5>
							<div class="float-xs-right">
							</div>
						</div>
						@if(count($rides) != 0)
						<table id="table-1" class="table table-bordered table-hover">
						<thead>
							<tr>
								<td>Booking ID</td>
								<td>Picked up</td>
								<td>Dropped</td>
								<td>Request Details</td>
								<td>Commission</td>
								<td>Dated on</td>
								<td>Status</td>
								<td>Earned</td>
							</tr>
						</thead>
						<tbody>
						<?php $diff = ['-success','-info','-warning','-danger']; ?>
								@foreach($rides as $index => $ride)
									<tr>
										<td>{{$ride->booking_id}}</td>
										<td>
											@if($ride->s_address != '')
												{{$ride->s_address}}
											@else
												Not Provided
											@endif
										</td>
										<td>
											@if($ride->d_address != '')
												{{$ride->d_address}}
											@else
												Not Provided
											@endif
										</td>
										<td>
											@if($ride->status != "CANCELLED")
												<a class="text-primary" href="{{route('admin.requests.show',$ride->id)}}"><span class="underline">View Ride Details</span></a>
											@else
												<span>No Details Found </span>
											@endif									
										</td>
										<td>{{currency($ride->payment['commision'])}}</td>
										<td>
											<span class="text-muted">{{date('d M Y',strtotime($ride->created_at))}}</span>
										</td>
										<td>
											@if($ride->status == "COMPLETED")
												<span class="tag tag-success">{{$ride->status}}</span>
											@elseif($ride->status == "CANCELLED")
												<span class="tag tag-danger">{{$ride->status}}</span>
											@else
												<span class="tag tag-info">{{$ride->status}}</span>
											@endif
										</td>
										<td>{{currency($ride->payment['fixed'] + $ride->payment['distance'])}}</td>

									</tr>
								@endforeach
									
						<tfoot>
							<tr>
								<td>Booking ID</td>
								<td>Picked up</td>
								<td>Dropped</td>
								<td>Request Details</td>
								<td>Commission</td>
								<td>Dated on</td>
								<td>Status</td>
								<td>Earned</td>
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
