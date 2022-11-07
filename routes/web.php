<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\BugStatusController;
use App\Http\Controllers\JiraTicketsController;
use App\Http\Controllers\TicketTypeController;
use App\Http\Controllers\TicketStatusController;
use App\Http\Controllers\TicketComplexityController;


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




Route::middleware(['auth'])->group(function () {
    Route::get('/upload', [JiraTicketsController::class, 'upload']);
    Route::post('/file-store', [JiraTicketsController::class, 'store'])->name('file.upload');
    Route::get('show/{id?}', [JiraTicketsController::class, 'show']);
    Route::post('add-new-ticket', [JiraTicketsController::class, 'addNewTicket'])->name('addNewTicket');

    Route::get('show/{id}/edit-log/{logid}', [JiraTicketsController::class, 'show'])->name('editLog');
    Route::post('{ticketid}/updateLog/{id?}', [JiraTicketsController::class, 'updateLog'])->name('updateLog');
    Route::post('ticket-info/{ticketid}', [JiraTicketsController::class, 'ticketinfo'])->name('ticketinfo');
    Route::post('ticket-additional-info/{ticketid}', [JiraTicketsController::class, 'ticketAdditionalInfo'])->name('ticketAdditionalInfo');


    Route::get('clear-tables', [JiraTicketsController::class, 'clearTables']);
    Route::resource('ticket-type', TicketTypeController::class);
    Route::resource('ticket-status', TicketStatusController::class);
    Route::resource('ticket-complexity', TicketComplexityController::class);




    Route::get('/category', [ProductCategoriesController::class, 'index']);
    Route::post('/addCategory', [ProductCategoriesController::class, 'create']);
    Route::get('/product', [ProductController::class, 'productList']);
    Route::get('/product/{id}', [ProductController::class, 'productDetails'])->name('details');
    Route::get('/csc', [CountryController::class, 'index']);
    Route::get('/csc/country', [CountryController::class, 'list']);
    Route::get('/csc/country/add', [CountryController::class, 'add']);
    Route::get('/bug-status', [BugStatusController::class, 'index']);

    Route::get('/', [HomeController::class, 'index']);


});

Auth::routes();

