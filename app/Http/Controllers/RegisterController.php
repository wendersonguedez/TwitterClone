<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUser;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('components.users.register');
    }

    public function store(StoreUpdateUser $request)
    {
        $user = new User();
        
    }
}
