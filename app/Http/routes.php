<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::group(['domain' => 'www.'.config('settings.domain')], function () {


    Route::get('/', 'Site\MainController@index');

});




Route::group(['domain' => '{id}.'.config('settings.domain')], function () {


    Route::get('/', function ($id) {


        if (Cache::has($id)) {

            $detail = Cache::get($id);

        } else {

            try {

                $detail = \App\Content::where('seo',$id)->firstOrFail();

                Cache::put($id, $detail, 15);

            } catch(ModelNotFoundException $e) {

                return redirect('/');

            }
        }

        return view('Site.detail',['content' => $detail,'popular' => \App\Layout::popular()]);

    });
});

Route::get('/', function () {
    return redirect('http://www.'.config('settings.domain'));
});



/*
Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'Site\MainController@index');

    Route::get('{id}', 'Site\MainController@detail');




});
*/