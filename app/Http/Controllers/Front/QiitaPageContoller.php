<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QiitaPageContoller extends Controller
{
    /**
     *
     */
    public function index(Request $request)
    {
        $response = Http::get('https://qiita.com/');

        return $response->body();
    }
}
