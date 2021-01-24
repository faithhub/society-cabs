@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', 'Promocodes ')

@section('content')

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<div class="content-wrapper">
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-1">Promocodes</h5>
                    <a href="{{ route('admin.promocode.create') }}" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Promocode</a>
                </div>
                <div class="card-body">
                    <table id="table-1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Promocode </th>
                                <th>Discount </th>
                                <th>Expiration</th>
                                <th>Status</th>
                                <th>Max Uses</th>
                                <th>Used Count</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($promocodes as $index => $promo)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$promo->promo_code}}</td>
                                <td>{{$promo->discount}}</td>
                                <td>
                                    {{date('d-m-Y',strtotime($promo->expiration))}}
                                </td>
                                <td>
                                    @if(date("Y-m-d") <= $promo->expiration)
                                        <span class="tag tag-success">Valid</span>
                                    @else
                                        <span class="tag tag-danger">Expiration</span>
                                    @endif
                                </td>
                                <td>
                                    {{$promo->max_count}}
                                </td>
                                <td>
                                    {{promo_used_count($promo->id)}}
                                </td>
                                <td>
                                    <form action="{{ route('admin.promocode.destroy', $promo->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{ route('admin.promocode.edit', $promo->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Promocode </th>
                                <th>Discount </th>
                                <th>Expiration</th>
                                <th>Status</th>
                                <th>Max Uses</th>
                                <th>Used Count</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

    
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
@endsection