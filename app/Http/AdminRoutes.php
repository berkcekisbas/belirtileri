<?php

// Admin paneli için kullanıcı girişi gerektirmeyen form vb. sayfalara csrf koruması eklemek ve
// key oluşturmak için web middle ware altında tutuyoruz.
// prefix oalrak admin veriyoruz.



Route::group(['prefix' => 'admin','middleware' => ['web']], function () {

    Route::get('/', function () {

        return redirect('admin/dashboard');
    });


    Route::get('admin', 'Admin\AuthController@login');
    Route::get('auth/login', 'Admin\AuthController@login');
    Route::post('auth/login', 'Admin\AuthController@Authenticate');
    Route::get('auth/logout', 'Admin\AuthController@logout');
    Route::get('admin/dashboard', 'Admin\AuthController@dashboard');

});


/*
 * auth:admin middleware kullanıyoruz admin model inden kullanıcı işlemleri gerçekleştirilecek.
 * guard() metodu ile admin vb user tablo seçeneklerini belirliyoruz.
 * kullanıcı girişi yapılan tüm sayfalar aşağuda yer alacak.
 */

Route::group(['prefix' => 'admin','middleware' => ['web','auth:admin']], function () {

    Route::get('dashboard', 'Admin\AuthController@dashboard');
    Route::controller('content', 'Admin\ContentController');
    Route::get('settings', 'Admin\SettingsController@settings');


});


/*
 * Route dosyasında bulunmayan bir sayfayı 404 e yönlendiriyoruz.
 * */

Route::get('admin/{slug}', function () {

    return "404 Error";

});


/*
Route::get('admin', function () {
    return "Admin";
});
*/
