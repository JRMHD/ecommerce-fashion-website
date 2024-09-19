<?php

namespace App\Policies;

use App\Models\Address; // Add this line to import the Address model
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AddressPolicy
{
    use HandlesAuthorization;

    // Authorization to update the address
    public function update(User $user, Address $address)
    {
        return $user->id === $address->user_id;
    }

    // Authorization to delete the address
    public function delete(User $user, Address $address)
    {
        return $user->id === $address->user_id;
    }
}
