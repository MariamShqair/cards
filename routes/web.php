<?php
use Illuminate\Http\Request;
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

//Route::group(['prefix' => 'tasks'] , function(){
//    Route::get('/', 'TasksController@index')->name('task.index');
//    Route::post('/store','TasksController@store')->name('store');
//    Route::patch('/task/{id}','TasksController@update');
//    Route::delete('/destroy/{id}','TaskController@distroy');
//});
Route::get('pic',function (){
    //return $request->get('photo');
    return view('pic');
});
Route::post('pic',function (Request $request){
    if ($request->hasFile('photo')) {

        $path = $request->file('photo')->storeAs(
            'avatars', time().'.'.$request->file('photo')->extension()
        );

        dd($path);

    }

    return back();
});

Route::group(['prefix' => 'cards'] , function(){
    Route::get('/','CardController@index')->name('cards.index');
    Route::get('/create','CardController@create')->name('cards.create');
    Route::post('/store','CardController@store')->name('cards.store');



    Route::get('/show/{id}','CardController@show')->name('cards.show');



    Route::get('/{card}/edit','CardController@edit')->name('cards.edit');
    Route::patch('/update/{card}','CardController@update')->name('cards.update');
    Route::delete('/delete/{id}','CardController@destroy')->name('cards.destroy');
});


