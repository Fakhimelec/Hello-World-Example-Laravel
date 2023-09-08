<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\submittedDataController;

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('members');
});

Route::post('/addMember', function (Request $request) {
    echo $request->post('member_lname');
    return view('members');
})->name('addMember'); */

Route::get('/', [submittedDataController::class, 'homePage']);

Route::post('/addMemberPage', [submittedDataController::class, 'addMember'])->name('addMember');

Route::post('/delMemberPage/{id}', [submittedDataController::class, 'delMember'])->name('delMember');