<?php
use App\Event;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	    //auth()->logInUsingId(1);
		Route::get('/', function(){
			return view('welcome');
		});

		Route::get('/vuejs', function(){
			return view('vuejs');
		});

		Route::get('/swapping', function(){
			return view('pages.swapping');
		});

	    Route::get('api/events', 'EventsController@events');
	    Route::post('api/events', 'EventsController@postEvents');
	    Route::put('api/events/{id}', 'EventsController@update');
	    Route::delete('api/events/{id}', 'EventsController@destroy');

});
