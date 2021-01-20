@extends('layouts.app')

@section('title', 'Products | All products')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>All products</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    {{-- intestazione --}}
                    <thead>
                        <tr class="thead-dark">
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Note</th>
                            <th scope="col">Price</th>
                            <th scope="col">See product</th>
                        </tr>
                    </thead>

                    {{-- corpo --}}
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product -> id }}</td>
                                <td>{{ $product -> name }}</td>
                                <td>{{ $product -> brand }}</td>
                                <td>{{ $product -> note }}</td>
                                <td>{{ $product -> price }}</td>
                                <td>
                                    <a href="{{ route('products.show', ['product' => $product -> id]) }}" class="btn btn-dark">See more</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
