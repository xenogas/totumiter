<?php

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
    return view('welcome');
});
// Convert these to use a controller?
// Route::get('/about', function(){return view('about');});
Route::get('/about', 'AboutController@index');
Route::get('/projects', function(){return view('projects');});
Route::get('/contact', function(){return view('contact');});

// Admin for adjusting skills
Route::get('/about/expertise', 'ExpertiseController@index');
Route::get('/about/expertise/create', 'ExpertiseController@create');
Route::post('/about/expertise', 'ExpertiseController@store');

// Route::get('about/expertise/category/create', 'ExpertiseCategoryContnroller@create');
Route::post('/expertise/category', 'ExpertiseCategoryController@store');
Route::post('/expertise/skill', 'ExpertiseSkillController@store');