@extends('admin.layout.base')
@extends('admin.layout.base2')

@section('title', 'Documents ')

@section('content')

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<div class="content-wrapper">
    <div class="container-fluid">
        
        <div class="box box-block bg-white">
            <h5 class="mb-1">Documents</h5>
            <a href="{{ route('admin.document.create') }}" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Document</a>
            <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Document Name</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($documents as $index => $document)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$document->name}}</td>
                        <td>{{$document->type}}</td>
                        <td>
                            <form action="{{ route('admin.document.destroy', $document->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <a href="{{ route('admin.document.edit', $document->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Document Name</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        
    </div>
</div>
    
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
@endsection