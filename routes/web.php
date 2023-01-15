<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});
// Route::controller(MemberController::class)->group(function(){
//     route::get('members', 'index')->name('member.index');
//     route::get('members/create', 'create')->name('member.create');
//     route::get('members', 'store')->name('member.store');
//     route::get('members', 'show')->name('member.show');
//     route::get('members', 'edit')->name('member.edit');
//     route::get('members', 'update')->name('member.update');
//     route::get('members', 'destroy')->name('member.destroy');


// });
route::get('/members',[MemberController::class, 'index']);

Route::post('myform/anyform/store', function(Request $request){

})->name('submit');
Route::view('form1', 'forms.createPostForm1');
Route::view('form2', 'forms.createPostForm2');
Route::view('form3', 'forms.createPostForm3');

Route::get('/members/create', [MemberController::class, 'create'])->name('create');
Route::post('/members/store', [MemberController::class, 'store'])->name('store');
Route::get('/members/show/{id}', [MemberController::class, 'show'])->name('show');
Route::get('/members/edit/{id}', [MemberController::class, 'edit'])->name('edit');
Route::put('/members/update/{id}', [MemberController::class, 'update'])->name('update');
Route::get('session/{id}',[UserController::class, 'show']);
Route::view('dashboard', 'dashboard')->name('dashboard')->middleware('auth');


require __DIR__.'/auth.php';
