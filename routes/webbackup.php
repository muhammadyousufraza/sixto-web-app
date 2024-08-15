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

// Static Pages
Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home.page');
Route::get('/account-tax', [App\Http\Controllers\HomeController::class,'accountTax'])->name('account.page');
Route::get('/migracion', [App\Http\Controllers\HomeController::class,'migracion'])->name('migracion.page');
Route::get('/notarial', [App\Http\Controllers\HomeController::class,'notarial'])->name('notarial.page');
Route::get('/faq', [App\Http\Controllers\HomeController::class,'faq'])->name('faq.page');
Route::get('/about-us', [App\Http\Controllers\HomeController::class,'about'])->name('about.page');
Route::get('/pricing', [App\Http\Controllers\HomeController::class,'pricing'])->name('pricing.page');
Route::get('/company', [App\Http\Controllers\HomeController::class,'company'])->name('company.page');
Route::get('/company-profle', [App\Http\Controllers\CompanyController::class,'companyProfile'])->name('company.profile.page');

// Company Create Routes
Route::post('/create-company', [App\Http\Controllers\CompanyController::class,'callCompanyRegistrationApi'])->name('company.create');
Route::post('/upload-company-docs', [App\Http\Controllers\CompanyController::class,'processUploadedDoc'])->name('company.docs.upload');
// Route::get('/abc', [App\Http\Controllers\CompanyController::class,'uploadDoc'])->name('file.upload');
// Route::get('/xyz', [App\Http\Controllers\CompanyController::class,'uploadDocWithId'])->name('file.upload');
Route::get('/user', 'App\Http\Controllers\UserController@test')->name('create.user');

// Payment Routes
Route::get('payment','App\Http\Controllers\PaymentController@show')->name('payment');
Route::post('payment','App\Http\Controllers\PaymentController@processPayment')->name('stripe.post');
Route::get('initiatePayment','App\Http\Controllers\HomeController@initiatePayment')->name('initiate.payment');

// Customer Dashboard Routes

Route::prefix('customer')->group(function () {
	Route::get('/login', 'App\Http\Controllers\Customer\LoginController@login')->name('login.page');
	Route::get('/logout', 'App\Http\Controllers\Customer\LogoutController@logout')->name('customer.logout');
	Route::post('/authenticate', 'App\Http\Controllers\Customer\LoginController@authenticate')->name('customer.auth');
	Route::get('/signup', 'App\Http\Controllers\Customer\SignUpController@signup')->name('customer.signup');
	Route::post('/register-user', 'App\Http\Controllers\Customer\SignUpController@registerUser')->name('customer.register');
	Route::group(['middleware' => 'auth.customer'], function () {
		
		Route::get('/dashboard/index', 'App\Http\Controllers\Customer\DashboardController@index')->name('customer.dashboard.dashboard');
		Route::get('/dashboard/documents', 'App\Http\Controllers\Customer\DashboardController@index')->name('customer.dashboard.document');
		Route::get('/dashboard/virtualMail', 'App\Http\Controllers\Customer\DashboardController@index')->name('customer.dashboard.document');
		Route::get('/dashboard/serviceTax', 'App\Http\Controllers\Customer\DashboardController@index')->name('customer.dashboard.document');
		Route::get('/dashboard/orderhistory', 'App\Http\Controllers\Customer\DashboardController@index')->name('customer.dashboard.document');
		Route::get('/dashboard/payment', 'App\Http\Controllers\Customer\DashboardController@index')->name('customer.dashboard.document');
		Route::get('/dashboard/profile', 'App\Http\Controllers\Customer\DashboardController@index')->name('customer.dashboard.document');
		Route::get('/documents', 'App\Http\Controllers\Customer\DashboardController@CompletedDocuments')->name('customer.documents');
		Route::get('/virtualMail', 'App\Http\Controllers\Customer\DashboardController@VirtualMailbox')->name('customer.mailbox');
		Route::get('/serviceTax', 'App\Http\Controllers\Customer\DashboardController@ServiceTax')->name('customer.servicetax');
		
		Route::get('/ForgetPassword', 'App\Http\Controllers\Customer\ForgetPasswordController@index')->name('customer.forget.password');
		Route::get('/SettingPayment', 'App\Http\Controllers\Customer\SettingController@payment')->name('customer.payment.setting');
		Route::get('/SettingProfile', 'App\Http\Controllers\Customer\SettingController@profile')->name('customer.profile.setting');
		
		Route::get('/orders', 'App\Http\Controllers\Customer\OrderController@history')->name('customer.order.history');
		// Route::get('/VirtualMailbox', 'App\Http\Controllers\Customer\DashboardController@VirtualMailbox')->name('user.delete');

	});
});

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


