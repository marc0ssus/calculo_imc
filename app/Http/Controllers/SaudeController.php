<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saude;

class SaudeController extends Controller
{
    public function index() {
        return view('saude');
    }

    public function saude() {
        $saude = new Saude();
        $resultadosaude = $saude->resultado();
        return view('resultado',compact('resultadosaude'));
    }
}