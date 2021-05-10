<?php

namespace SimaoCoutinho\Store;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('store::layout.master', [
           'result' => 55
        ]);
    }
}
