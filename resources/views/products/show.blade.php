@extends('layouts.app')

@section('title', 'Products | All products')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Pagina prodotto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase">{{ $product -> name }}</h2>
                <ul>
                    <li>Id: {{ $product -> id }}</li>
                    <li>Name: {{ $product -> name }}</li>
                    <li>Brand: {{ $product -> brand }}</li>
                    <li>Price: {{ $product -> price }}</li>
                    <li>Note: {{ $product -> note }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
