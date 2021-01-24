@extends('user.layout.base')

@section('title', 'Dashboard ')

@section('content')
<style>
    .service-back{
        margin-top: 20px;
        border: solid 2px;
        border-radius: 5px 5px 5px 5px;
    }
</style>
<div class="dash-content">
    <div class="row no-margin">

        <div class="col-md-12">
            <h4 class="page-title">{{trans('user.Where_are_you_going')}}</h4>
        </div>

    </div>

    @include('common.notify')
    <div class="row no-margin">
        <div class="col-md-6">
            <ul class="nav nav-tabs">
                @if(Setting::get('cat_app_ecomony_1') == 1)
                <li class="active"><a href="#Economy" data-toggle="tab">{{trans('user.Economy')}}</a></li>
                @endif
                
                @if(Setting::get('cat_app_lux_1') == 1)
                    <li><a href="#Luxury" data-toggle="tab">{{trans('user.Luxury')}}</a></li>
                @endif
                
                @if(Setting::get('cat_app_ext_1') == 1)    
                    <li><a href="#ExtraSeat" data-toggle="tab">{{trans('user.Extra_Seat')}}</a></li>
                @endif
                
                @if(Setting::get('cat_app_out_1') == 1)  
                    <li><a href="#Outstation" data-toggle="tab">{{trans('user.Outstation')}}</a></li>
                @endif
            </ul>
            <form action="{{url('confirm/ride')}}" method="GET" onkeypress="return disableEnterKey(event);">

                <div class="input-group dash-form"  style="margin-top: 15px;">

                    <input type="text" class="form-control" id="origin-input" name="s_address"  placeholder="Enter pickup location" Required>

                </div>

                <div class="input-group dash-form" style="margin-top: 15px;">

                    <input type="text" class="form-control" id="destination-input" name="d_address"  placeholder="Enter drop location" Required>

                </div>

                <input type="hidden" name="s_latitude" id="origin_latitude">

                <input type="hidden" name="s_longitude" id="origin_longitude">

                <input type="hidden" name="d_latitude" id="destination_latitude">

                <input type="hidden" name="d_longitude" id="destination_longitude">

                <input type="hidden" name="current_longitude" value="0.00" id="origin_longitude">

                <input type="hidden" name="current_latitude" value="0.00" id="origin_latitude">
                <div class="tab-content" style=" background: white; ">
                    <div class="tab-pane active" id="Economy">
                        <div class="car-detail2" >
                            @foreach($economy as $service)
                            <div class="car-radio service-back">
                                <input type="radio"  name="service_type"  value="{{$service->id}}" id="service_{{$service->id}}" @if ($loop->first) checked="checked" @endif>
                                <label for="service_{{$service->id}}" style="float:center;">
                                    <div class="car-radio-inner">
                                        <div class="row">
                                            <div class="col-12">
                                            <div class="col-6 align-self-center">
                                                <div class="img"><img src="{{image($service->image)}}"></div>
                                            </div>
                                            <div class="col-6  align-self-center">
                                                 <div class="name align-self-center"><span>{{$service->name}}</span></div>
                                            </div>
                                            </div>
                                           
                                        </div>
                                    
                                    </div>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="Luxury">
                        <div class="car-detail2" >
                            @foreach($luxury as $service)
                            <div class="car-radio service-back">
                                <input type="radio"  name="service_type"  value="{{$service->id}}" id="service_{{$service->id}}" @if ($loop->first) checked="checked" @endif>
                                <label for="service_{{$service->id}}" style="float:center;">
                                    <div class="car-radio-inner">
                                        <div class="row">
                                            <div class="col-6 align-self-center">
                                                <div class="img"><img src="{{image($service->image)}}"></div>
                                            </div>
                                            <div class="col-6  align-self-center">
                                                 <div class="name align-self-center"><span>{{$service->name}}</span></div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="ExtraSeat">
                        <div class="car-detail2" >
                            @foreach($extra_seat as $service)
                            <div class="car-radio service-back">
                                <input type="radio"  name="service_type"  value="{{$service->id}}" id="service_{{$service->id}}" @if ($loop->first) checked="checked" @endif>
                                <label for="service_{{$service->id}}" style="float:center;">
                                    <div class="car-radio-inner">
                                        <div class="row">
                                            <div class="col-6 align-self-center">
                                                <div class="img"><img src="{{image($service->image)}}"></div>
                                            </div>
                                            <div class="col-6  align-self-center">
                                                 <div class="name align-self-center"><span>{{$service->name}}</span></div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="Outstation">
                        <div class="col-12">
                            <label for="return_t" style="margin-top: 20px;"> <input type="checkbox" name="return_t" id="return_t" style="margin-right: 10px;">{{trans('user.return_again')}}</label>
                        </div>
                        <div class="car-detail2" style="margin-top: -10px;" >
                            @foreach($outstation as $service)
                            <div class="car-radio service-back">
                                <input type="radio"  name="service_type"  value="{{$service->id}}" id="service_{{$service->id}}" @if ($loop->first) checked="checked" @endif>
                                <label for="service_{{$service->id}}" style="float:center;">
                                    <div class="car-radio-inner">
                                        <div class="row">
                                            <div class="col-6 align-self-center">
                                                <div class="img"><img src="{{image($service->image)}}"></div>
                                            </div>
                                            <div class="col-6  align-self-center">
                                                 <div class="name align-self-center"><span>{{$service->name}}</span></div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                  
                </div>
                <button type="submit"  class="full-primary-btn fare-btn">Continue</button>

            </form>

        </div>

        <div class="col-md-6">

            <div class="map-responsive">

                <div id="map" style="width: 100%; height: 650px;">

                </div>

            </div> 

        </div>

    </div>

</div>

@endsection

@section('scripts')    

<script type="text/javascript">

    var current_latitude =  <?php echo Setting::get('latitude') ; ?> ;

    var current_longitude = <?php echo Setting::get('longitude') ; ?> ;

</script>

<script type="text/javascript">

    if( navigator.geolocation ) {

       navigator.geolocation.getCurrentPosition( success, fail );

    } else {

        console.log('Sorry, your browser does not support geolocation services');

        initMap();

    }

    function success(position)

    {

        document.getElementById('long').value = position.coords.longitude;

        document.getElementById('lat').value = position.coords.latitude

        if(position.coords.longitude != "" && position.coords.latitude != ""){

            current_longitude = position.coords.longitude;

            current_latitude = position.coords.latitude;

        }

        initMap();

    }

    function fail()

    {

        // Could not obtain location

        console.log('unable to get your location');

        initMap();

    }

</script> 

<script type="text/javascript" src="{{ asset('asset/js/map.js') }}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=
<?php 
echo Setting::get('map_key');
?>
&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">

    function disableEnterKey(e)

    {

        var key;

        if(window.e)

            key = window.e.keyCode; // IE

        else

            key = e.which; // Firefox

        if(key == 13)

            return e.preventDefault();

    }

</script>

@endsection