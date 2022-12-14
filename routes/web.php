<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BreakoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BrokerController;
use App\Http\Controllers\HistoryAnalysisController;
use App\Http\Controllers\UserController;
use App\View\Components\History\Results;

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

Route::redirect('', 'dashboard', 301);

Route::group(['middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified'], 'prefix' => 'dashboard'], function () {

    // Profile route
    Route::get('/profile', [ProfileController::class, 'render'])->name('profile');

    // Generate Report Route
    Route::get('/generate-report', function () {
        return view('home.report', ['pagetitle' => 'BreakOut Strategy']);
    })->name('generate-report');

    Route::get('/', [DashboardController::class, 'render'])->name('dashboard');

    Route::get('/swing-bb-live', [BreakoutController::class, 'render'])->name('swing-bb-live');

    Route::get('/swing-bb-history-analysis', [HistoryAnalysisController::class, 'render'])->name('swing-bb-history-analysis');

    Route::get('/bos-breakout-strategy', [BreakoutController::class, 'render'])->name('bos-breakout-strategy');

    Route::get('/bos-history-analysis', [HistoryAnalysisController::class, 'render'])->name('bos-history-analysis');
    Route::get('/symbol-settings', function () {
        return view('home.symbolsettings', ['pagetitle' => 'Symbol Settings']);
    })->name('symbol-settings');
});

// API Routes

Route::group(['middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified'], 'prefix' => 'api'], function () {

    // Profile route
    Route::prefix('broker')->group(function () {
        Route::post('/add', [BrokerController::class, 'handleCreateBroker'])->name('api.broker.add');
    });

    Route::prefix('user')->group(function () {
        Route::post('/add', [UserController::class, 'add'])->name('api.user.add');
    });

    Route::get('/history/get', [HistoryAnalysisController::class, 'getTableData'])
        ->name('api.history.get');

    Route::get('/history/services/get', [HistoryAnalysisController::class, 'getFromAPI'])
        ->name('api.history.services');

    Route::get('/breakout/services/get', [BreakoutController::class, 'getFromAPI'])
        ->name('api.breakout.services');

    Route::get('/breakout/bots/close', [BreakoutController::class, 'closeSwingBB'])
        ->name('api.breakout.services.swing.closeAll');

    Route::get('/breakout/bots/start', [BreakoutController::class, 'startSwingBB'])
        ->name('api.breakout.services.swing.start');

    Route::get('/breakout/bots/stop', [BreakoutController::class, 'stopSwingBB'])
        ->name('api.breakout.services.swing.stop');
});
