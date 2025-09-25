<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Webhook\WhatsappWebhookController;

Route::get('/webhooks/whatsapp', [WhatsappWebhookController::class, 'handle']);

