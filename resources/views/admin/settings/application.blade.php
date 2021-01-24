@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', 'Site Settings ')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
    	<div class="box box-block bg-white">
			<h5>Site Settings</h5>

            <form class="form-horizontal" action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}

				<div class="form-group row">
					<label for="site_title" class="col-xs-2 col-form-label">Site Name</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('site_title', 'Tranxit')  }}" name="site_title" required id="site_title" placeholder="Site Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="site_logo" class="col-xs-2 col-form-label">Site Logo</label>
					<div class="col-xs-10">
						@if(Setting::get('site_logo')!='')
	                    <img style="height: 90px; margin-bottom: 15px;" src="{{ Setting::get('site_logo', asset('logo-black.png')) }}">
	                    @endif
						<input type="file" accept="image/*" name="site_logo" class="dropify form-control-file" id="site_logo" aria-describedby="fileHelp">
					</div>
				</div>


				<div class="form-group row">
					<label for="site_icon" class="col-xs-2 col-form-label">Site Icon</label>
					<div class="col-xs-10">
						@if(Setting::get('site_icon')!='')
	                    <img style="height: 90px; margin-bottom: 15px;" src="{{ Setting::get('site_icon') }}">
	                    @endif
						<input type="file" accept="image/*" name="site_icon" class="dropify form-control-file" id="site_icon" aria-describedby="fileHelp">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xs-12 col-form-label">Base Location</label></br>
					<label for="store_link_android" class="col-xs-2 col-form-label">Latitude</label>
					<div class="col-xs-4">
						<input class="form-control" type="text" value="{{ Setting::get('latitude', '')  }}" name="latitude"  id="latitude" placeholder="Latitude" required>
					</div>
					<label for="store_link_android" class="col-xs-2 col-form-label">Longitude</label>
					<div class="col-xs-4">
						<input class="form-control" type="text" value="{{ Setting::get('longitude', '')  }}" name="longitude"  id="longitude" placeholder="Longitude" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="store_link_ios" class="col-xs-2 col-form-label">Appstore Link</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('store_link_ios', '')  }}" name="store_link_ios"  id="store_link_ios" placeholder="Appstore link">
					</div>
				</div>

				<div class="form-group row">
					<label for="provider_select_timeout" class="col-xs-2 col-form-label">Provider Accept Timeout</label>
					<div class="col-xs-10">
						<input class="form-control" type="number" value="{{ Setting::get('provider_select_timeout', '60')  }}" name="provider_select_timeout" required id="provider_select_timeout" placeholder="Provider Timout">
					</div>
				</div>

				<div class="form-group row">
					<label for="provider_search_radius" class="col-xs-2 col-form-label">Provider Search Radius</label>
					<div class="col-xs-10">
						<input class="form-control" type="number" value="{{ Setting::get('provider_search_radius', '100')  }}" name="provider_search_radius" required id="provider_search_radius" placeholder="Provider Search Radius">
					</div>
				</div>

				<div class="form-group row">
					<label for="sos_number" class="col-xs-2 col-form-label">SOS Number</label>
					<div class="col-xs-10">
						<input class="form-control" type="number" value="{{ Setting::get('sos_number', '911')  }}" name="sos_number" required id="sos_number" placeholder="SOS Number">
					</div>
				</div>
				
				<div class="form-group row">
                    <label for="map_key" class="col-xs-2 col-form-label">Google Map Api Key</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="text" value="{{ Setting::get('map_key') }}" name="map_key" id="map_key" placeholder="Site Copyright">
                    </div>
                </div>

				

				<div class="form-group row">
					<label for="social_login" class="col-xs-2 col-form-label">Social Login</label>
					<div class="col-xs-10">
						<select class="form-control" id="social_login" name="social_login">
							<option value="1" @if(Setting::get('social_login', 0) == 1) selected @endif>Enable</option>
							<option value="0" @if(Setting::get('social_login', 0) == 0) selected @endif>Disable</option>
						</select>
					</div>
				</div>
			
				</br></br><h5>Other Settings</h5></br></br>

				<div class="form-group row">
					<label for="f_u_url" class="col-xs-2 col-form-label">User App PlayStore Link</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('f_u_url', '')  }}" name="f_u_url"  id="f_u_url" placeholder="User App PlayStore Link">
					</div>
				</div>

				<div class="form-group row">
					<label for="f_p_url" class="col-xs-2 col-form-label">Driver App PlayStore Link</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('f_p_url', '')  }}" name="f_p_url"  id="f_p_url" placeholder="Driver App PlayStore Link">
					</div>
				</div>
				
				</br></br><h5>Social Profiles</h5></br></br>

				<div class="form-group row">
					<label for="Website Link" class="col-xs-2 col-form-label">FaceBook Page Link</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('f_f_link', '')  }}" name="f_f_link"  id="f_f_link" placeholder="FaceBook Page Link">
					</div>
				</div>


				<div class="form-group row">
					<label for="Twitter Link" class="col-xs-2 col-form-label">Twitter Link</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('f_t_link', '')  }}" name="f_t_link"  id="f_t_link" placeholder="Twitter Link">
					</div>
				</div>

				<div class="form-group row">
					<label for="Website Link" class="col-xs-2 col-form-label">linkedin Link</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('f_l_link', '')  }}" name="f_l_link"  id="f_l_link" placeholder="linkedin Link">
					</div>
				</div>

                <div class="form-group row">
					<label for="Website Link" class="col-xs-2 col-form-label">Instagram Link</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('f_i_link', '')  }}" name="f_i_link"  id="f_i_link" placeholder="Instagram Link">
					</div>
				</div>
				
				</br></br><h5>Contact Page Settings</h5></br></br>

	

			
                
                <div class="form-group row">
					<label for="Contact City" class="col-xs-2 col-form-label">Contact City</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('contact_city', '')  }}" name="contact_city"  id="contact_city" placeholder="Contact City">
					</div>
				</div>
                
                <div class="form-group row">
					<label for="Contact Address" class="col-xs-2 col-form-label">Contact Address</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('contact_address', '')  }}" name="contact_address"  id="contact_address" placeholder="Contact Address">
					</div>
				</div>
                <div class="form-group row">
					<label for="Contact Email" class="col-xs-2 col-form-label">Contact Email</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('contact_email', '')  }}" name="contact_email"  id="contact_email" placeholder="Contact Email">
					</div>
				</div>
                <div class="form-group row">
					<label for="Contact Phone" class="col-xs-2 col-form-label">Contact Phone</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ Setting::get('contact_number', '')  }}" name="contact_number"  id="contact_number" placeholder="Contact Phone">
					</div>
				</div>

				</br></br><h5>Frontend</h5></br></br>

		
                <div class="form-group row">
                   <label for="f_img2" class="col-xs-2 col-form-label">Image 1</label>
					<div class="col-xs-10">
						@if(Setting::get('f_img2')!='')
	                    <img style="height: 90px; margin-bottom: 15px;" src="{{ Setting::get('f_img2', 'https://pngimg.com/uploads/taxi/taxi_PNG16.png')  }}">
	                    @endif
						<input type="file" accept="image/*" name="f_img2" class="dropify form-control-file" id="f_img2" aria-describedby="fileHelp">
					</div>
				</div>
			

				</br><h5>Service Categories (For Web)</h5>
				<div class="form-group row">
					<div class="col-xs-2 col-form-label">
						<label for="UPI_key" class="col-form-label">
							Economy
						</label>
					</div>
					<div class="col-xs-10">
						<input @if(Setting::get('cat_app_ecomony_1') == 1) checked  @endif  name="cat_app_ecomony_1" id="cat_app_ecomony_1" type="checkbox" class="js-switch" data-color="#43b968">
					</div>
					
				</div>

				<div class="form-group row">
					<div class="col-xs-2 col-form-label">
						<label for="UPI_key" class="col-form-label">
							Luxury
						</label>
					</div>
					<div class="col-xs-10">
						<input @if(Setting::get('cat_app_lux_1') == 1) checked  @endif  name="cat_app_lux_1" id="cat_app_lux_1" type="checkbox" class="js-switch" data-color="#43b968">
					</div>
					
				</div>
			


				<div class="form-group row">
					<div class="col-xs-2 col-form-label">
						<label for="UPI_key" class="col-form-label">
							Extra Seat
						</label>
					</div>
			
					<div class="col-xs-10">
						<input @if(Setting::get('cat_app_ext_1') == 1) checked  @endif  name="cat_app_ext_1" id="cat_app_ext_1" type="checkbox" class="js-switch" data-color="#43b968">
					</div>
					
				</div>

				
				<div class="form-group row">
					<div class="col-xs-2 col-form-label">
						<label for="UPI_key" class="col-form-label">
							OutStation
						</label>
					</div>
			
					<div class="col-xs-10">
						<input @if(Setting::get('cat_app_out_1') == 1) checked  @endif  name="cat_app_out_1" id="cat_app_out_1" type="checkbox" class="js-switch" data-color="#43b968">
					</div>
					
				</div>

				<div class="form-group row">
					<label for="zipcode" class="col-xs-2 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">Update Site Settings</button>
					</div>
				</div>

			</form>
		</div>
    </div>
</div>
@endsection
