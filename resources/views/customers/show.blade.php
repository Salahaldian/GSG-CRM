@extends('layouts.master')

    @section('title', 'Show Customer')
    @section('content')
    <div class="container">
        <h1>Customer</h1>
        {{-- <h1> Name : {{ $customer->name }} </h1>
        <h3> Email : {{ $customer->email }} </h3>
        <h3> Phone : {{ $customer->phone }} </h3> --}}

        <div class="row">
            <div class="col-md-3">
                <div class="border rounded p-3">
                    <h1> Name : {{ $customers->name }} </h1>
                    <h3> Email : {{ $customers->email }} </h3>
                    <h3> Phone : {{ $customers->phone }} </h3>
                </div>
            </div>
            <div class="col-md-9"></div>
        </div>
    </div>
    @endsection
