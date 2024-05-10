<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    // Contact
    public function contact() {
        return view("front.contact");
    }

    // ShowForm
    public function postContact(Request $request) {
        // dd($request);
        dd($request->all());
    }

    // ShowForm
    // public function postContact2(Request $request, int $id, string $name) {
    public function postContact2(Request $request, int $id, string $name = null) {
        // dd($request);
        // dd($request->all());
        // dd(gettype($id));
        // dd(gettype($name));
        dd([$id, $name]);
    }
}
