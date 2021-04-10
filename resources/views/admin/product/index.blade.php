@extends('admin.layouts.index')

@section('content')
<h1>Products</h1>
<a class="btn btn-primary m-3" href="/admin/product/create"><i class="fas fa-plus-square"></i>Add Product</a>

   <table class="table" id="dataTable">
      <thead>
         <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th></th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         @foreach ($products as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><img style="width: 100px; height: 80px" src="{{asset($item->img)}}" alt="{{$item->name}}"></td>
                <td>{{$item->name}}</td>
                <td>{{$item->category->name}}</td>
                <td><a class="btn btn-warning" href="/admin/product/{{$item->id}}/edit">Edit</a></td>
                <td>
                    {!! Form::open(['url' => '/admin/product/'.$item->id, 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
         @endforeach
      </tbody>
   </table>

@endsection

@section('js')
   <script>
         $(document).ready( function () {
            $('#dataTable').DataTable();
         } );
   </script>    
@endsection
