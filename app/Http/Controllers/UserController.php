<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = [
            'Joel',
            'Carlos',
            'Max',
            'Tommy',
        ];

        return view('user.index')
            ->with('users', $users)
            ->with('title', 'Listado de usuarios');
    }

    public function show($id)
    {

        return view('user.user')
            ->with ('id', $id);
        return "Retornando la info del user: {$id}";
    }

    public function create()
    {
        return view('create');
    }
}
