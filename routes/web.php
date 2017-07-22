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

/*
 * Маршрут для отображения главной стр. и всего проекта
 * маршурт обрабатывает IndexCOntroller и метод данного контр.
 */
Route::resource('/', 'IndexController',
                           [
                              'only'=>['index'],
                              'names'=>['index'=>'home']
                           ]);