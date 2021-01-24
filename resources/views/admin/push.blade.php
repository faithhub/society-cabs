@extends('admin.layout.base')
@extends('admin.layout.base2')
@section('title', 'Push Notification ')

@section('content')
<div class="content-wrapper">
<div class="container-fluid">
    	<div class="box box-block bg-white">

			<h5 style="margin-bottom: 2em;">@lang('dashboard.s_p_t_u_a')</h5>

            <form class="form-horizontal" action="{{route('admin.user_push')}}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}
	
				<div class="form-group row">
					<label for="title" class="col-xs-12 col-form-label">@lang('dashboard.Title')</label>
					<div class="col-xs-12 col-md-6 col-lg-6">
						<input class="form-control" type="text" value="{{ old('title') }}" name="title" required id="title" placeholder="Title">
					</div>
				</div>

				<div class="form-group row">
					<label for="message" class="col-xs-12 col-form-label">@lang('dashboard.Message')</label>
					<div class="col-xs-12 col-md-6 col-lg-6">
                      <textarea class="pure-input-1-2" style="width: 100%;" name="message" id="message" rows="5" placeholder="Notification message!"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label for="zipcode" class="col-xs-12 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">@lang('dashboard.Send')</button>
					</div>
				</div>
			</form>
		</div>
    </div>
<div class="container-fluid">
    	<div class="box box-block bg-white">

			<h5 style="margin-bottom: 2em;">@lang('dashboard.s_p_t_d_a')</h5>

            <form class="form-horizontal" action="{{route('admin.driver_push')}}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}
				<div class="form-group row">
					<label for="title" class="col-xs-12 col-form-label">@lang('dashboard.Title')</label>
					<div class="col-xs-12 col-md-6 col-lg-6">
						<input class="form-control" type="text" value="{{ old('title') }}" name="title" required id="title" placeholder="Title">
					</div>
				</div>

				<div class="form-group row">
					<label for="message" class="col-xs-12 col-form-label">@lang('dashboard.Message')</label>
					<div class="col-xs-12 col-md-6 col-lg-6">
                      <textarea class="pure-input-1-2" style="width: 100%;" name="message" id="message1" rows="5" placeholder="Notification message!"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label for="zipcode" class="col-xs-12 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">@lang('dashboard.Send')</button>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>


@endsection
