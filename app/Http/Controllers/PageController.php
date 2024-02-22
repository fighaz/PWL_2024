<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'NIM : 2241720026 <br> Nama : SofiSugiharto Zaini';
    }
    public function articles($articleId) {
        return 'Halaman Artikel dengan ID ' . $articleId;
    }
    
}
