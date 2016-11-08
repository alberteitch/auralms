<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('oops', function () {
    //echo 'routeoops';
    return view('errors.oops');
});
Route::get('denied', function () {
    //echo 'routeoops';
    return view('errors.denied');
});

Route::resource('checkouts','Checkouts');
Route::get('checkoutsearch/{key}/{str}','Checkouts@search');
Route::get('storeit','Checkouts@store');



Route::group(['middleware' => 'auth'], function () {

Route::get('boolaga', function () {
   echo "You are authenticated but not an admin" ;
});

Route::get('portal', function () {


$books=App\book::all()->take(5);

$data=array(
        'books' => $books
        );


    return view('portal.index',$data);
});

Route::get('search/{id}/{str}','Books@searchbm')->name('searchb');
Route::get('search/{id}','Books@searchall');
Route::any('searchr','Books@searchr');
Route::get('search/all','Books@searchall')->name('search.all');

Route::get('asearch/{id}/{str}','Books@asearchbm')->name('asearchb');
Route::get('asearch/{id}','Books@asearchall');
Route::any('asearchr','Books@asearchr');
Route::get('asearch/all','Books@asearchall')->name('asearch.all');

Route::get('usearch/{id}/{str}','Users@usearchbm')->name('usearchb');
Route::get('usearch/{id}','Users@usearchall');
Route::any('usearchr','Users@usearchr');
Route::get('usearch/all','Users@usearchall')->name('usearch.all');

Route::any('borrow','Checkouts@borrowed')->name('borrow.back');
Route::any('borrowed/{id}','Checkouts@borrowed');
Route::resource('borrowed','Checkouts');
Route::any('return/{id}','Checkouts@update');
Route::any('return/{id}/{uid}/{pty}','Checkouts@update');
Route::any('get/{id}','Checkouts@get')->name('getit');

Route::get('history/all','Checkouts@historyall')->name('history.all');
Route::get('history/{id}','Checkouts@historyall')->name('history');
});





Route::group(['middleware' => 'admin'], function () {

Route::get('home', function () {

    return view('dashboard.index');

});

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('101', function () {
    return view('login');
});

Route::get('102', function () {
    return view('admlogin');
});

Route::get('admdash', function () {
    return view('admin_dashboard');
});

Route::get('103', function () {
    return view('registration');
});
Route::get('104', function () {
    return view('reg2');
});
Route::get('dash', function () {
    return view('dashboard.index');
});


Route::resource('books','Books');
Route::get('booksearch/{key}/{str}','Books@search');



Route::resource('users', 'Users');
Route::get('usersearch/{key}/{str}','Users@search');
Route::get('users/passgen/{id}','Users@passgen');
Route::get('passres/{id}','Users@passres');


Route::get('reports', function () {
    return view('reports.index');
});
Route::get('administration', function () {
    return view('administration.index');
});

Route::resource('settings','settings');


});




