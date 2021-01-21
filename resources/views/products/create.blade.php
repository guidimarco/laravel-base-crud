@extends('layouts.app')

@section('title', 'Products | Create new product')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea nuovo prodotto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form>
                    {{-- product name --}}
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="name" placeholder="Inserisci il nome del prodotto">
                    </div>

                    {{-- product brand --}}
                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" class="form-control" name="brand" placeholder="Inserisci il brand">
                    </div>

                    {{-- product note --}}
                    <div class="form-group">
                        <label>Note</label>
                        <textarea class="form-control" name="note" placeholder="Inserisci le note" row="3"></textarea>
                    </div>
                </form>

                {{-- product prezzo --}}
                <div class="form-group">
                    <label>Prezzo</label>
                    <input type="number" class="form-control" name="price" placeholder="Inserisci il prezzo">
                </div>
            </div>
        </div>
    </div>
@endsection
