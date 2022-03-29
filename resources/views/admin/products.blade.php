@extends('layouts.adminLayout')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Orders</h1>
    </div>

    <h2>All products</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allProducts as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->thumbnail}}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->stock}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $allProducts->links() }}
    </div>

</main>

@endsection