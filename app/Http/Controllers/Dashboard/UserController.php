<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return Inertia::render('Dashboard', [
            'users' => $users
        ]);
    }
}
