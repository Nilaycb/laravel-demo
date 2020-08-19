@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
                    You are logged in as <strong> {{ Auth::user()->name }} </strong>!
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inventory Database</div>
 
                <div class="card-body">
                    Product Added.
                    <p class="lead">@if(!empty($id)) Product ID: {{ $id }} @endif</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection