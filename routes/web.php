<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'index')->name('home');


Route::group(['prefix' => 'docs', 'as' => 'docs.'], function () {
    Volt::route('/installation', 'docs.installation')->name('installation');
    Volt::route('/customizing', 'docs.customizing')->name('customizing');

    // Form Components
    Route::group(['prefix' => 'components', 'as' => 'components.'], function () {
        Volt::route('/input', 'docs.components.input')->name('input');
        // Volt::route('/textarea', 'docs.components.textarea')->name('textarea');
    });
});
