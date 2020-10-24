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

// Ruta de bienvenida (la primer pagina)
Route::get('/', function () {
    // return view('welcome');
    return "its working";
});

// Route::get('/about', function () {
//     return "Soy about";
// });

// Route::get('/post/{id}/{name}', function ($id,$name) {
//     return "Soy post" . $id . " " . $name;
// });


// Route::get('admin/posts/example',array('as' => 'admin.home' , function () {
//     $url = route('admin.home');

//     return "this url is  " . $url;
// }));

//   Ruta asociada al controlador "PostsController" , funcion "index"
Route::get('/post/{id}', 'PostsController@index' ,function ($id) {
    return "Esta es la ruta post en web.php y id es : " . $id;
});

// Metodo especial llamado RESOURCE.
// Nos crea todas las rutas con el controlador asociado y las funciones exitentes

// Route::resource('Posts', 'PostsController');


Route::get('/contact', 'PostsController@contact');


Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

