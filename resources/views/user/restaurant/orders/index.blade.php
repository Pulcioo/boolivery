@extends('layouts.dashboard')

@section('content')
<div class="bo-container">
    <div class="">
        <div class="col-12 ">
            <div class="allPosts d-flex justify-content-between align-items-center mb-4">
                <h1>I tuoi ordini
                    <span class="orders-count">{{count($orders)}}</span>
                </h1>
                {{-- <a href="{{ route('user.orders.show') }}" class="bo-btn">
                    SHOW
                </a> --}}
            </div>
            @if (sizeof($orders) > 0)
                {{-- Creo una tabella --}}
                <table class="table bo-table">
                    <thead>
                        {{-- Table title --}}
                        <tr>
                            <th>Nome cliente</th>
                            <th>Cognome cliente</th>
                            <th>Indirizzo di consegna</th>
                            <th>Telefono cliente</th>
                            <th>Totale</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        {{-- / Table title --}}
                    </thead>
                    <tbody>
                        {{-- Table content --}}
                        @foreach ($orders as $order)
                            <tr class="bo-tr">
                                <td>{{ $order->customer_name }}</td>
                                <td>{{ $order->customer_surname }}</td>
                                <td>{{ $order->customer_address }}</td>
                                <td>{{ $order->customer_phone }}</td>
                                <td><strong>&euro; {{ $order->total }}</strong></td>
                                <td>
                                    <a href="{{ route('user.orders.show', $order->id) }}"
                                        class="btn btn-outline-secondary text-decoration-none">
                                        Show
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        {{-- / Table content --}}
                    </tbody>
                </table>
            @else
                <p>Hai ancora 0 ordini ricevuti</p>
            @endif
        </div>
    </div>
</div>
@endsection



