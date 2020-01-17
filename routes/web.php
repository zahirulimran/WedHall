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

Route::get('/', 'FindController@list', function () {
    return view('welcome');
});
Auth::routes();


/*Route::get('/user','UserWHController@index');
Route::post('/user/create','UserWHController@create');
Route::get('/user/{id}/edit','UserWHController@edit');
Route::post('/user/{id}/update','UserWHController@update');
Route::get('/user/{id}/delete','UserWHController@delete');*/

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', function() {
        if (Auth::user()->role == "user") {
            return view('home');
        } else {
            $users['users'] = \App\User::all();
            return view('adminhome', $users);
        }
    });
    
    Route::get('/hall', 'FindController@list2');
    Route::get('/bk/{id}','FindController@view');
    Route::post('/bk/create','FindController@create');
    Route::get('/adminlte', 'FindController@count');
    Route::get('/calendar', 'FindController@calendar');
    Route::get('/sr', 'FindController@index');
    Route::get('/upProfile/{id}', 'FindController@edit');
    Route::post('/upProfile/{id}/update', 'FindController@update');
    Route::get('bkd','FindController@bk');

    Route::get('/hall2', function(){
        $config['center'] = 'New York, USA';
        $config['zoom'] = '14';
        $config['map_height'] = '500px';
        $config['scrollwheel'] = false;
        GMaps::initialize($config);
        $map = GMaps::create_map();
        
        echo $map['js'];
        echo $map['html'];
    });

    //route for user
    Route::get('/user','UserWHController@index');
    Route::post('/user/create','UserWHController@create');
    Route::get('/user/{id}/edit','UserWHController@edit');
    Route::post('/user/{id}/update','UserWHController@update');
    Route::get('/user/{id}/delete','UserWHController@delete');
    Route::get('/user/list','UserWHController@list');

    //route for wedding hall
    Route::get('/wh','WHController@index');
    Route::post('/wh/create','WHController@create');
    Route::get('/wh/{id}/edit','WHController@edit');
    Route::get('/wh/view/{id}','WHController@view');
    Route::post('/wh/{id}/update','WHController@update');
    Route::get('/wh/{id}/delete','WHController@delete');
    Route::get('/wh/list','WHController@list');


    //route for booking
    Route::get('/booking','BookingController@index');
    Route::post('/booking/create','BookingController@create');
    Route::get('/booking/{id}/edit','BookingController@edit');
    Route::post('/booking/{id}/update','BookingController@update');
    Route::get('/booking/{id}/delete','BookingController@delete');

    //route for facilities
    Route::get('/facilities','FacilitiesController@index');
    Route::post('/facilities/create','FacilitiesController@create');
    Route::get('/facilities/{id}/edit','FacilitiesController@edit');
    Route::post('/facilities/{id}/update','FacilitiesController@update');
    Route::get('/facilities/{id}/delete','FacilitiesController@delete');
    Route::get('/facilities/{id}/insert','FacilitiesController@insert');
    Route::post('/facilities/{id}/insertOps','FacilitiesController@insertOps');

    //route for services
    Route::get('/services','ServicesController@index');
    Route::post('/services/create','ServicesController@create');
    Route::get('/services/edit/{id}','ServicesController@edit');
    Route::post('/services/{id}/update','ServicesController@update');
    Route::get('/services/{id}/delete','ServicesController@delete');
    Route::get('/services/insert/{id}','ServicesController@insert');
    Route::post('/services/insertOps/{id}','ServicesController@insertOps');

    //route for promotion
    Route::get('/promotion','PromotionController@index');
    Route::post('/promotion/create','PromotionController@create');
    Route::get('/promotion/{id}/edit','PromotionController@edit');
    Route::post('/promotion/{id}/update','PromotionController@update');
    Route::get('/promotion/{id}/delete','PromotionController@delete');
    Route::get('/promotion/{id}/insert','PromotionController@insert');
    Route::post('/promotion/{id}/insertOps','PromotionController@insertOps');

});