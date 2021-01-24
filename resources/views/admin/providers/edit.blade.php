@extends('admin.layout.base')
@extends('admin.layout.base2')


@section('title', 'Update Provider ')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 style="margin-bottom: 2em;">Update Provider</h5>
            <form class="form-horizontal" action="{{route('admin.provider.update', $provider->id )}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="first_name" class="col-md-2 col-form-label">First Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $provider->first_name }}" name="first_name" required id="first_name" placeholder="First Name">
                            </div>

                            <label class="col-md-12 col-form-label"></label>
                            
                            <label for="last_name" class="col-md-2 col-form-label">Last Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $provider->last_name }}" name="last_name" required id="last_name" placeholder="Last Name">
                            </div>
                          
                            <label class="col-md-12 col-form-label"></label>

                            <label for="picture" class="col-md-2 col-form-label">Image</label>
                            <div class="col-md-10">
                            @if(isset($provider->picture))
                                <img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="{{$provider->picture}}">
                            @endif
                                <input type="file" accept="image/*" name="avatar" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">
                            </div>

                            <label class="col-md-12 col-form-label"></label>

                            <label for="mobile" class="col-md-2 col-form-label">Mobile</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $provider->mobile }}" name="mobile" required id="mobile" placeholder="Mobile">
                            </div>

                            <label class="col-md-12 col-form-label"></label>

                            <label for="mobile" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $provider->email }}" name="email" required id="email" placeholder="Email">
                            </div>

                            <label class="col-md-12 col-form-label"></label>

                            <label for="zipcode" class="col-md-2 col-form-label"></label>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-primary">Update Provider</button>
                                <a href="{{route('admin.provider.index')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection
