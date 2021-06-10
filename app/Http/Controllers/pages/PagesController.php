<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function legalNotice() {
        return view('pages.legal_notice');
    }

    public function sitemap() {
        return view('pages.sitemap');
    }
}
