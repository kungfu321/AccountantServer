<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	//-----Question-----
	//View Question
	Route::get('list-question',['as'=>'admin.getList','uses'=>'QuestionController@getList']);
	//add question
	Route::get('add-question',['as'=>'admin.getAdd','uses'=>'QuestionController@create']);
	Route::post('add-question',['as'=>'admin.postAdd','uses'=>'QuestionController@store']);
	//edit question
	Route::get('edit-question/{id}',['as'=>'admin.getEdit','uses'=>'QuestionController@edit']);
	Route::put('edit-question/{id}',['as'=>'admin.postEdit','uses'=>'QuestionController@update']);
	//delete question
	Route::get('delete/{id}',['as'=>'admin.deleteItem','uses'=>'QuestionController@deleteItem']);
	//delete question by checkbox
	Route::post('delete-checkbox',['as'=>'admin.deleteCheckbox','uses'=>'QuestionController@postDellsCheckbox']);
	//import File Excel
	Route::get('import-question',['as'=>'admin.getImport','uses'=>'QuestionController@getImportExcel']);
	Route::post('import-question',['as'=>'admin.postImport','uses'=>'QuestionController@postImportExcel']);
	//export File Excel
	Route::get('export-question',['as'=>'admin.exportExcel','uses'=>'QuestionController@exportExcel']);
	//export File Excel by checkbox
	Route::post('export-question-by-check',['as'=>'admin.exportExcelByCheckbox','uses'=>'QuestionController@exportExcelByCheckbox']);

	//-----User-----
	//View User
	Route::get('list-user',['as'=>'admin.listUser','uses'=>'User_AccountController@index']);
	//export User to excel
	Route::get('export-user',['as'=>'admin.exportExcelUser','uses'=>'User_AccountController@exportExcel']);
	//export User to excel by checkbox
	Route::post('export-user-by-check',['as'=>'admin.exportUserByCheckbox','uses'=>'User_AccountController@exportUserByCheckbox']);
});
	//Check url request
	Route::get('/{any}', function ($any) {

		return view('errors.503');

})->where('any', '.*');