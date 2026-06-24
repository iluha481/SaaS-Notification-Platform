<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $user = User::create(['not_exists_field' => 'value']);
        
        return response()->json($user);
    }
}
