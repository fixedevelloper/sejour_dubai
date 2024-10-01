<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Route::match(['POST','GET'],'/auth.signin', [LoginController::class, 'login'])
    ->name('login');
Route::match(['POST','GET'],'/auth.register', [LoginController::class, 'register'])
    ->name('register');
Route::match(['POST','GET'],'/', [HomeController::class, 'home'])
    ->name('home');

$locale = session()->get('locale', 'en');
Route::match(["POST", "GET"], '/', [HomeController::class, 'home'])
    ->name('home');
//Route::group(['prefix' => $locale],function () {
    Route::match(["POST", "GET"], '/home', [HomeController::class, 'home'])
        ->name('home');
    Route::match(["POST", "GET"], '/about', [HomeController::class, 'about'])
        ->name('about');
    Route::match(["POST", "GET"], '/contact', [HomeController::class, 'contact'])
        ->name('contact');
    Route::match(["POST", "GET"], '/service', [HomeController::class, 'service'])
        ->name('service');
    Route::match(["POST", "GET"], '/procedure', [HomeController::class, 'procedure'])
        ->name('procedure');
    Route::match(["POST", "GET"], '/package', [HomeController::class, 'package'])
        ->name('package');
    Route::match(["POST", "GET"], '/destination', [HomeController::class, 'destination'])
        ->name('destination');
    Route::match(["POST", "GET"], '/partenaire', [HomeController::class, 'partenaire'])
        ->name('partenaire');
    Route::match(["POST", "GET"], '/faq', [HomeController::class, 'faq'])
        ->name('faq');
Route::match(["POST", "GET"], '/formation', [HomeController::class, 'formation'])
    ->name('formation');
Route::match(["POST", "GET"], '/register', [HomeController::class, 'registerFormation'])
    ->name('registerFormation');
Route::match(["POST", "GET"], '/registerNewletter', [HomeController::class, 'registerNewletter'])
    ->name('registerNewletter');

//});
Route::group(['prefix' => 'package'],function () {
    Route::match(["POST", "GET"], '/investor_card', [HomeController::class, 'package_investor'])
        ->name('investor');
    Route::match(["POST", "GET"], '/etudiant_card', [HomeController::class, 'etudiant_card'])
        ->name('etudiant_card');
    Route::match(["POST", "GET"], '/freelance_card', [HomeController::class, 'freelance_card'])
        ->name('freelance_card');
    Route::match(["POST", "GET"], '/professional_card', [HomeController::class, 'professional_card'])
        ->name('professional_card');
    Route::match(["POST", "GET"], '/family_card', [HomeController::class, 'family_card'])
        ->name('family_card');
    Route::match(["POST", "GET"], '/procedure_consulaire', [HomeController::class, 'procedure_consulaire'])
        ->name('procedure_consulaire');
});
Route::group(['prefix' => 'gu8951pkgm74congo321admin'],function () {
    Route::match(["POST", "GET"], '/dashboard', [BackendController::class, 'dashboard'])
        ->name('dashboard');
    Route::match(["POST", "GET"], '/contacts', [BackendController::class, 'contacts'])
        ->name('contacts');
    Route::match(["POST", "GET"], '/inscription', [BackendController::class, 'inscription'])
        ->name('inscription');
    Route::match(["POST", "GET"], '/mails', [BackendController::class, 'emails'])
        ->name('mails');
});
