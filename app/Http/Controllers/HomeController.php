<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __invoke()
    {
        $data = Storage::disk('data')->json('home.json');
        return view('pages.home', $data);
    }
}
