@extends('layouts.app')

@section('title')
    Créer une alerte
@endsection

@section('content')
    <div class="row">
        <p class="w-100">Ici nous allons créer une alerte sur le {{ $coin }}.</p>

        <form class="w-100" method="POST" action="{{ route('alerts.store') }}">
            @csrf
            <input type="hidden" value="{{ $coin }}" name="symbol">
            <input type="hidden" value="TODO" name="coin">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price">Prix</label>
                    <input type="number" step="0.01" class="form-control" name="price" id="price">
                </div>
                <div class="form-group col-md-6">
                    <label for="movement">Mouvement</label>
                    <select id="movement" class="form-control" name="movement">
                        <option value="-" selected="">+</option>
                        <option value="+">-</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Créer</button>
        </form>
    </div>
@endsection