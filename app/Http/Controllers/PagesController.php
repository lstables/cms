<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Pages::paginate(10);
        return view('pages.index', compact('pages'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }
}
