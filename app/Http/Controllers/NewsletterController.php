<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            ValidationException::withMessages([
                'email' => 'This E-Mail can not be added'
            ]);
        }

        return redirect('/')->with('success', 'You have subscribed to my Newsletter ♥');
    }
}
