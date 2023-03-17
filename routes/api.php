<?php

use App\Http\Controllers\AnimeController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function (Request $request){

    $user = User::find(1);

        return [
            'id'=> $user->id,
            'name'=> $user->name
        ];

});

Route::apiResource('/anime',AnimeController::class)->middleware('auth:sanctum');

Route::post('/tokens/create', function (Request $request) {

    $request->validate([
        'email' =>'required',
        'password' =>'required'
    ]);

    $user=User::whereEmail($request->email)->first();

    if($user)
    {
        $token = $user->createToken('anime');
        return ['token' => $token->plainTextToken];
    }

});
