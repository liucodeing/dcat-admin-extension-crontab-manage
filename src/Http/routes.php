<?php

use Dcat\Admin\Extension\Crontab\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::resource('extension/crontab', Controllers\CrontabController::class);
Route::resource('extension/crontab-log', Controllers\CrontabLogController::class);
