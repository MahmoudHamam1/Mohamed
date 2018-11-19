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

Auth::routes();
Route::get('setLang/{lang}', function($lang){
	
	if (Session::has('Lang')){
		if(in_array($lang,['ar','en']))
			Session::forget('Lang');
	}
	if(in_array($lang,['ar','en'])){
		Session::put('Lang',$lang);
	}
	return back();
});

use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
/*Role::create(['name'=>'admin']);
Role::create(['name'=>'partner']);
Role::create(['name'=>'client']);
$user=User::find(1);
$user->assignRole('admin');
$user=User::find(2);
$user->assignRole('partner');
$user=User::find(3);
$user->assignRole('client');*/
//dd(User::find(3)->roles()->pluck('name') , Role::all()->pluck('name'));

Route::group(['middleware' => 'Lang'], function() {
Route::get('/', 'websiteViewData@viewData');

Route::get('/home','websiteViewData@viewData')->name('home');

Route::get('/join', 'websiteViewData@join')->name('join');

Route::get('/who-us', 'websiteViewData@who_us')->name('who-us');

Route::post('/sendMessage', 'websiteViewData@sendMessage')->name('sendMessage');

Route::post('/sendComplaint', 'complaint@store')->name('sendcomplaint');

Route::get('/complaint', 'websiteViewData@complaint')->name('complaint');


Route::get('/getcompany/{id}', 'websiteViewData@getCompany')->name('getcompany');

});

Route::get('/logout', function(){

	Auth::logout();
	return redirect('/');
});
Route::post('auth/login', 'userController@login');




////////////////    AUTH MIDDLEWARE START

Route::group(['middleware' => ['auth']], function() {


    Route::resource('/website/websiteConfig','websiteController');
    Route::resource('/website/messages','messagesController');
    Route::resource('/website/complaint', 'complaint');
    Route::resource('/website/sliders','sliderController');
    Route::resource('/website/images','websiteImageController');

    Route::get('/dashboard', function () {
        return view('dashboard.analytic');
    });

    Route::get('dashboard/analytic', function () {

        return view('dashboard.analytic');
    });

    Route::get('dashboard/sales', function () {

        return view('dashboard.sales');
    });


 Route::resource('users',                'UserController');
    Route::get('profile',                   'UserController@profile');

    Route::resource('companies',            'CompanyController');
    Route::get('create-company/{id}',       'CompanyController@createCompany');

    // Route::get('companyimages/{id}/edit',   'CompanyImagesController@edit');

    Route::resource('companyimages',        'CompanyImagesController');

    Route::post('delete-company-image/{compnayid}/{imagetype}',       'CompanyImagesController@deleteImage');

    Route::resource('offers',               'OfferController');
    Route::resource('cards',                'CardController');

    Route::get('create-card/{card}',        'CardController@createCard')->name('create-card');
    Route::put('save-new-card/{card}',      'CardController@saveNewCard')->name('save-new-card');


});



