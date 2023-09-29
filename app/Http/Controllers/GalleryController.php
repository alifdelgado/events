<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('galleries.index');
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store()
    {

    }

    public function show(Gallery $gallery)
    {

    }

    public function edit(Gallery $gallery)
    {
        return view('galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {

    }

    public function destroy(Gallery $gallery)
    {

    }
}
