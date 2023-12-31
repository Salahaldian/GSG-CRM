@extends('layouts.master')

    @section('title', 'Customers')
    @section('content')
    <div class="container">
        <h1>Customers</h1>

        <x-alert name ="success" id="success" class="alert-success" />
        <x-alert name ="error" id="error" class="alert-error" />
        <div class="row">
            @foreach ($customer as $customer)
                <div class="col-md-3">
                    {{ $customer->name }}
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $customer->name }} </h5>
                            <p class="card-text"> {{ $customer->email }} </p>
                            <p class="card-text"> {{ $customer->phone }} </p>
                            <div class="d-flex justify-content-between">
                                <a href=" {{ route('customers.show', $customer->id) }} " class="btn btn-sm btn-primary">View</a>
                                <a href=" {{ route('customers.edit', $customer->id) }} " class="btn btn-sm btn-dark">Edit</a>
                                <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endsection

{{--  to add in the stack --}}
@push('script')
    <script>console.log('1')</script>
@endpush

