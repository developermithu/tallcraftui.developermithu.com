<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Volt::route('/', 'index')->name('home');

Route::group(['prefix' => 'docs', 'as' => 'docs.'], function () {
    Volt::route('/installation', 'docs.installation')->name('installation');
    Volt::route('/configuration', 'docs.configuration')->name('configuration');

    // Form Components
    Route::group(['prefix' => 'components', 'as' => 'components.'], function () {
        Volt::route('/input', 'docs.components.input')->name('input');
        Volt::route('/textarea', 'docs.components.textarea')->name('textarea');
        Volt::route('/radio', 'docs.components.radio')->name('radio');
        Volt::route('/checkbox', 'docs.components.checkbox')->name('checkbox');
        Volt::route('/toggle', 'docs.components.toggle')->name('toggle');
        Volt::route('/select', 'docs.components.select')->name('select');
    });

    // UI Components
    Route::group(['prefix' => 'components', 'as' => 'components.'], function () {
        Volt::route('/alert', 'docs.components.alert')->name('alert');
        Volt::route('/badge', 'docs.components.badge')->name('badge');
        Volt::route('/button', 'docs.components.button')->name('button');
        Volt::route('/breadcrumb', 'docs.components.breadcrumb')->name('breadcrumb');
        Volt::route('/dropdown', 'docs.components.dropdown')->name('dropdown');
        Volt::route('/modal', 'docs.components.modal')->name('modal');
        Volt::route('/icon', 'docs.components.icon')->name('icon');
    });
});

Route::get('clear', function () {
    Artisan::call('optimize:clear');
    return back();
});
