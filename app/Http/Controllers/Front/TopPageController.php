<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopPageController extends Controller
{
    /**
     * トップページ
     */
    public function index()
    {
        return view('front.index');
    }
}
