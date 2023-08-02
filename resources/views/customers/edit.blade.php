@extends('layouts.master')

    @section('title', 'Edit Customer ' . $customer->name)
    @section('content')
    <div class="container">
        <h1>Edit customer</h1>
        <form action="{{ route('customers.update', $customer->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-floating mb-3">
                <input type="text" value="{{ old('name', $customer->name) }}" @class(['form-control', 'is-invalid'=> $errors->has('name')]) name="name" id="name" placeholder="Customer Name">
                <label for="name">Customer name</label>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="{{ old('email', $customer->email) }}" @class(['form-control', 'is-invalid'=> $errors->has('email')]) name="email" id="email" placeholder="Email">
                <label for="email">Email</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="{{ old('phone', $customer->phone) }}" @class(['form-control', 'is-invalid'=> $errors->has('phone')]) name="phone" id="phone" placeholder="Phone">
                <label for="phone">Phone</label>
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary"> Edit customer </button>
        </form>
    </div>
    @endsection

