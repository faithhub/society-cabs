@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', 'Apps Settings ')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
			<h5>Apps Settings</h5>

            <form class="form-horizontal" action="{{ route('admin.settings.appsetting.store') }}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}

				<div class="form-group row">
					<label for="android_user_fcm_key" class="col-xs-2 col-form-label">User App FCM Key</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('android_user_fcm_key', '')  }}" name="android_user_fcm_key" required id="android_user_fcm_key" placeholder="User App FCM Key">
					</div>
				</div>

				<div class="form-group row">
					<label for="android_user_driver_key" class="col-xs-2 col-form-label">Driver App FCM Key</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('android_user_driver_key', '')  }}" name="android_user_driver_key" required id="android_user_driver_key" placeholder="Driver App FCM Key">
					</div>
				</div>

                <div class="form-group row">
					<label for="tawk_live" class="col-xs-2 col-form-label">Tawk Live Support Key</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('tawk_live', '')  }}" name="tawk_live" required id="tawk_live" placeholder="Tawk Live Support Key">
					</div>
				</div>

				<div class="form-group row">
					<label for="verification" class="col-xs-2 col-form-label">Phone Verification In App</label>
					<div class="col-xs-10">
						<input @if(Setting::get('verification') == 1) checked  @endif  name="verification" id="verification"  type="checkbox" class="js-switch" data-color="#43b968">

					</div>
				</div>


				<div class="form-group row">
					<div class="col-xs-2 col-form-label">
						<label for="UPI_key" class="col-form-label">
							App Maintenance
						</label>
					</div>
					<div class="col-xs-10">
						<input @if(Setting::get('appmaintain') == 1) checked  @endif  name="appmaintain" id="appmaintain_check" onchange="appmaintainselect()" type="checkbox" class="js-switch" data-color="#43b968">
					</div>
				</div>

				</br><h5>Service Categories</h5>
				<div class="form-group row">
					<div class="col-xs-2 col-form-label">
						<label for="UPI_key" class="col-form-label">
							Economy
						</label>
					</div>
					<div class="col-xs-10">
						<input @if(Setting::get('cat_app_ecomony') == 1) checked  @endif  name="cat_app_ecomony" id="cat_app_ecomony_check" type="checkbox" class="js-switch" data-color="#43b968">
					</div>
					
				</div>

				<div class="form-group row">
					<div class="col-xs-2 col-form-label">
						<label for="UPI_key" class="col-form-label">
							Luxury
						</label>
					</div>
					<div class="col-xs-10">
						<input @if(Setting::get('cat_app_lux') == 1) checked  @endif  name="cat_app_lux" id="cat_app_lux" type="checkbox" class="js-switch" data-color="#43b968">
					</div>
					
				</div>
			


				<div class="form-group row">
					<div class="col-xs-2 col-form-label">
						<label for="UPI_key" class="col-form-label">
							Extra Seat
						</label>
					</div>
			
					<div class="col-xs-10">
						<input @if(Setting::get('cat_app_ext') == 1) checked  @endif  name="cat_app_ext" id="cat_app_ext" type="checkbox" class="js-switch" data-color="#43b968">
					</div>
					
				</div>

				
				<div class="form-group row">
					<div class="col-xs-2 col-form-label">
						<label for="UPI_key" class="col-form-label">
							OutStation
						</label>
					</div>
			
					<div class="col-xs-10">
						<input @if(Setting::get('cat_app_out') == 1) checked  @endif  name="cat_app_out" id="cat_app_out" type="checkbox" class="js-switch" data-color="#43b968">
					</div>
					
				</div>

				<div class="form-group row">
					<label for="zipcode" class="col-xs-2 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">Update Apps Settings</button>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
function appmaintainselect()
{
    if($('#appmaintain_check').is(":checked")) {
        $("#appmaintain_field").fadeIn(700);
    } else {
        $("#appmaintain_field").fadeOut(700);
    }
}
</script>
@endsection
