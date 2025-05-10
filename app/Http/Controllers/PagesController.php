<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Page;
use App\Models\Slug;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index($slug)
    {
        $data = Slug::where('slug_name','=',$slug)->with(['pages','galleries'])->first();
        return view('pages.tentang.index',compact('data'));
    }
}
