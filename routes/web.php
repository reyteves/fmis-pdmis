


<?php

use App\Http\Controllers\Admin\FoldersController; // Update the namespace as per your controller location
use App\Http\Controllers\PsgcController;


Route::get('/', function () { return redirect('/admin/home'); });


// custom AJAX routes for dashboard counts

Route::get('/get-folder-count', 'Admin\FoldersController@getFolderCount');
Route::get('/get-user-count', 'Admin\UsersController@getUserCount');

Route::get('/get-proposed-count', 'Admin\FoldersController@proposedCount');
Route::get('/get-ongoing-count', 'Admin\FoldersController@ongoingCount');
Route::get('/get-continuing-count', 'Admin\FoldersController@continuingCount');
Route::get('/get-terminating-count', 'Admin\FoldersController@terminatingCount');
Route::get('/get-coordinated-count', 'Admin\FoldersController@coordinatedCount');

// custom View routes
Route::get('admin/folders/{id}/view_ppf', [FoldersController::class, 'view_ppf'])->name('admin.folders.view_ppf');


// psgc routes

Route::get('/get-regions-dropdown', [PsgcController::class, 'getRegionsDropdown']);
Route::get('/get-provinces-for-region/{region}', [PsgcController::class, 'getProvincesForRegion']);

Route::get('/getProvinceName/{code}', 'PsgcController@getProvinceName');

Route::get('/getCityName/{code}', 'PsgcController@getCityName');

Route::get('/getBarangayName/{code}', 'PsgcController@getBarangayName');

// end custom psgc routes


Route::get('psgc/getProvinces', [PsgcController::class, 'getProvinces'])->name('getProvinces');
Route::get('psgc/getCities', [PsgcController::class, 'getCities'])->name('getCities');
Route::get('psgc/getBrgy', [PsgcController::class, 'getBrgy'])->name('getBrgy');


// Authentication Routes...
$this->router->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->router->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->router->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->router->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->router->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->router->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->router->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->router->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->router->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// Registration Routes..
$this->router->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->router->post('register', 'Auth\RegisterController@register')->name('auth.register');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');

    // Route::resource('subscriptions', 'Admin\SubscriptionsController');
    // Route::resource('payments', 'Admin\PaymentsController');

    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('folders', 'Admin\FoldersController');

    // custom folder controller

    
    Route::post('folders_mass_destroy', ['uses' => 'Admin\FoldersController@massDestroy', 'as' => 'folders.mass_destroy']);
    Route::post('folders_restore/{id}', ['uses' => 'Admin\FoldersController@restore', 'as' => 'folders.restore']);
    Route::delete('folders_perma_del/{id}', ['uses' => 'Admin\FoldersController@perma_del', 'as' => 'folders.perma_del']);
    Route::resource('files', 'Admin\FilesController');
    Route::get('/{uuid}/download', 'Admin\DownloadsController@download');
    Route::post('files_mass_destroy', ['uses' => 'Admin\FilesController@massDestroy', 'as' => 'files.mass_destroy']);
    Route::post('files_restore/{id}', ['uses' => 'Admin\FilesController@restore', 'as' => 'files.restore']);
    Route::delete('files_perma_del/{id}', ['uses' => 'Admin\FilesController@perma_del', 'as' => 'files.perma_del']);
    Route::post('/spatie/media/upload', 'Admin\SpatieMediaController@create')->name('media.upload');
    Route::post('/spatie/media/remove', 'Admin\SpatieMediaController@destroy')->name('media.remove');


});
