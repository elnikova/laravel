@extends('admin.layouts.index')

@section('content')
    <h1>Categories</h1>
    <a class="btn btn-primary" href="/admin/category/create"><i class="fas fa-plus-square"> Add Category</i></a>
    {{-- <a class="btn btn-primary" href="{{asset('admin/category/create')}}"><i class="fas fa-plus-square"> Add Category</i></a>
    <a class="btn btn-primary" href="{{route('category.create')}}"><i class="fas fa-plus-square"> Add Category</i></a> --}}
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><img style="width: 100px" src="{{asset($item->img)}}" alt=""></td>
                <td>{{$item->name}}</td>
                <td>
                    <a href="/admin/category/{{$item->id}}/edit"><i class="fas fa-pencil-alt"></i></a>
                    {!! Form::open(['url' => '/admin/category/'.$item->id, 'method' => 'DELETE']) !!}
                        <button><i class="fas fa-trash-alt"></i></button>
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