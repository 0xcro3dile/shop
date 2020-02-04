<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::paginate(14);
        return view('admin.tags.tags')->with(['tags' => $tags]);
    }
}
