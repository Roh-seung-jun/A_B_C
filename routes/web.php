<?php

use App\Map;
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

Route::get('/', function () {
    if(Map::all()->count() < 1){
        $list = json_decode(file_get_contents('./resources/js/data.json'));
        forEach( $list as $data ){
            forEach( $data->item as $item ){
                $input = [
                    'area' => $data->area,
                    'most' => $data->most,
                    'item' =>$item
                ];
                Map::create($input);
            }
        }
    }
    return view('index');
})->name('/');

Route::POST('/event/event','EventController@event')->name('event.event');
Route::get('/api/event/{phone}/stamps','EventController@join');
Route::resource('map','MapController');
Route::resource('review','ReviewController');
Route::resource('event','EventController');
Route::resource('file','FileController');
