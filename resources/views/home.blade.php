@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <label for="">Bienvenido a la biblioteca, recuerde que solo podra acceder a los libros si su rol es usuario, lo mismo para los autores, sin embargo para acceder a authorbooks debera tener rol admin</label>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
