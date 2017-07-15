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

Route::get('/', function () {
    return view('index')->with('id', 0);
});

Route::post('/', function () {
	if (count($_POST)) {
		return view('index')->with( ['id' => 0, 'params' => $_POST ]);
	} else {
		return view('index')->with( ['id' => 0 ]);
	}
});

Route::get('/questions/{id}', function($id){
	return view($id.'.index')->with( ['id' => $id ]);
});

Route::post('/questions/{id}', function($id){
	if (count($_POST)) {
		return view($id.'.index')->with( ['id' => $id, 'params' => $_POST ]);
	} else {
		return view($id.'.index')->with( ['id' => $id ]);
	}
});
