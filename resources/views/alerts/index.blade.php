@extends('layouts.app')

@section('title')
    Voir mes alertes
@endsection

@section('content')
    <div class="row">
        @foreach($alerts as $alert)
            <div class="w-100 shadow-sm mb-4 rounded px-4 py-3 d-flex justify-content-between align-items-center">
                <p class="mb-0">Alerte sur le {{ $alert->symbol }} quand {{ $alert->movement }} de {{ $alert->price }}$</p>
                <form action="{{ route('alerts.delete', ['alert' => $alert]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection