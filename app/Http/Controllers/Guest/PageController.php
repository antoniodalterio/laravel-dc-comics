<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comics::all();
        return view('welcome', compact('Comics'));
    }
}
