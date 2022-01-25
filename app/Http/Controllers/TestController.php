<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test() {
        $array = [
            'user' => 'hassine',
            'yoo' => 'test'
        ];
        return $array ;
    }
}
