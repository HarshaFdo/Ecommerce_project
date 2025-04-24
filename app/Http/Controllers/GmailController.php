<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;

class GmailController extends Controller
{
    // public function redirectToGoogle()
    // {
    //     $client = new Client();
    //     $client->setClientId(env('GOOGLE_CLIENT_ID'));
    //     $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
    //     $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
    //     $client->addScope('https://www.googleapis.com/auth/gmail.send');
    //     $client->setAccessType('offline');
    //     $client->setPrompt('select_account consent');

    //     // Redirect to Google's OAuth 2.0 server
    //     $authUrl = $client->createAuthUrl();
    //     return redirect()->away($authUrl);
    // }

    // public function oauthCallback(Request $request)
    // {
    //     // Check if 'code' parameter is present
    //     if (!$request->has('code')) {
    //         return 'Missing code parameter!';
    //     }

    //     $client = new \Google\Client();
    //     $client->setClientId(env('GOOGLE_CLIENT_ID'));
    //     $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
    //     $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));

    //     $token = $client->fetchAccessTokenWithAuthCode($request->code);

    //     dd($token);
    // }

    // public function refreshAccessToken()
    // {
    //     $client = new \Google\Client();
    //     $client->setClientId(env('GOOGLE_CLIENT_ID'));
    //     $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));

    //     // Set the saved refresh token
    //     $client->refreshToken(env('GOOGLE_REFRESH_TOKEN'));

    //     // Get new access token
    //     $newAccessToken = $client->getAccessToken();

    //     dd($newAccessToken);
    // }

    // public function sendEmail()
    // {
    //     $client = new \Google\Client();
    //     $client->setClientId(env('GOOGLE_CLIENT_ID'));
    //     $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));

    //     // Set the saved refresh token
    //     $client->refreshToken(env('GOOGLE_REFRESH_TOKEN'));

    //     // Get fresh access token
    //     $accessToken = $client->getAccessToken();

    //     $service = new \Google\Service\Gmail($client);

    //     // Email content
    //     $strSubject = 'Password Reset Link';
    //     $strRawMessage = "From: your-email@gmail.com\r\n";
    //     $strRawMessage .= "To: receiver@gmail.com\r\n";
    //     $strRawMessage .= "Subject: {$strSubject}\r\n";
    //     $strRawMessage .= "MIME-Version: 1.0\r\n";
    //     $strRawMessage .= "Content-Type: text/html; charset=utf-8\r\n";
    //     $strRawMessage .= "Content-Transfer-Encoding: base64\r\n\r\n";
    //     $strRawMessage .= chunk_split(base64_encode("Click here to reset your password: <a href='http://your-site.com/reset-password'>Reset Password</a>"));

    //     // Encode message
    //     $mime = rtrim(strtr(base64_encode($strRawMessage), '+/', '-_'), '=');
    //     $message = new \Google\Service\Gmail\Message();
    //     $message->setRaw($mime);

    //     // Send email
    //     $service->users_messages->send('me', $message);

    //     return 'Email sent successfully with a fresh access token!';
    // }
}
