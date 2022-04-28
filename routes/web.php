<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Route::get('hoge/index', [HomeController::class, 'index']);

Route::get('/home',[HomeController::class,'index']);

Auth::routes();
//Auth::logout();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //タスク index一覧表示
// Route::get('/folders',[App\Http\Controllers\FolderController::class, 'index'])->name('folders.index');

// //クエリビルダのタスク
 Route::get('/tasks',[App\Http\Controllers\TaskController::class,'index'])->name('tasks.index');

//実験用
// Route::get('/test', [App\Http\Controllers\TaskController::class, 'test']);

 //フォルダ一覧ルーティング 　パラメーターを渡す
  //Route::get('folders/{id}/tasks',[App\Http\Controllers\TaskController::class,'index'])->name('tasks.index');

Route::group(['middleware' => ['auth'], 'prefix' => '/folders', 'as' => 'folder.'],function (){
       Route::get('{id}/tasks',[App\Http\Controllers\FolderController::class,'index'])
       ->name('index')->middleware('auth');
});

//Route::post('/', [QuestionnaireController::class, 'store'])->name('store')->middleware('regenerate.token');



// Route::get('create','FolderController@create')->name('folder.create');



//フォルダ作成 ルーティング
// Route::get('/folders',[App\Http\Controllers\FolderController::class,'create'])
// ->name('folder.create');
// Route::post('/folders',[App\Http\Controllers\FolderController::class,'create']);
