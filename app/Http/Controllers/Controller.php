<?php

namespace App\Http\Controllers;

use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function read() {


        if(isset($_POST['submit'])) {
            $response = Http::withoutVerifying()->get('https://api.chucknorris.io/jokes/random')['value'];
                $response2 = Http::withoutVerifying()->get('https://api.chucknorris.io/jokes/random')['created_at'];
                    return view('welcome', compact('response','response2'));
        } else {

            return view('welcome');
        }

       

        // $response1 = Http::get('http://example.com/users', [
        //     'value' => 'Taylor',
        //     'created_at' => 1,
        //     'verify' => false
        // ]);

       
      
    }
}
