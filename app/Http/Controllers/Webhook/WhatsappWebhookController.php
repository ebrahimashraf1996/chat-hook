<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

class WhatsappWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $from = $request->input('From');
        $body = $request->input('Body');
        Log::info($request->all());
        Log::info("أهلاً! استقبلنا رسالتك: {$body}");

    }

}
