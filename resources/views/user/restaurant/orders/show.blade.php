@extends('layouts.dashboard')

@section('content')
<div class="bo-container">
    <div class="row justify-content-center">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center">
                <h1>Ordine numero {{ $order->id }}</h1>
                <a href="{{ route('user.orders.index') }}" class="bo-btn">Indietro</a>
            </div>

            <div class="order-details">
                <p>Nome cliente: <strong>{{$order->customer_name}}</strong></p>
                <p>Cognome cliente: <strong>{{$order->customer_surname }}</strong></p>
                <p>Indirizzo di consegna:  <strong>{{ $order->customer_address }}</strong></p>
                <p>Numero di telefono:  <strong>{{ $order->customer_phone }}</strong></p>
                <p>Totale:  <strong>&euro;{{ $order->total }}</strong></p>
                <p>
                    @if ($order->special_request)
                        Richieste speciali: {{$order->special_request}}
                    @else
                        ---
                    @endif
                </p>
                    <div>
                        <p>Piatti dell'ordine:</p>
                        <ul>
                            @foreach ($order->dishes as $dish)

                                <li style="
                                display: flex;
                                gap: 30px;">
                                    <span><strong>{{$dish->name}} </strong></span>
                                    <span><strong>&euro;{{$dish->price}}</strong></span>
                                </li>

                            @endforeach
                        </ul>
                        
                    </div>
                    
            </div>
            

        </div>
    </div>
</div>
<script src="{{ asset('js/show-dish.js') }}" defer></script>
@endsection
