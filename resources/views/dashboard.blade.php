@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">

        @foreach($coins as $coin)
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mb-4">
                <div class="shadow px-4 py-3 rounded text-center">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-truncate">{{ $coin['name'] }}</h5>
                        <p class="mb-0" style="font-size: 0.8rem;">${{ $coin['current_price'] }}</p>
                    </div>

                    <div>
                        <img width="60" src="{{ $coin['image'] }}">
                    </div>

                    <a href="{{ route('alerts.create', ['coin' => $coin['symbol']]) }}" class="mt-3 btn btn-primary w-100">Créer une alerte</a>
                </div>
            </div>
        @endforeach

{{--        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">--}}
{{--            <div class="shadow px-4 py-3 rounded text-center">--}}
{{--                <div class="d-flex justify-content-between align-items-center mb-2">--}}
{{--                    <h5 class="mb-0">Bitcoin</h5>--}}
{{--                    <p class="mb-0" style="font-size: 0.8rem;">$59217</p>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <img width="60" src="https://assets.coingecko.com/coins/images/1/large/bitcoin.png?1547033579">--}}
{{--                </div>--}}

{{--                <a href="{{ route('alerts.create', ['coin' => 'BTC']) }}" class="mt-3 btn btn-primary w-100">Créer une alerte</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">--}}
{{--            <div class="shadow px-4 py-3 rounded text-center">--}}
{{--                <div class="d-flex justify-content-between align-items-center mb-2">--}}
{{--                    <h5 class="mb-0">Ethereum</h5>--}}
{{--                    <p class="mb-0" style="font-size: 0.8rem;">$2104</p>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <img width="60" src="https://assets.coingecko.com/coins/images/279/large/ethereum.png?1595348880">--}}
{{--                </div>--}}

{{--                <a href="{{ route('alerts.create', ['coin' => 'ETH']) }}" class="mt-3 btn btn-primary w-100">Créer une alerte</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection