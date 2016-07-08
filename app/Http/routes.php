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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/teacher', 'TeacherController@showAllTeacher');
use App\Student;
Route::get('/detail/{id}', array('as' => 'product','uses'=>'TeacherController@showAllStudentOfTeacher'));
//Route::get('/home', function(){
//    return view('home');
//});
Route::controllers([
   'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController'
]);
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('logout', 'HomeController@getLogout');

Route::resource('students','StudentsController');

Route::get('/store', 'StudentsController@store');
Route::get('/update', 'StudentsController@update');
Route::get('/delete/{id}', 'StudentsController@delete');

Route::get('/students/{id}/edit', [function($id){
    return View::make('edit')->with('student',Student::find($id));
}]);
