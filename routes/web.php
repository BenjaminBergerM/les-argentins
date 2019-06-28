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

Route::get('/', 'MainController@index')->name('index');
Route::get('/project/{id}', 'MainController@show')->name('projects.show');

Route::get('locale/{locale}', 'MainController@locale')->name('locale');

Route::prefix('backoffice')->group(function() {
    
    // Backoffce 
    Route::middleware('auth')->group(function() {
        Route::get('/', 'Backoffice\BackofficeController@index');

        Route::prefix('projects')->name('backoffice.projects.')->group(function() {
            Route::get('/', 'Backoffice\ProjectsController@index')->name('index');
            Route::get('/create', 'Backoffice\ProjectsController@create')->name('create');
            Route::post('/', 'Backoffice\ProjectsController@store')->name('store');
            Route::get('/{id}/edit', 'Backoffice\ProjectsController@edit')->name('edit');
            Route::put('/{id}/update', 'Backoffice\ProjectsController@update')->name('update');
            Route::delete('/{id}/destroy', 'Backoffice\ProjectsController@destroy')->name('destroy');
            Route::prefix('/{project_id}/content')->name('contents.')->group(function() {
                Route::get('/', 'Backoffice\ContentController@index')->name('index');
                Route::get('/create', 'Backoffice\ContentController@create')->name('create');
                Route::post('/', 'Backoffice\ContentController@store')->name('store');
                Route::get('/{content_id}/edit', 'Backoffice\ContentController@edit')->name('edit');
                Route::put('/{content_id}/update', 'Backoffice\ContentController@update')->name('update');
                Route::delete('/{content_id}/delete', 'Backoffice\ContentController@destroy')->name('destroy');
                Route::get('/{content_id}/up', 'Backoffice\ContentController@up')->name('up');
                Route::get('/{content_id}/down', 'Backoffice\ContentController@down')->name('down');
            });
        });

        Route::prefix('founders')->name('backoffice.founders.')->group(function() {
            Route::get('/', 'Backoffice\FoundersController@index')->name('index');    
        });

        Route::prefix('contact')->name('backoffice.contact.')->group(function() {
            Route::get('/', 'Backoffice\ContactController@index')->name('index');
            Route::get('/create', 'Backoffice\ContactController@create')->name('create');
            Route::post('/store', 'Backoffice\ContactController@store')->name('store');
            Route::get('/{id}/edit', 'Backoffice\ContactController@edit')->name('edit');
            Route::put('/{id}/update', 'Backoffice\ContactController@update')->name('update');
            Route::delete('/{id}/delete', 'Backoffice\ContactController@destroy')->name('destroy');
        });

        Route::prefix('founders')->name('backoffice.founders.')->group(function() {
            Route::get('/', 'Backoffice\FoundersController@index')->name('index');
            Route::get('/create', 'Backoffice\FoundersController@create')->name('create');
            Route::post('/store', 'Backoffice\FoundersController@store')->name('store');
            Route::get('/{id}/edit', 'Backoffice\FoundersController@edit')->name('edit');
            Route::put('/{id}/update', 'Backoffice\FoundersController@update')->name('update');
            Route::delete('/{id}/delete', 'Backoffice\FoundersController@destroy')->name('destroy');
        });

        Route::prefix('settings')->name('backoffice.settings.')->group(function() {
            Route::get('/', 'Backoffice\SettingsController@index')->name('index');

            Route::name('lang.')->group(function() {
                Route::put('/lang', 'Backoffice\SettingsController@lang_update')->name('update');
            });
            
            Route::name('home_texts.')->group(function() {
                Route::put('/home-texts', 'Backoffice\SettingsController@home_texts_update')->name('update');
            });

            Route::name('home_images.')->group(function() {
                Route::put('/home-images', 'Backoffice\SettingsController@home_images_update')->name('update');
            });
        });

    });

    // Auth
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login')->middleware(['web','guest']);
    Route::post('login', 'Auth\LoginController@login')->middleware(['web','guest']);
    Route::post('logout', 'Auth\LoginController@logout')->name('logout')->middleware('web');
    // Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware(['web','guest']);
    // Route::post('register', 'Auth\RegisterController@register')->middleware(['web','guest']);
});

// Route::get('storage-link', function() {
//     Artisan::call('storage:link');
//     return 'Done!';
// });

// Route::get('migrate', function() {
//     Artisan::call('migrate');
//     return 'Done!';
// });

// Route::get('seed', function() {
//     Artisan::call('db:seed');
//     return 'Done!';
// });