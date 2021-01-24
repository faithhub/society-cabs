@extends('admin.layout.base')
@extends('admin.layout.base2')


@section('title', 'Add Service Type ')



@section('content')

<div class="content-wrapper">

    <div class="container-fluid">

        <div class="box box-block bg-white">

            <a href="{{ route('admin.service.index') }}" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> Back</a>



            <h5 style="margin-bottom: 2em;">Add Service Type</h5>



            <form class="form-horizontal" action="{{route('admin.service.store')}}" method="POST" enctype="multipart/form-data" role="form">

                {{ csrf_field() }}

                <div class="form-group row">

                    <label for="name" class="col-xs-12 col-form-label">Service Name</label>

                    <div class="col-xs-10">

                        <input class="form-control" type="text" value="{{ old('name') }}" name="name" required id="name" placeholder="Service Name">

                    </div>

                </div>



                <div class="form-group row">

                    <label for="provider_name" class="col-xs-12 col-form-label">Provider Name</label>

                    <div class="col-xs-10">

                        <input class="form-control" type="text" value="{{ old('provider_name') }}" name="provider_name" required id="provider_name" placeholder="Provider Name">

                    </div>

                </div>



                <div class="form-group row">

                    <label for="picture" class="col-xs-12 col-form-label">Service Image</label>

                    <div class="col-xs-10">

                        <input type="file" accept="image/*" name="image" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">

                    </div>

                </div>

                <div class="form-group row">

                    <label for="picture" class="col-xs-12 col-form-label">Map Icon(40p x 40px)</label>

                    <div class="col-xs-10">

                        <input type="file" accept="image/*" name="map_icon" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">

                    </div>

                </div>



                <div class="form-group row">

                    <label for="fixed" class="col-xs-12 col-form-label">Base Price ({{ currency() }})</label>

                    <div class="col-xs-10">

                        <input class="form-control" type="text" value="{{ old('fixed') }}" name="fixed" required id="fixed" placeholder="Base Price">

                    </div>

                </div>



                <div class="form-group row">

                    <label for="distance" class="col-xs-12 col-form-label">Base Distance (Km)</label>

                    <div class="col-xs-10">

                        <input class="form-control" type="text" value="{{ old('distance') }}" name="distance" required id="distance" placeholder="Base Distance">

                    </div>

                </div>
                <div class="form-group row">

                    <label for="distance" class="col-xs-2 col-form-label">Unit Time Pricing (Min/Hours)</label>

                    <div class="col-xs-10">

                        <input class="form-control" type="text"  name="minute"  placeholder="Unit Time Pricing(Hour/Min)">

                    </div>

                </div>
                <div class="form-group row">

                    <label class="col-xs-12 col-form-label">Pricing Structure</label>

                    <div class="col-xs-10">

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Apply After(Km)</th>
                            <th scope="col">Unit Distance Pricing (Km)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control" type="text" name="apply_after_1" placeholder="Apply After(Km)"></td>
                                <td><input class="form-control" type="text" name="price" placeholder="Unit Time Pricing(Km)"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="text" name="apply_after_2" placeholder="Apply After(Km)"></td>
                                <td><input class="form-control" type="text" name="after_2_price" placeholder="Unit Time Pricing(Km)"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="text" name="apply_after_3" placeholder="Apply After(Km)"></td>
                                <td><input class="form-control" type="text" name="after_3_price" placeholder="Unit Time Pricing(Km)"></td>
                            </tr>
                        </tbody>
                    </table>

                    </div>
                </div>

                <div class="form-group row">

                    <label for="phourfrom" class="col-xs-5 col-form-label">Peak Hour(From)</label>

                    <label for="phourto" class="col-xs-5 col-form-label">Peak Hour(To)</label>

                    <div class="col-xs-5">

                        <input class="form-control" type="time"  name="phourfrom" required id="phourfrom">

                    </div>


                    <div class="col-xs-5">

                        <input class="form-control" type="time"  name="phourto" required id="phourto">

                    </div>

                </div>


                <div class="form-group row">

                    <label for="pextra" class="col-xs-12 col-form-label">Peak Hour Extra Price(in %)</label>

                    <div class="col-xs-10">

                        <input class="form-control" type="number" value="" name="pextra" required id="pextra" placeholder="In Percentage">

                    </div>

                </div>

                <div class="form-group row">

                    <label for="capacity" class="col-xs-12 col-form-label">Seat Capacity</label>

                    <div class="col-xs-10">

                        <input class="form-control" type="number" value="{{ old('capacity') }}" name="capacity" required id="capacity" placeholder="Capacity">

                    </div>

                </div>



                <div class="form-group row">

                    <label for="calculator" class="col-xs-12 col-form-label">Pricing Logic</label>

                    <div class="col-xs-10">

                        <select class="form-control" id="calculator" name="calculator">

                            <option value="MIN">@lang('servicetypes.MIN')</option>

                            <option value="HOUR">@lang('servicetypes.HOUR')</option>

                            <option value="DISTANCE">@lang('servicetypes.DISTANCE')</option>

                            <option value="DISTANCEMIN">@lang('servicetypes.DISTANCEMIN')</option>

                            <option value="DISTANCEHOUR">@lang('servicetypes.DISTANCEHOUR')</option>

                        </select>

                    </div>

                </div>

                <div class="form-group row">

                    <label for="type" class="col-xs-12 col-form-label">Service Type</label>

                    <div class="col-xs-10">

                        <select class="form-control" id="type" name="type">

                            <option value="economy">@lang('Economy')</option>

                            <option value="luxury">@lang('Luxury')</option>

                            <option value="extra_seat">@lang('Extra_seat')</option>

                            <option value="outstation">@lang('OutStation')</option>
                        </select>

                    </div>

                </div>



                <div class="form-group row">

                    <label for="description" class="col-xs-12 col-form-label">Description</label>

                    <div class="col-xs-10">

                        <textarea class="form-control" type="number" value="{{ old('description') }}" name="description" required id="description" placeholder="Description" rows="4"></textarea>

                    </div>

                </div>



                <div class="form-group row">

                    <div class="col-xs-10">

                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-3">

                                <a href="{{ route('admin.service.index') }}" class="btn btn-danger btn-block">Cancel</a>

                            </div>

                            <div class="col-xs-12 col-sm-6 offset-md-6 col-md-3">

                                <button type="submit" class="btn btn-primary btn-block">Add Service Type</button>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection

