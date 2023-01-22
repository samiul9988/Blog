<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use app\Models\Phone;
use App\Models\Post;
use App\Models\User;

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

Route::get('index',[LikeController::class,'index'])->name('index');

Route::get('/', function () {

    $post = Post::find(2)->likes;
    // dd($post);

    // $likes = Post::with('likes')->get();
    // // dd($likes);

    return view('welcome');
});

Route::get('feed', function(){
    $posts = Post::with(['likes','likes.user'])->paginate(10);
    return view('feed', compact('posts'));
})->name('feed');

Route::get('card',[ProfileController::class,'posts'])->name('card');

Route::post('storlike',[ProfileController::class,'store'])->name('storlike');
Route::post('comment',[ProfileController::class,'index'])->name('comment');
Route::get('edit_post/{id}',[PostController::class,'edit'])->name('edit_post');

Route::PUT('update/{id}',[PostController::class,'update'])->name('post.update');




Route::post('like', [LikeController::class,'store'])->name('like');

Route::post('comments', [LikeController::class,'save'])->name('comments');


// Route::get('comments', [Comment::class,'post'])->name('comment');
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
route::get('test', [MemberController::class, 'retriving'])->name('test');




require __DIR__.'/auth.php';
