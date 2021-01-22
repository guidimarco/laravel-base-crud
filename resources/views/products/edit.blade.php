@extends('layouts.app')

@section('title', 'Products | Create new product')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica prodotto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('products.update', ['product' => $this_product->id]) }}">
                    {{-- token --}}
                    @csrf
                    @method('PUT')

                    {{-- product name --}}
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="name" placeholder="Inserisci il nome del prodotto"
                        value="{{ $this_product->name }}">
                    </div>

                    {{-- product brand --}}
                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" class="form-control" name="brand" placeholder="Inserisci il brand"
                        value="{{ $this_product->brand }}">
                    </div>

                    {{-- product note --}}
                    <div class="form-group">
                        <label>Note</label>
                        <textarea class="form-control" name="note" placeholder="Inserisci le note" row="3">{{
                            $this_product->note
                        }}</textarea>
                    </div>

                    {{-- product prezzo --}}
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="number" class="form-control" name="price" placeholder="Inserisci il prezzo"
                        value="{{ $this_product->price }}">
                    </div>

                    {{-- available -> si/no radio --}}
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="available" value="item-available"
                        @if ($this_product->available == 1)
                            checked
                        @endif>
                        <label class="form-check-label">
                            Disponibile
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="available" value="item-not-available"
                        @if ($this_product->available == 0)
                            checked
                        @endif>
                        <label class="form-check-label">
                            Non disponibile
                        </label>
                    </div>

                    {{-- bottone di submit --}}
                    <button type="submit" class="btn btn-primary">Salva le modifiche</button>
                </form>

            </div>
        </div>
    </div>
@endsection
