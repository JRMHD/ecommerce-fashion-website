<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    // Show all addresses for the user
    public function index()
    {
        $addresses = Auth::user()->addresses;
        return view('addresses.index', compact('addresses'));
    }

    // Show form to create a new address
    public function create()
    {
        return view('addresses.create');
    }

    // Store a new address
    public function store(Request $request)
    {
        $request->validate([
            'address_line_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
        ]);

        // Directly using the Address model to create a new record
        Address::create(array_merge(
            $request->all(),
            ['user_id' => Auth::id()]
        ));

        return redirect()->route('addresses.index')->with('success', 'Address added successfully.');
    }

    // Show form to edit an existing address
    public function edit(Address $address)
    {
        $this->authorize('update', $address); // Ensure the user owns this address
        return view('addresses.edit', compact('address'));
    }

    // Update an address
    public function update(Request $request, Address $address)
    {
        $this->authorize('update', $address);

        $request->validate([
            'address_line_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
        ]);

        $address->update($request->all());

        return redirect()->route('addresses.index')->with('success', 'Address updated successfully.');
    }

    // Delete an address
    public function destroy(Address $address)
    {
        $this->authorize('delete', $address); // Ensure the user owns this address
        $address->delete();

        return redirect()->route('addresses.index')->with('success', 'Address deleted successfully.');
    }
}
