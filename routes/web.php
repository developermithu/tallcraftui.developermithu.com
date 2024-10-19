<?php

use App\Livewire\Docs\Components\Table;
use App\Livewire\Pages\Analytics;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Volt::route('/', 'index')->name('home');
Volt::route('/docs', 'docs.installation')->name('docs');
Route::get('/analytics', Analytics::class)->name('analytics');

Route::group(['prefix' => 'docs', 'as' => 'docs.'], function () {
    Volt::route('/installation', 'docs.installation')->name('installation');
    Volt::route('/configuration', 'docs.configuration')->name('configuration');
    Volt::route('/how-to-contribute', 'docs.contribution')->name('contribution');

    // Form Components
    Route::group(['prefix' => 'components', 'as' => 'components.'], function () {
        Volt::route('/input', 'docs.components.input')->name('input');
        Volt::route('/textarea', 'docs.components.textarea')->name('textarea');
        Volt::route('/radio', 'docs.components.radio')->name('radio');
        Volt::route('/checkbox', 'docs.components.checkbox')->name('checkbox');
        Volt::route('/toggle', 'docs.components.toggle')->name('toggle');
        Volt::route('/select', 'docs.components.select')->name('select');
        Volt::route('/password', 'docs.components.password')->name('password');
        Volt::route('/color-picker', 'docs.components.color-picker')->name('color-picker');
        Volt::route('/range', 'docs.components.range')->name('range');
    });

    // UI Components
    Route::group(['prefix' => 'components', 'as' => 'components.'], function () {
        Volt::route('/alert', 'docs.components.alert')->name('alert');
        Volt::route('/avatar', 'docs.components.avatar')->name('avatar');
        Volt::route('/badge', 'docs.components.badge')->name('badge');
        Volt::route('/button', 'docs.components.button')->name('button');
        Volt::route('/breadcrumb', 'docs.components.breadcrumb')->name('breadcrumb');
        Volt::route('/dropdown', 'docs.components.dropdown')->name('dropdown');
        Volt::route('/menu', 'docs.components.menu')->name('menu');
        Volt::route('/modal', 'docs.components.modal')->name('modal');
        Volt::route('/drawer', 'docs.components.drawer')->name('drawer');
        Volt::route('/icon', 'docs.components.icon')->name('icon');
        Volt::route('/separator', 'docs.components.separator')->name('separator');
        Volt::route('/stat', 'docs.components.stat')->name('stat');
        Volt::route('/spinner', 'docs.components.spinner')->name('spinner');
        Volt::route('/tab', 'docs.components.tab')->name('tab');
        Volt::route('/accordion', 'docs.components.accordion')->name('accordion');
        Volt::route('/card', 'docs.components.card')->name('card');
        Volt::route('/clipboard', 'docs.components.clipboard')->name('clipboard');
        Volt::route('/tooltip', 'docs.components.tooltip')->name('tooltip');
        
        Route::get('/table', Table::class)->name('table');
    });
});

Route::get('clear', function () {
    Artisan::call('optimize:clear');
    return back();
});

Route::get('fresh', function () {
    Artisan::call('migrate:fresh --seed --force');
    return back();
});
