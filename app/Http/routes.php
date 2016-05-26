<?php

use App\Card;
use Illuminate\Http\Request;

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

Route::get('/', function () {
	$cards = Card::orderBy('code', 'asc')->get();
    return view('cards', [
    	'cards' => $cards
    ]);
});

Route::post('/card', function (Request $request) {
	$validator = Validator::make($request->all(), [
		'name' => 'required|max:255',
	]);
	
	if ($validator->fails()) {
		return redirect('/')
			->withInput()
			->withErrors($validator);
	}
	
	$card = new Card;
	$card->name = $request->name;
	$task->save();
	
	return redirect('/');
});

Route::delete('/card/{id}', function ($id) {
	//
});

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
    //
});
