<?php

use Illuminate\Support\Facades\Route;
use App\Banner;
use App\CallToAction;
use App\Preco;
use App\Galeria;
use App\Profissionai;
use App\Diferenciai;

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
    $banners = Banner::orderBy('created_at', 'desc')->get();
    $prices = Preco::orderBy('created_at','desc')->get();
    $galerias = Galeria::orderBy('created_at', 'desc')->get();
    $profissionais = Profissionai::orderBy('created_at', 'desc')->get();
    $call_to_actions = CallToAction::orderBy('created_at', 'desc')->get();
    $diferenciais = Diferenciai::orderBy('created_at', 'desc')->get();
    return view('home', compact('banners','prices','galerias','profissionais','call_to_actions','diferenciais'));
});

Route::get('home', function () {
    return view('home');
});

Route::get('about-us', function(){
    return view('about-us');    
});

Route::get('classes', function(){
    return view('class-details');    
});

Route::get('404', function(){
    return view('404');    
});
Route::get('blog-interna', function(){
    return view('blog-details');    
});
Route::get('blog', function(){
    return view('blog');    
});
Route::get('bmi-calculator', function(){
    return view('bmi-calculator');    
});
Route::get('classes-interna', function(){
    return view('class-details');    
});
Route::get('class-timetable', function(){
    return view('class-timetable');    
});
Route::get('contato', function(){
    return view('contact');    
});
Route::get('galeria', function(){
    return view('gallery');    
});
Route::get('servicos', function(){
    return view('services');    
});
Route::get('equipe', function(){
    return view('team');    
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
