<?php
use Illuminate\Http\Request;

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


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function(){
	echo "Hello Admin";
})->middleware('auth','admin');

Route::get('/student', function(){

    return view('/layouts/profile/student');
})->middleware('auth','student');

// Route::get('/profile/create', function(Request $request){
// 	$data = $request->session()->all();
// 	preg_match('/\w+$/', $data['_previous']['url'], $role);

//     return view('/layouts/profile/create', ['role' => $role[0]]);
// });

Route::resource('profile','ProfileController');