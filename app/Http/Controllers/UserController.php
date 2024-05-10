<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Update
    public function update(Request $request) {
        dd($request->all());
    }

    // Update All
    public function updateAll(Request $request) {
        dd($request->all());
    }

    // Delete
    public function delete(Request $request) {
        dd("Silinecek User ID: " . $request->id);
    }

    // Show
    public function show(Request $request, $id) {
        dd($id);
    }

    // Show Name
    public function showName(Request $request, $name) {
        dd($name);
    }

    // Show Name
    public function roleCheck($role) {
        dd($role);
    }
}
