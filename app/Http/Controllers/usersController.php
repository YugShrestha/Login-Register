<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\yug;

class UsersController extends Controller
{
    // UsersController.php

public function store(Request $request)
{
    $fieldForms = $request->validate([
        'email' => ['required', 'email'],
        'password' => 'required',
    ]);

    yug::create($fieldForms);
    session()->flash('message', 'created sucessfully!');

    return redirect('/');
}
}
