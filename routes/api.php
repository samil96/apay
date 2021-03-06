<?php

use Illuminate\Http\Request;
use App\Http\Middleware\Autenticar;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('apiProducto', 'Api\ApiProducto');
Route::apiResource('apiCategoria', 'Api\ApiCategoria');
Route::apiResource('apiSubCategoria', 'Api\ApiSubCategoria');
Route::apiResource('apiUnidadMedida', 'Api\ApiUnidadMedida');
Route::apiResource('apiComerciante', 'Api\ApiComerciante');
Route::apiResource('apiComercianteProductos', 'Api\ApiComercianteProductos');
Route::apiResource('apiProductosConsumidor', 'Api\ApiProductosConsumidor');
Route::apiResource('apiBuscadorProducto', 'Api\ApiBuscadorProducto');
Route::apiResource('apiHorario', 'Api\ApiHorario');
Route::apiResource('apiCambiarHorario', 'Api\ApiCambiarHorario');
Route::apiResource('apiComercianteLista', 'Api\ApiComercianteLista');
Route::apiResource('apiConsumidorLista', 'Api\ApiConsumidorLista');
Route::apiResource('apiConsumidorDetalleLista', 'Api\ApiConsumidorDetalleLista');
Route::apiResource('apiComercianteDetalleLista', 'Api\ApiComercianteDetalleLista');
Route::apiResource('api_Datos_comerciante', 'Api\Api_Datos_comerciante');

Route::apiResource('apiNotificaciones', 'Api\ApiNotificaciones');
