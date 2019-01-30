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
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
});

//groupin the routs
Route::group(['prefix' => 'api'], function () {
	Route::get('help1', function () {
        //
        return('help 1 it is');
	});
	Route::get('help2', function () {
        //
        return('help 1 it is');
	});
});

#Route::get('welcome/{name?}', 'WelcomeController@index');


#basic rout
#address DOMAIN/Basic
Route::get('Basic', function () {
    return 'Hello World';
});

#redirect Rout
Route::redirect('/toBasic', '/Basic');
# OR -> Route::redirect('/toBasic', '/Basic', 302);
# OR -> Route::permanentRedirect('/toBasic', '/Basic');

#View Routes
$array = array('name'=>'masoud', 'last_name'=>'moradnia');
Route::view('/sample_view', 'sample',$array);

#route Required Parameters
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
    return("it is comment number $commentId from post number $postId");
});
#Optional Parameters
Route::get('user/{name?}', function ($name = null) {
    return $name;
});

#Regular Expression Constraints
#if id is not all digit -> 404
###############################
#if you would like a route parameter to always be constrained by a given regular expression, you may use the pattern method. 
#You should define these patterns in the boot method of your RouteServiceProvider (app/Providers/RouteServiceProvider.php):
#Route::pattern('id', '[0-9]+');
###############################
Route::get('userid/{id}', function ($id) {
    //
    return $id;
})->where('id', '[0-9]+');

#Named Routes
Route::get('welcome/{name?}', 'WelcomeController@index')->name('welcome');



#in template <a href="{{ route('profile') }}">Register</a> or <a href="{{ route('profile' , ['name'=>'Masoud']) }}">Register</a>
