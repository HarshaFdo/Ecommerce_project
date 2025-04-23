<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;

class GmailController extends Controller
{
    public function redirectToGoogle()
    {
        $client = new Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $client->addScope('https://www.googleapis.com/auth/gmail.send');
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        // Redirect to Google's OAuth 2.0 server
        $authUrl = $client->createAuthUrl();
        return redirect()->away($authUrl);
    }

    public function oauthCallback(Request $request)
    {
        // Check if 'code' parameter is present
        if (!$request->has('code')) {
            return 'Missing code parameter!';
        }

        $client = new \Google\Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));

        $token = $client->fetchAccessTokenWithAuthCode($request->code);

        dd($token);
    }
}
