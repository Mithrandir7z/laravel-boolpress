@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <h1>Ciao {{$current_user->name}}!</h1>

                <h3>Info</h3>

                @if ($current_user_info)
                    <ul>
                        <li>Numero di telefono: {{$current_user_info->telephone}} </li>
                        <li>Indirizzo: {{$current_user_info->full_address}} </li>
                    </ul>
                @endif

                

                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
