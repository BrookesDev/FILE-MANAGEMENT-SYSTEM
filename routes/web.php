<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home_Page');
    
    
    //User
    Route::group(['prefix' => 'user'], function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'user'])->name('user');
    Route::post('/saveuser', [App\Http\Controllers\UserController::class, 'save_user'])->name('save_userpage');
    Route::post('/userpage_update/{id}', [App\Http\Controllers\UserController::class, 'update_user'])->name('updateUserpage');
    Route::get('/deleteuserpage/{id}', [App\Http\Controllers\UserController::class, 'delete_userpage'])->name('deleteUserpage');
    Route::get('/permission', [App\Http\Controllers\UserController::class, 'permit'])->name('permission');
    Route::post('/savepermission', [App\Http\Controllers\UserController::class, 'permissionsave'])->name('savepermission');
    Route::get('/deletepermission/{id}', [App\Http\Controllers\UserController::class, 'deletepermission'])->name('delete_permission');
    
    //user role and permission
    Route::get('/index', [App\Http\Controllers\UserController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('create_user');
    // Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.');
    Route::get('/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');
    Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::get('/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::get('/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

});


//Categories
Route::group(['prefix' => 'category'], function () {
    Route::get('/', [App\Http\Controllers\CategoriesController::class, 'category'])->name('category');
    Route::post('/categories', [App\Http\Controllers\CategoriesController::class, 'category_save'])->name('save_category');
    Route::post('/categories_update/{id}', [App\Http\Controllers\CategoriesController::class, 'categories_update'])->name('update_categories');
    Route::get('/deletecategories/{id}', [App\Http\Controllers\CategoriesController::class, 'delete_categories'])->name('deletecategories');
});

//Upload
Route::group(['prefix' => 'upload'], function () {
    Route::get('/viewupload', [App\Http\Controllers\UploadController::class, 'upload'])->name('upload');
    Route::get('/uploadfile', [App\Http\Controllers\UploadController::class, 'uploadfile'])->name('uploadfile');
    Route::post('/upload', [App\Http\Controllers\UploadController::class, 'save_upload'])->name('upload_save');

    Route::get('/editupload/{id}', [App\Http\Controllers\UploadController::class, 'edit_uploadhome'])->name('editUploadhome');
    Route::get('/view/{id}', [App\Http\Controllers\UploadController::class, 'view'])->name('view_upload');
    Route::post('/edit/{id}', [App\Http\Controllers\UploadController::class, 'edit'])->name('edit_upload');

    Route::get('/upload_update/{id}', [App\Http\Controllers\UploadController::class, 'update_upload'])->name('updateupload');
    Route::get('/deleteupload/{id}', [App\Http\Controllers\UploadController::class, 'delete_upload'])->name('deleteupload');
});
//logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/change-password', [UserController::class, 'changePassword'])->name('changePassword');
    Route::post('/change-password', [UserController::class, 'changePasswordSave'])->name('postChangePassword');
});

//Roles & Permission
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
});

Route::group(['prefix' => 'profile'], function () {
    Route::get('/', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
    Route::get('editprofile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('editprofile');
});


});
