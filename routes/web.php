<?php

use App\Http\Controllers\VirtualServerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/server', function () {
    return view('server');
});

Route::prefix('server')->group(function () {
    Route::post('/{server}/start', [VirtualServerController::class, 'start'])->name('server.start');
    Route::post('/{server}/stop', [VirtualServerController::class, 'stop'])->name('server.stop');
    Route::post('/{server}/restart', [VirtualServerController::class, 'restart'])->name('server.restart');
    Route::get('/{server}/console', [VirtualServerController::class, 'getConsole'])->name('server.console');
    Route::get('{server}/vnc', [VirtualServerController::class, 'getVncConnection']);
});
