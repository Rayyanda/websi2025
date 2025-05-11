<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Models\Slug;

class DosenController extends Controller
{
    //
    public function index($slug)
    {
        $data = Slug::where('slug_name','=',$slug)->with(['pages','galleries'])->first();
        $dosen = Dosen::all();
        return view('pages.dosen.dosen',compact('data','dosen'));
    }
}
