<?php

//use Illuminate\Http\Request;

Route::get('user/{user}', function(App\User $user) {
            return $user;
        });

Route::group(['prefix' => '/api/v1'], function() {

            Route::get('test123', function() {
                        return ['test' => 'test123'];
                    });

            Route::get('users/{user}', function(App\User $user) {
                        return $user;
                    });
        });

Route::get('test', function() {
            return ['test' => 'data'];
        });

Route::get('/api/search/{term}', function($term) {
            return ['results' => $term];
        })->middleware('throttle:3');

Route::get('/api/another-search/{term}', function($term) {
            return ['results' => $term];
        })->middleware('throttle:3,5');

Route::get('/', function() {
            return view('welcome');
        });

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('valid', function() {
            return view('valid');
        });

Route::group(['middleware' => ['web']], function() {

            Route::post('invite', 'invitationController@store');
//        //dd($request->all());
//
//        $validator = Validator::make($request->all(), [
//           'email.*'  => 'required|email'
//        ]);
//
//        if($validator->fails()){
//            return back()->withInput()->withErrors($validator);
//        }
//
//        return 'correct data';
//    });
        });
