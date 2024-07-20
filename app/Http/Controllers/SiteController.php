<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function __invoke(?string $page = null)
    {
        return view('templates.simple.pages.index');
    }
}
