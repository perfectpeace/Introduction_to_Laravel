    <?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\TestingController;
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

Route::get('/test/{user_id}/{product_id}',[TestingController::class,"test"]);
// Route::post('/test/{i}',[TestingController::class,"test"]);
// Route::put('/test/{i}',[TestingController::class,"test"]);
// Route::get('/test/{i}',[TestingController::class,"test"]);
// Route::get('/test/{i}',[TestingController::class,"test"]);
// Route::get('/test/{i}',[TestingController::class,"test"]);
// Route::get('/test/{i}',[TestingController::class,"test"]);
// Route::get('/test/{i}',[TestingController::class,"test"]);
// Route::get('/test/{i}',[TestingController::class,"test"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
