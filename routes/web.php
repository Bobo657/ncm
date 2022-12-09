<?php

use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::view('/', 'welcome');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about_us', 'about_us');
Route::view('/logistics', 'logistics');
Route::view('/sustainability', 'sustainability');
Route::view('/trading', 'trading');

Route::post('/contact', function () {
    $validated = request()->validate([
                    "name" => 'max:255',
                    "email" => 'required|email|max:255',
                    "subject" => 'max:255',
                    "number" =>  'required|max:255',
                    "message" => 'required|max:255'

                ]);


    Mail::to(config('app.email'))->send(new ContactUsMail($validated));

    return redirect()->route('contact')->with('success', 'Thank you for contacting NCM Worldwide Trading. We will get back to you');
})->middleware(ProtectAgainstSpam::class);
