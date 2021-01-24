@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', 'Promocodes ')

@section('content')

<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<div class="content-wrapper">
    <div class="container-fluid">
        
        <div class="box box-block bg-white">
            <h5 class="mb-1">Promocodes Usage</h5>
            <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Promocode </th>
                        <th>Used Date</th>
                        <th>Status</th>
                        <th>Used Count</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($promocodes as $index => $promo)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$promo->user->first_name}} {{$promo->user->last_name}}</td>
                        <td>{{$promo->promocode->promo_code}}</td>
                        <td>
                            {{date('d-m-Y',strtotime($promo->created_at))}}
                        </td>
                        <td>
                            @if(date("Y-m-d") <= $promo->expiration)
                                <span class="tag tag-success">Valid</span>
                            @else
                                <span class="tag tag-danger">Expired</span>
                            @endif
                        </td>
                        <td>
                            {{promo_used_count($promo->promocode->id)}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                    <th>ID</th>
                        <th>User Name</th>
                        <th>Promocode </th>
                        <th>Expiration</th>
                        <th>Status</th>
                        <th>Used Count</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        
    </div>
</div>

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

@endsection