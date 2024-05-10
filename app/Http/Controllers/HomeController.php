<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home
    public function index() {
        return view("front.index");
    
        // Redirect Example
        /* public function about() {
            return redirect(route("contact"));
            return redirect()->route("contact");
            return Redirect::route("contact");
        } */

        // variable transfer
        $age = 28;
        
        $person = new \stdClass();
        $person->age = 28;

        // return view("front.index", ["age" => $age]);
        // return view("front.index", compact("age"));
        /* return view("front.index")
            ->with("age, $age")
            ->with("sercan", "recep"); */
        return view("front.index")->with(["age" => $age, "sercan" => "recep"]);

    }    
    // About
    public function about() {
        return view("front.about");
    }
    
    // Contact
    public function contact() {
        return view("front.contact");
    }
}
