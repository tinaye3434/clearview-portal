<?php

namespace App\Livewire\UserManagement;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Users extends Component
{

    #[Validate('required', 'email')]
    public string $name = '';

    #[Validate('required', 'email')]
    public string $email = '';

    #[Validate('required')]
    public string $address = '';

    #[Validate('required', 'number')]
    public string $phone = '';

    #[Validate('required')]
    public string $role = '';

    #[Layout('components.layouts.app')]
    public function render()
    {

        $results = User::all();
        return view('livewire.user-management.users', compact('results'));

    }

    public function store()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'phone' => $this->phone,
            'role' => $this->role,
            'password' => Hash::make('password'),
            'status' => 'active'
        ]);

        return redirect()->to('/users');
    }
}
