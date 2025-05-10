<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Page;

class TentangController extends Controller
{
    //
    public function index($slug)
    {
        $data = Page::where('slug','=',$slug)->get();
        $gallery = Gallery::where('slug','=',$slug)->get();
        return view('tentang.sejarah',compact('data','gallery'));
    }
}
