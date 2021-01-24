@extends('layout.base')

@section('content')

<section class="tj-banner-form" style="background: url('{{Setting::get('f_mainBanner', '')}}') no-repeat; background-size: cover;">

    <div class="container" style="margin-top: -100px;">

        <div class="row">

            <!--Header Banner Caption Content Start-->

            <div class="col-md-12 col-sm-12">

                <div class="banner-caption" style="margin-bottom: -100px;">

                    <div class="banner-inner bounceInLeft animated delay-0s text-center">

                       <h2>{{ $title }}</h2>


                        
                    </div>

                </div>

            </div>

        

        </div>

    </div>

</section>
<div class="row gray-section no-margin">
    <div class="container">
        <div class="content-block text-center">
            <div class="title-divider"></div>
            <p>.</br></br></br>{!! Setting::get($page) !!}</p>
        </div>
    </div>
</div>
@endsection