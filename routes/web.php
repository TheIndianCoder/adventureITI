<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/register', [AuthController::class, 'register'])->name('admin.register');
Route::post('/register', [AuthController::class, 'store'])->name('admin.store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('admin.authenticate');

Route::group(['prefix'=>'user' ,'middleware'=>'auth'], function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::post('change-password', [AuthController::class, 'changePassword'])->name('admin.changePassword');
    Route::controller(AdminController::class)->group(function(){
        
        Route::get('/','index')->name('admin.index');
        Route::get('add-gallery','addGallery')->name('admin.addGallery');
        Route::post('add-gallery','storeGallery')->name('admin.storeGallery');
        Route::get('gallery-list','galleryList')->name('admin.galleryList');
        Route::get('delete-gallery/{id}','deleteGallery')->name('admin.deleteGallery');
        Route::get('change-status/{id}','changeStatus')->name('admin.changeStatus');
        
        Route::get('add-notice','addNotice')->name('admin.addNotice');
        Route::post('add-notice','storeNotice')->name('admin.storeNotice');
        Route::get('notice-list','noticeList')->name('admin.noticeList');
        Route::get('delete-notice/{id}','deleteNotice')->name('admin.deleteNotice');
        Route::get('change-status-notice/{id}','changeStatusNotice')->name('admin.changeStatusNotice');
        

    });
});

Route::get('/',[WebController::class, 'index'])->name('web.index');

Route::get('/about',[WebController::class, 'about'])->name('web.about');
Route::get('/vision',[WebController::class, 'vision'])->name('web.vision');
Route::get('/chairman-message',[WebController::class, 'chairmanMessage'])->name('web.chairmanMessage');
Route::get('/voice-chairman-message',[WebController::class, 'voiceChairmanMessage'])->name('web.voiceChairmanMessage');
Route::get('/principle-message',[WebController::class, 'principleMessage'])->name('web.principleMessage');
Route::get('/admission-prosidor',[WebController::class, 'admissionProsidor'])->name('web.admissionProsidor');
Route::get('/infrastructure',[WebController::class, 'infrastructure'])->name('web.infrastructure');
Route::get('/classroom',[WebController::class, 'classroom'])->name('web.classroom');
Route::get('/lab',[WebController::class, 'lab'])->name('web.lab');
Route::get('/playground',[WebController::class, 'playground'])->name('web.playground');
Route::get('/workshop',[WebController::class, 'workshop'])->name('web.workshop');
Route::get('/electrician',[WebController::class, 'electrician'])->name('web.electrician');
Route::get('/fitter',[WebController::class, 'fitter'])->name('web.fitter');
Route::get('/notice',[WebController::class, 'notice'])->name('web.notice');
Route::get('/gallery',[WebController::class, 'gallery'])->name('web.gallery');
Route::get('/contactus', [WebController::class, 'contactus'])->name('web.contactus');