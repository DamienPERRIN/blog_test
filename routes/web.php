<?php

use App\Http\Middleware\CheckAge;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', function () {
    return view('welcome');
})->name('welc');

Route::view('/home_page', 'homePage', [
    'name' => 'Damien'
])->name('home')->middleware(CheckAge::class);

// UserController.php

Route::resource('users', 'UserController');

//Route::get('user/{name}', function($name = null) {
//        return $name;
//    })->where(['name' => '[a-z]+']);  // Expression régulière

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/first', function () {
        // Uses first & second Middleware
    });

    Route::get('user/profile', function () {
        // Uses first & second Middleware
    });
});

Route::prefix('home_page')->group(function () {
    Route::get('user', function () {
        // Matches The "/home_page/user" URL
    });
});

//Route::match(['get', 'post'], '/home_page', function () {
//    return view('homePage');
//});

//Route::redirect('/', '/home_page');

// exemple de route avec un paramêtre
//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});


//Route::fallback(function () {
//    return redirect()->route('404');
//});
