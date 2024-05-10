<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SupportFormController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});
Route::get("/anasayfa", [HomeController::class, "index"]); */




/* Route::get('/', function () {
    return view('front.index');
})->name("home");


Route::get('/about', function () {
    return view('front.about');
})->name("about");


Route::get('/contact', function () {
    return view('front.contact');
})->name("contact"); */



Route::get("/", [HomeController::class, "index"])->name("index");
Route::get("/about", [HomeController::class, "about"])->name("about");
Route::get("/contact", [ContactController::class, "contact"])->name("contact");
Route::post("/contact", [ContactController::class, "postContact"]); // gette tanımlayınca aynı pathname için postta name tanımlamaya gerek kalmıyo
Route::post("/contact/user/{id}/{name?}", [ContactController::class, "postContact2"])
    ->name("user")
    ->where("id", "[0-9]+") // id parametresi sayı olan pathnameleri karşılar
    // ->where(["id" => "[0-9]+", "name" => "[a-z]+"]) // id parametresi sayı olan pathnameleri karşılar
    ;

Route::match(["get", "post"], "/support-form", [SupportFormController::class, "support"])
    ->name("support-form.support");

Route::patch("/user/{id}/update", [UserController::class, "update"])
    ->name("user.update");

Route::put("/user/{id}/updateAll", [UserController::class, "updateAll"])
    ->name("user.updateAll");

Route::delete("/user/{id}/delete", [UserController::class, "delete"])
    ->name("user.delete");

Route::any("any", function() {
    dd("herşey Geldi");
});

Route::resource("article", "ArticleController");
// Route::apiResource("/api/article", "Api/ArticleController");

//---------------------------------------------

Route::get("/users/{id}", [UserController::class, "show"])
    ->name("user.show")
    ->whereNumber("id")
    ;

Route::get("/users/{name}", [UserController::class, "showName"])
    ->name("user.ShowName")
    // ->whereAlpha("name")
    ->whereAlphaNumeric("name");

Route::get("/users/{role}", [UserController::class, "roleCheck"])
    ->name("user.roleCheck")
    ->whereIn("role", ["admin", "user"]);

//---------------------------------------------

Route::prefix("admin")->group(function () {
    Route::get("/edit-article", "ArticleController@edit")
        ->name("admin.articleEdit");

    Route::get("/article/{id}/delete", "ArticleController@destroy")
        ->name("admin.articleDelete");
});

//---------------------------------------------
Route::controller(UserController::class)
    ->prefix("sercan")
        ->group(function() {
            Route::get("/get-user", "getUser");
            Route::get("/delete-user", "deleteUser");
        }
);
