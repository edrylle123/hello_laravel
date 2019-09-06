<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use  App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
    	return view  ('users.index');
    }

    public function show()
    {
    	return view ('users.show');
    }

    public function edit()
    {
    	return view ('users.edit');
    }
    public function destroy()
    {
    	return 'User 1 deleted';
    }

    public function update()
    {
    	return 'User 1 updated';
    }

    public function store()
    {
    	return'user 1 added';
    }
    
}
