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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/webhosting', [\App\Http\Controllers\HomeController::class, 'webhosting'])->name('home.webhosting');
Route::get('/domeinnaam', \App\Http\Livewire\Domainname::class)->name('home.domainname');
Route::get('/features', [\App\Http\Controllers\HomeController::class, 'features'])->name('home.features');
Route::get('/faq', [\App\Http\Controllers\HomeController::class, 'faq'])->name('home.faq');
Route::get('/contact', \App\Http\Livewire\Contact::class)->name('home.contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin');
})->name('admin');

Route::hosting();

Route::get('/test', function () {
    $item = \MadeITBelgium\Hosting\Models\Domainname::find(1);


    return (new \MadeITBelgium\Hosting\Mail\SentDomainname($item))->render();
});
