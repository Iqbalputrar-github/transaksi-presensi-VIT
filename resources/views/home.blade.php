@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                        <p>{{ $message }}</p>
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <h1>Login Sebagai:
                    {{ Auth::user()->role }}</h1>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
