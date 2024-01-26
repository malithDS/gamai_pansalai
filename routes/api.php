<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UserController::class)->group(function(){
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::get('updateProfile/{id}/edit', 'editProfile');
    Route::put('updateProfile/{id}/edit', 'UpdateProfile');
    Route::get('getAllPansal', 'getAllPansal');
    Route::get('getPansalById/{id}', 'getPansalById');
    Route::get('getAllDharmaDeshanaGrantha', 'getAllDharmaDeshanaGrantha');
    Route::get('getDharmaDeshanaGranthaById/{id}', 'getDharmaDeshanaGranthaById');
    Route::get('getAllIdiriyataEnaDahamWedasatahan', 'getAllIdiriyataEnaDahamWedasatahan');
    Route::get('getIdiriyataEnaDahamWedasatahanById/{id}', 'getIdiriyataEnaDahamWedasatahanById');
    Route::get('getAllWathPiliweth', 'getAllWathPiliweth');
    Route::get('getWathPiliwethById/{id}', 'getWathPiliwethById');
    Route::get('getAllPirith', 'getAllPirith');
    Route::get('getPirithById/{id}', 'getPirithById');
    Route::get('getAllBana', 'getAllBana');
    Route::get('getBanaById/{id}', 'getBanaById');
    Route::get('getAllNotification', 'getAllNotification');
    Route::get('getNotificationById/{id}', 'getNotificationById');
});

Route::controller(AdminController::class)->group(function(){
    Route::post('adminLogin', 'adminLogin');

    Route::get('getAllAdminPansal', 'getAllAdminPansal');
    Route::get('getAdminPansalById/{id}', 'getAdminPansalById');
    Route::post('storePansal', 'storePansal');
    Route::get('updatePansal/{id}/edit', 'editPansal');
    Route::put('updatePansal/{id}/edit', 'UpdatePansal');
    Route::delete('deletePansal/{id}/delete', 'deletePansal');
    

    Route::get('getAllAdminDharmaDeshanaGrantha', 'getAllAdminDharmaDeshanaGrantha');
    Route::get('getAdminDharmaDeshanaGranthaById/{id}', 'getAdminDharmaDeshanaGranthaById');
    Route::post('storeDharmaGrantha', 'storeDharmaGrantha');
    Route::get('updateDharmaGrantha/{id}/edit', 'editDharmaGrantha');
    Route::put('updateDharmaGrantha/{id}/edit', 'UpdateDharmaGrantha');
    Route::delete('deleteDharmaGrantha/{id}/delete', 'deleteDharmaGrantha');
    

    Route::get('getAllAdminDahamWedasatahan', 'getAllAdminDahamWedasatahan');
    Route::get('getAdminDahamWedasatahanById/{id}', 'getAdminDahamWedasatahanById');
    Route::post('storeDahamWedasatahan', 'storeDahamWedasatahan');
    Route::get('updateDahamWedasatahan/{id}/edit', 'editDahamWedasatahan');
    Route::put('updateDahamWedasatahan/{id}/edit', 'UpdateDahamWedasatahan');
    Route::delete('deleteDahamWedasatahan/{id}/delete', 'deleteDahamWedasatahan');


    Route::get('getAllAdminWathPiliweth', 'getAllAdminWathPiliweth');
    Route::get('getAdminWathPiliwethById/{id}', 'getAdminWathPiliwethById');
    Route::post('storeWathPiliweth', 'storeWathPiliweth');
    Route::get('updateWathPiliweth/{id}/edit', 'editWathPiliweth');
    Route::put('updateWathPiliweth/{id}/edit', 'UpdateWathPiliweth');
    Route::delete('deleteWathPiliweth/{id}/delete', 'deleteWathPiliweth');


    Route::get('getAllAdminPirith', 'getAllAdminPirith');
    Route::get('getAdminPirithById/{id}', 'getAdminPirithById');
    Route::post('storePirith', 'storePirith');
    Route::get('updatePirith/{id}/edit', 'editPirith');
    Route::put('updatePirith/{id}/edit', 'UpdatePirith');
    Route::delete('deletePirith/{id}/delete', 'deletePirith');
    
    
    Route::get('getAllAdminBana', 'getAllAdminBana');
    Route::get('getAdminBanaById/{id}', 'getAdminBanaById');
    Route::post('storeBana', 'storeBana');
    Route::get('updateBana/{id}/edit', 'editBana');
    Route::put('updateBana/{id}/edit', 'UpdateBana');
    Route::delete('deleteBana/{id}/delete', 'deleteBana');
    
    
    Route::get('getAllAdminNotification', 'getAllAdminNotification');
    Route::get('getAdminNotificationById/{id}', 'getAdminNotificationById');
    Route::post('storeNotification', 'storeNotification');
    Route::get('updateNotification/{id}/edit', 'editNotification');
    Route::put('updateNotification/{id}/edit', 'UpdateNotification');
    Route::delete('deleteNotification/{id}/delete', 'deleteNotification');

});