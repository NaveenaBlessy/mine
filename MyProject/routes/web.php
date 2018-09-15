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

// Route::get('/admin',function(){
// 	//return 'Hello Jesus';
// 	$url = route('admin.home');
// 	return "<a href='".$url."'>hello</a>";
// });
// Route::get('/contact/me',array('as'=>'admin.home',function(){
// 	$url = route('admin.home');
// 	return "<a href='".$url."'>hello</a>";
// }));
// Route::get('/home/{id}/{name}',function($id,$name){
// 	return 'Hello '.$name.', your Id is '.$id;
// });

//Route::get('/posts/{name}','postController@index');

Route::resource('posts','postController');

Route::resource('faq', 'practiceController', [
    'names' => [
        'index' => 'faq',
        'store' => 'faq.new',
        // etc...
    ]
]);
Route::resource('admin/posts/tags','practiceController',['as'=>'aptags']);
//practice naming router and accing url from that
Route::get('/namingroute/{name}','practiceController@practice');
Route::get('/contact','postController@contact');

Route::get('/post/{name}/{office}','postController@show_page');

//routing

Route::match(['get','post'],'/register',function(){
	return 'registering route';
});

Route::any('/any',function(){
	return 'register route any';
});

Route::get('/posts/{id}/comment/{comid}',function($pid,$comid){
	return 'post id '.$pid.'coment id '.$comid;
});

Route::get('/param/{name?}',function($name=null){
	return 'hello ptional param '.$name;
});

Route::get('/regex/{name}',function($name){
	return 'I am by regex '.$name;
})->where('name', '[A-Za-z]+');

Route::get('regex2/{name}/{id}',function($name,$id){
	return 'I am by regex '.$name.' '.$id;
})->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);

//single invoke

Route::get('singleinvoke/{name}','practiceController');

//Supplementing Resource Controllers


//MANY RESORCE CONTROLLERS AT ONCE
Route::resources([
	'Photos' => 'postController',
	'Videos' => 'practiceController'
	]);
