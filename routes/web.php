<?php

use Illuminate\Routing\Route as IlluminateRoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;
use Symfony\Component\Routing\Router;

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

Route::get('/', function () {

    $variabileSaluto = "Ciao Mondo!";

    $variabileLista = ['home', 'about', 'info', 'contact'];

    return view('home', ['saluto' => $variabileSaluto, 'lista' => $variabileLista],);

})->name('home');

Route::get('/about', function () {

    return view('about');

})->name('about');


Route::get('/info', function () {

    return view('info');

})->name('info');


Route::get('/contact', function () {

    return view('contact');

})->name('contact');
