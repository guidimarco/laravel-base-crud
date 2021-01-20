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
                        </tr>
                    </thead>

                    {{-- corpo --}}
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
