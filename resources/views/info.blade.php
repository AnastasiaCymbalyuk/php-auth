@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <span>Имя: {{ Auth::user()->name }}</span>
                    <br>
                    <span>Email: {{ Auth::user()->email }}</span>
                    <br>
                    <span>id: {{ Auth::user()->id }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
  