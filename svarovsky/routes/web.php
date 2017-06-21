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

Route::get('/', ['as' => 'template.home', 'uses' => 'HomeController@index']);

Route::post('/addMeeting', ['as' => 'contact.addMeeting', 'uses' => 'HomeController@addMeeting']);

Route::get('/proc-se-mnou', ['as' => 'template.about', 'uses' => 'AboutController@index']);

/*Route::get('/produkty', ['as' => 'categories.list', 'uses' => 'CategoryController@index']);
Route::get('/produkty/{href}', ['as' => 'categories.detail', 'uses' => 'CategoryController@show']);

Route::get('/produkty/{href}', ['as' => 'categories.detail', 'uses' => 'CategoryController@show']);*/

Route::group(['prefix' => 'produkty'], function () {
    Route::get('', ['as' => 'categories.list', 'uses' => 'CategoryController@index']);
    Route::get('/{href}', ['as' => 'categories.detail', 'uses' => 'CategoryController@show']);

    Route::get('/{href}/product/{id}', ['as' => 'categories.product', 'uses' => 'CategoryController@showProducts']);
});

Route::get('/reference', ['as' => 'reference.list', 'uses' => 'ReferenceController@index']);
Route::post('/reference/addComment', ['as' => 'reference.addComment', 'uses' => 'ReferenceController@store']);

Route::get('/blog', ['as' => 'blog.list', 'uses' => 'BlogController@index']);
Route::get('/blog/article/{href}', ['as' => 'blog.detail', 'uses' => 'BlogController@show']);

Route::get('/kontakt', ['as' => 'template.contact', 'uses' => 'ContactController@index']);
Route::post('/kontakt/sendMessage', ['as' => 'contact.sendMessage', 'uses' => 'ContactController@store']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', ['as' => 'admin.template.home', 'uses' => 'admin\AdminController@index']);
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