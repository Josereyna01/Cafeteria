@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="row" style="margin:10px; margin-top:5px;">
    <p style="font-size: 20px; font-weight: bold; color: #6f6f6f; margin: 0px"><span class="material-symbols-outlined sub">person_add</span>Nueva Sucursal</p>
    <div class="col-12" style="padding: 5px">
        <div style="background-color: white; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; padding: 10px; border-radius: 10px;">
            <p style="font-size: 20px; color: #992323;margin-bottom:0">Formulario para creación de nueva sucursal.</p>
            <p style="color: #6f6f6f; margin-bottom:0">En el siguiente formulario llene los datos solicitados para la creación de una sucursal nueva.</p><br>
            @if ($errors->any())
                <div class="alert alert-danger" style="margin-top: 0px; margin-bottom: 15px">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('menu.store') }}" method="POST">
                @csrf
                    <!-- Contenido de la página -->
                <div class="container mt-5">
                    <h1>Menu</h1>
                </div>
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-md-3 mb-3 text-center">
                            <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                                <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                                <p class="mt-3"><strong class="h4">Americano</strong></p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 text-center">
                            <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                                <img src="{{ asset('images/capuccino.png') }}" alt="Cappuccino" width="150" height="150" class="img-fluid mx-auto d-block">
                                <p class="mt-3"><strong class="h4">Cappuccino</strong></p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 text-center">
                            <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                                <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                                <p class="mt-3"><strong class="h4">Americano</strong></p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 text-center">
                            <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                                <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                                <p class="mt-3"><strong class="h4">Americano</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-md-3 mb-3 text-center">
                            <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                                <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                                <p class="mt-3"><strong class="h4">Americano</strong></p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 text-center">
                            <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                                <img src="{{ asset('images/capuccino.png') }}" alt="Cappuccino" width="150" height="150" class="img-fluid mx-auto d-block">
                                <p class="mt-3"><strong class="h4">Cappuccino</strong></p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 text-center">
                            <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                                <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                                <p class="mt-3"><strong class="h4">Americano</strong></p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 text-center">
                            <div class="flex-fill shadow p-3 mb-5 bg-white rounded">
                                <img src="{{ asset('images/americano.png') }}" alt="Cafe Americano" width="150" height="150" class="img-fluid mx-auto d-block">
                                <p class="mt-3"><strong class="h4">Americano</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


