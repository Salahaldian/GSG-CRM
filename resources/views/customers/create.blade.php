@extends('layouts.master')

    @section('title', 'Create Customer')
    @section('content')
    <div class="container">
        <h1>Create Customer</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </div>
        @endif

        <form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @include('customers._form',[
                "button_label"=>'Add new customer'
            ]) --}}
            <div class="form-floating mb-3">
                <input type="text" @class(['form-control', 'is-invalid'=> $errors->has('name')]) name="name" id="name" placeholder="Customer Name">
                <label for="name">Customer name</label>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" @class(['form-control', 'is-invalid'=> $errors->has('section')]) name="email" id="email" placeholder="Email">
                <label for="email">Email</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" @class(['form-control', 'is-invalid'=> $errors->has('subject')]) name="phone" id="phone" placeholder="Phone">
                <label for="phone">Phone</label>
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary"> Add customer </button>
        </form>
    </div>
    @endsection
