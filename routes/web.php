<?php

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
/*Route::get('/', 'PagesController@getIndex');
Route::get('/','PagesController@getcontact');
Route::post('/postcontact','PagesController@postcontact');
Route::resource('posts','PostController'); */
/*use App\Car;
Route::get('Car/postcontact', function(){
    $auth = new Car();
    return $auth->postcontact();
});
Route::get('/postcontact', 'PagesController@postcontact');*/

/*Route::post('Car/postcontact', function(){
    $auth = new Car();
    dd($auth);
    //return $auth->postcontact();*/{
    Route::get('/', 'PagesController@getIndex');
   Route::resource('posts','PostController'); 
}



/*Route::get('/', 'PagesController@getIndex');
Route::resource('pages','PostController');

