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

View::composer('partitials.header', function($view){
    $view->with('menu', DB::table('menu')->orderBy('sort', 'asc')->get());
});
View::composer('admin.partitials.menu', function($view){
    $view->with('menu', DB::table('menu')->orderBy('sort', 'asc')->get());
});

Route::get('/', ['as' => 'template.home', 'uses' => 'HomeController@index']);

Route::post('/addMeeting', ['as' => 'contact.addMeeting', 'uses' => 'HomeController@addMeeting']);

Route::get('/proc-se-mnou', ['as' => 'template.about', 'uses' => 'AboutController@index']);

Route::get('/produkty', ['as' => 'categories.list', 'uses' => 'CategoryController@index']);
Route::get('/produkty/{href}', ['as' => 'categories.detail', 'uses' => 'CategoryController@show']);

Route::get('/reference', ['as' => 'reference.list', 'uses' => 'ReferenceController@index']);
Route::post('/reference/addComment', ['as' => 'reference.addComment', 'uses' => 'ReferenceController@store']);

Route::get('/blog', ['as' => 'blog.list', 'uses' => 'BlogController@index']);
Route::get('/blog/article/{href}', ['as' => 'blog.detail', 'uses' => 'BlogController@show']);

Route::get('/kontakt', ['as' => 'template.contact', 'uses' => 'ContactController@index']);
Route::post('/kontakt/sendMessage', ['as' => 'contact.sendMessage', 'uses' => 'ContactController@store']);

Auth::routes();

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('register', ['as' => 'register', 'uses' => 'HomeController@index']);


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {



    Route::get('', ['as' => 'admin.template.home', 'uses' => 'admin\AdminController@index']);

    Route::get('proc-se-mnou', ['as' => 'admin.about.list', 'uses' => 'AboutController@indexAdmin']);
    Route::get('proc-se-mnou/edit', ['as' => 'admin.about.edit', 'uses' => 'AboutController@edit']);

    Route::group(['prefix' => 'produkty'], function () {
        Route::get('', ['as' => 'admin.categories.list', 'uses' => 'CategoryController@indexAdmin']);
        Route::get('{id}/edit', ['as' => 'admin.categories.edit', 'uses' => 'CategoryController@edit']);
        Route::post('{id}/update', ['as' => 'admin.categories.update', 'uses' => 'CategoryController@update']);
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('', ['as' => 'admin.blog.list', 'uses' => 'BlogController@indexAdmin']);
        Route::get('{id}/edit', ['as' => 'admin.blog.edit', 'uses' => 'BlogController@edit']);
        Route::post('{id}/update', ['as' => 'admin.blog.update', 'uses' => 'BlogController@update']);
    });

    Route::get('reference', ['as' => 'admin.reference.list', 'uses' => 'ReferenceController@indexAdmin']);
    Route::get('reference/{id}/edit', ['as' => 'admin.reference.edit', 'uses' => 'ReferenceController@edit']);


});


/*
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function ()    {
        // Uses Auth Middleware
    });

    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function ()    {
        // Matches The "/admin/users" URL
    });
});

*/