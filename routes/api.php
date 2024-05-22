<?php

use Illuminate\Support\Facades\Route;
use Marjose123\FilamentWebhookServer\Http\Controllers\WebhookController;

Route::prefix('/webhook-server/api')->group(function () {
    Route::post('/', [WebhookController::class, 'create']);
});