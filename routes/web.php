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

Route::group(['prefix' => 'en', 'middleware' => ['auth']], function () {

    Route::get('mainen', function () {

        $user = auth()->user();

        return view('en.mainen',['user' => $user]);

    })->name('mainEnglish');

    Route::get('endetails', function () {

        return view('en.endetails');

    })->name('detailsEnglish');

    Route::get('quest', function () {

        return view('en.quest');

    })->name('questen');

});

Route::group(['prefix' => 'ru', 'middleware' => ['auth']], function () {

    Route::get('mainru', function () {

        $user = auth()->user();
        return view('ru.mainru',['user' => $user]);
    })->name('mainRussian');

    Route::get('rudetails', function () {

        return view('ru.rudetails');

    })->name('detailsRussian');

    Route::get('quest', function () {

        return view('ru.quest');

    })->name('questru');

});






Route::get('/welcome', function () {

    return view('main');
})->name('main');

//Login

Route::get('/{name?}', 'UserController@getLogin');


// Coming or not coming registration

Route::post('/register', [


    'as' => 'register',
    'uses' =>'UserController@postRegister'
]);

Route::post('/questReg', [


    'as' => 'registerQuest',
    'uses' =>'UserController@postQuestRegister'
]);


//Routes for admin

Route::get('info', [

    'as' => 'info',
    'uses' => 'InfoController@getInfo'
]);





