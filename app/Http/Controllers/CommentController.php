<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function create(Request $request)
    {
        $validated = $request->validate([
            'author_name' => 'required',
            'email' => 'required|email',
            'content'=> 'required'
        ]);

        Comment::create($validated);

        return redirect()->back()->with('success','Terimakasih, pesan akan dibalas melalui email');
    }
}
