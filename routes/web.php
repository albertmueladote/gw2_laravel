<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuildController;
use App\Http\Controllers\GuildsController;
use App\Http\Controllers\ProfileController;

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

Route::get('/guild/{id}', [GuildController::class, 'guild']);
Route::get('/guilds', [GuildsController::class, 'guilds']);
Route::get('/profile', [ProfileController::class, 'profile']);

/**
 * We can call first some middleware with this:
 * Without params
 * Route::get('/profile', [ProfileController::class, 'profile'])->middleware('checkapi');
 * With params
 * Route::get('/profile', [ProfileController::class, 'profile'])->middleware('checkapi:paramvalue');
 */

/* Old Test
Route::get('/perfil', function() {
    return route('profile');
})->name('profile');

Route::get('/clanes', function() {
    return route('guilds');
})->name('guilds');

Route::get('/clan/{id}', function($id) {
    return route('guild');
})->name('guild');
*/

/*
 * Route::namespace('Guild')->group(function(){
 *   Route::get('index', [GuildController::class, 'index']);
 *   Route::get('helloworld', [GuildController::class, 'holamundo']);
 * });
*/

/**
 * Name is optional. Format: mi.route.name
 */

/**
 * Many params
 * Route::get('/clan/{guild}/user/{user}', function($guild, $user) {
 *  return 'Clan con id ' . $guild . '<br/>Usuario con el id ' . $user;
 * });
 */

/**
 * Optional params (Don't forget default value for optional param)
 * Route::get('/clan/{id?}', function($id = null) {
 *  return 'Clan con id ' . $id;
 * });
 */

 /**
  * Regular expresión
  * Route::get('/user/{name}', function($name) {
  *  return 'Nombre: ' . $name;
  * })->where('name', '[A-Za-z]);
  *
  * Two paths with different regular expresions, are differents paths
  */

  /**
   * Teporal redirects
   * Route::redirect('/old-url', '/new-url', 302);
   * 
   * Permanent redirects
   * Route::redirect('/old-url', '/new-url', 301);
   * 
   * In both case, u need one function for this new url.
   * Route::get('/new-url', function() {
   *   return 'New url';
   * });
   */

   /**
    * Shortmode
    * Route::view('/', 'welcome', ['id' => $id]);
    */