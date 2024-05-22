<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home.page');
Route::get('/account-tax', [App\Http\Controllers\HomeController::class,'accountTax'])->name('account.page');
Route::get('/customer/login', [App\Http\Controllers\HomeController::class,'login'])->name('login.page');
Route::get('/migracion', [App\Http\Controllers\HomeController::class,'migracion'])->name('migracion.page');
Route::get('/notarial', [App\Http\Controllers\HomeController::class,'notarial'])->name('notarial.page');
Route::get('/faq', [App\Http\Controllers\HomeController::class,'faq'])->name('faq.page');
Route::get('/about-us', [App\Http\Controllers\HomeController::class,'about'])->name('about.page');
Route::get('/pricing', [App\Http\Controllers\HomeController::class,'pricing'])->name('pricing.page');
Route::get('/company', [App\Http\Controllers\HomeController::class,'company'])->name('company.page');
Route::get('/company-profle', [App\Http\Controllers\CompanyController::class,'companyProfile'])->name('company.profile.page');

Route::post('/create-company', [App\Http\Controllers\CompanyController::class,'callCompanyRegistrationApi'])->name('company.create');


Route::get('/abc', [App\Http\Controllers\CompanyController::class,'uploadDoc'])->name('file.upload');

Route::get('/xyz', [App\Http\Controllers\CompanyController::class,'uploadDocWithId'])->name('file.upload');


// Auth::routes();
Route::get('/user', 'App\Http\Controllers\UserController@test')->name('create.user');

Route::get('payment','App\Http\Controllers\PaymentController@show')->name('payment');
Route::post('payment','App\Http\Controllers\PaymentController@processPayment')->name('stripe.post');

Route::get('initiatePayment','App\Http\Controllers\HomeController@initiatePayment')->name('initiate.payment');

Auth::routes();

// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	Route::get('typography', function () {
		return view('admin.pages.typography');
	})->name('typography');
   
});

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function () {
	Route::resource('user', 'App\Http\Controllers\Admin\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\Admin\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\Admin\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\Admin\ProfileController@password']);

    Route::get('/home', 'App\Http\Controllers\Admin\HomeController@index')->name('home')->middleware('auth');

	Route::get('/company/list', 'App\Http\Controllers\Admin\CompanyController@getAllCompanies')->name('companies.list');
	// Route::get('/property/add', 'App\Http\Controllers\Admin\CompanyController@add')->name('add.property');
	// Route::post('/property/upload', 'App\Http\Controllers\Admin\CompanyController@upload')->name('upload.property');
	// Route::post('/property/create', 'App\Http\Controllers\Admin\CompanyController@create')->name('create.property');
	Route::get('/company/{id}', 'App\Http\Controllers\Admin\CompanyController@getCompanyById')->name('company.details');
	// Route::put('/property/update/{id}', 'App\Http\Controllers\Admin\CompanyController@update')->name('update.property');
	// Route::get('/property/{id}', 'App\Http\Controllers\Admin\CompanyController@destroy')->name('delete.property');
	Route::get('/users', 'App\Http\Controllers\Admin\CompanyController@getAllUsers')->name('users.list');

	// users/vendors routes
	Route::get('/users', 'App\Http\Controllers\Admin\UserController@getAllUsers')->name('users.list');
	Route::get('/user/{id}', 'App\Http\Controllers\Admin\UserController@getUserById')->name('user.details');
	Route::get('/user/delete/{id}', 'App\Http\Controllers\Admin\UserController@deleteUser')->name('user.delete');


	// Packages Routes
	Route::get('/packages', 'App\Http\Controllers\Admin\PackageController@getAllPackages')->name('package.list');
	Route::get('/package/add', 'App\Http\Controllers\Admin\PackageController@addNewPackage')->name('package.add');
	Route::post('/package', 'App\Http\Controllers\Admin\PackageController@savePackages')->name('save.package');
	Route::get('/package/{id}', 'App\Http\Controllers\Admin\PackageController@getPackageById')->name('package.details');
	Route::get('/package/delete/{id}', 'App\Http\Controllers\Admin\PackageController@deletePackage')->name('package.delete');
	Route::put('/package/{id}', 'App\Http\Controllers\Admin\PackageController@updatePakcage')->name('package.update');
		
});
});


