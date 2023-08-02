<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('customers.index', compact('customer'));
    }

    public function create()
    {
        return view('customers.create',[
            'customer' => new Customer(),
        ]);
    }

    public function store(CustomerRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::id();
        Customer::create($validated);
        return redirect()->route('customers.index')
            ->with('success', 'Customer created successfully.');
    }

    public function show(Request $request, $id)
    {
        $customers = Customer::findOrFail($id);
        return view('customers.show', compact('customers'));
    }

    public function edit($id)
    {
        $customers = Customer::findOrFail($id);
        return view('customers.edit', compact('customers'));
    }

    public function update(CustomerRequest $request,Customer $customer)
    {
        $validated = $request->validated();
        $customer->update($validated);
        return redirect()->route('customers.index')
            ->with('success', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        $customers = Customer::find($id);
        $customers->delete();
        return redirect()->route('customers.index')
            ->with('success', 'Customer deleted successfully.');
    }
}
