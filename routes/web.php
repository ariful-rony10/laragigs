<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All Listings
Route::get('/', [ListingController::class, 'index']);
// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);
// Store Listing Data
Route::post('/listings', [ListingController::class , 'store']);
// Single Listings
Route::get('/listings/{listing}', [ListingController::class , 'show']);

// Common Resource Routes:
// index - Show All listings
// show - show single listing
// create - Show firm to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - delete  listing
