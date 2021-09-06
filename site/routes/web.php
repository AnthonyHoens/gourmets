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

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])
    ->name('send.mail');

Route::post('/exhibitor/new', [App\Http\Controllers\ExhibitorController::class, 'store'])
    ->name('new.exhibitor');

Route::post('/ticket', [App\Http\Controllers\TicketController::class, 'store'])
    ->name('ticket.store');

Route::post('/ticket/payment', [App\Http\Controllers\StripePaymentController::class, 'store'])
    ->name('payment.store');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home.index');

Route::get('/exhibitor', [App\Http\Controllers\ExhibitorController::class, 'index'])
    ->name('exhibitor.index');

Route::get('/exhibitor/{exhibitor}', [App\Http\Controllers\ExhibitorController::class, 'show'])
    ->name('exhibitor.show');

Route::get('/ticket', [App\Http\Controllers\TicketController::class, 'index'])
    ->name('ticket.index');

Route::get('/ticket/payment', [App\Http\Controllers\StripePaymentController::class, 'index'])
    ->name('payment.index');

Route::get('/seating', [App\Http\Controllers\SeatingController::class, 'index'])
    ->name('seating.index');

Route::get('/information', [App\Http\Controllers\InformationController::class, 'index'])
    ->name('information.index');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])
    ->name('about.index');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])
    ->name('contact.index');

Route::get('/secret', [\App\Http\Controllers\StripePaymentController::class, 'secret'])
    ->name('secret.index');



