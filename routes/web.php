<?php
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact',[ContactController::class, 'index'] )->name('contact');
Route::get('/admin/contact',[AdminContactController::class, 'index'] )->name('admin.contact.index');
Route::get('/plats', [PlatController::class,'index'])->name('plats');
Route::get('/test', function (){
    //affiche la vue enfant.blade.php
    return view('enfant');
});
