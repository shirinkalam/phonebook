<?php
use App\Core\Routing\Route;

Route::get('/' ,'HomeController@index');
Route::post('/contact/add' ,'ContactController@add');





// Route::get('/todo/list' , 'TodoController@list',[BlockFirefox::class,BlockIE::class]);
// Route::get('/post/{slug}' ,'PostController@single');
// Route::get('/post/{slug}/comment/{cid}' ,'PostController@comment');
// Route::get('/' , 'HomeController@index');
// Route::get('/archive' , 'ArchiveController@index');
// Route::get('/archive/articles' , 'ArchiveController@articles');
// Route::get('/archive/products' , 'ArchiveController@products');
// Route::add(['get' ,'post','put'], '/a' , function(){
//     echo 'Welcome';
// });
// Route::get('/b' , function(){
//     echo 'save Ok';
// });
// Route::put('/c' ,['Controller' , 'Method']);
// Route::put('/d' ,'Controller@Method');


