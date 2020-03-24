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

Route::get('/', function () {
    // 通常のログ
    Log::info('ログ');
    // カスタムログ1に書き込み
    Log::channel('custom1')->info('custom1');
    Log::channel('custom1')->debug('!!!!!');
    // カスタムログ2に書き込み
    Log::channel('custom2')->info('custom2');
    Log::channel('custom2')->debug('!!!!!');
    echo 'ログを書きました';
    exit;
});
