@extends('admin.layouts.index')

@section('content')
    <h1>Categories</h1>
    <a class="btn btn-primary m-3" href="/admin/category/create"><i class="fas fa-plus-square"> Add Category</i></a>
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><img style="width: 100px" src="{{asset($item->img)}}" alt=""></td>
                <td>{{$item->name}}</td>
                <td><a class="btn btn-warning" href="/admin/category/{{$item->id}}/edit">Edit</a></td>
                <td>
                    {!! Form::open(['url' => '/admin/category/'.$item->id, 'method' => 'DELETE']) !!}
                        <button class="btn btn-danger ">Delete</i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    
    @section('js')
        <script>
            $(document).ready( function () {
                $('#dataTable').DataTable();
            } );
        </script>
    @endsection
    
@endsection