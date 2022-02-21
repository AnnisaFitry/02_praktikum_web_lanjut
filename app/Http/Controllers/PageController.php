<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function HomeController()
{
    return "Selamat Datang";
}
public function AboutController()
{
    return "2041720123-annisafy-2B";
}
public function ArticleController($id)
{
    echo "Anda berada di halaman artikel ke ".$id;
}
}
