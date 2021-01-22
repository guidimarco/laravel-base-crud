@extends('layouts.app')

@section('title', 'Products | All products')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h1>All products</h1>
                <a href="{{ route('products.create') }}" class="btn btn-outline-dark btn-block">Crea un nuovo articolo</a>
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
                            <th scope="col">Disponibile</th>
                            <th scope="col">Action</th>
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
                                <td>&euro; {{ number_format($product -> price, 2, ',', ' ') }}</td>
                                <td>{{ $product -> available == 0 ? 'no' : 'sì' }}</td>
                                <td>
                                    <a href="{{ route('products.show', ['product' => $product -> id]) }}" class="btn btn-dark">
                                        Vedi
                                    </a>
                                    <a href="{{ route('products.edit', ['product' => $product -> id]) }}" class="btn btn-secondary">
                                        Modifica
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
