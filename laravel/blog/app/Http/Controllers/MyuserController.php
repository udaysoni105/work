<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // code to fetch and display all users
    }

    public function show($id)
    {
        // code to fetch and display a single user by id
    }

    public function create()
    {
        // code to display the user creation form
    }

    public function store(Request $request)
    {
        // code to validate and store the new user data
    }

    public function edit($id)
    {
        // code to display the user edit form
    }

    public function update(Request $request, $id)
    {
        // code to validate and update the user data
    }

    public function destroy($id)
    {
        // code to delete a user by id
    }
}
