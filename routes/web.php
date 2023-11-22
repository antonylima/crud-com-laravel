<?php
use App\Http\Controllers\VandAppController;
use Illuminate\Support\Facades\Route;

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
Route::prefix('page') -> group (function(){
  Route::get('/',[VandAppController::class, 'index'])->name('page-index');
  Route::get("/create",[VandAppController::class, 'create'])->name('page-create');
  Route::post("/",[VandAppController::class, 'store'])->name('page-store');
  Route::get("/{id}/edit",[VandAppController::class, 'edit'])->name('page-edit');
  Route::put("/{id}",[VandAppController::class, 'update'])->name('page-update');
  Route::delete("/{id}",[VandAppController::class, 'destroy'])->name('page-destroy');



});




// Route::get('/', [VandAppController::class, 'index']); //,['nome' => 'Suivando']);
//
// Route::get('/home',function(){
//   return view('welcome');
// });
//
// Route::get('/pagetwo/{id?}/{nome?}',function($id = null, $nome = null){
//   return view('page2',['param1' => $id, 'param2' => $nome]);
// })->where(['id' => '[0-9]+', 'nome' => '[A-Za-z]+']);
//

// //
// Route::get('/page_3',function(){
//   return view('page3');
// })->name('three');

Route::fallback(function(){
    return "A página requisitada não existe. Se liga!!! Redirecionado para Home".view('welcome');});
