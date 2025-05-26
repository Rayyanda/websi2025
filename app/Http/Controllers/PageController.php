<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index($slug)
    {
        $pg = Page::where('slug','=',$slug)->first();
        $data = Content::where('page_id','=',$pg->id)->orderBy('published_at','asc')->get();
        return view('pages.visi-misi', compact('data'));
    }
}
