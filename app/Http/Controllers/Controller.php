<?php

namespace App\Http\Controllers;

use App\Models\ListKavling;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index()
    {
        return view('beranda', [
            "title" => "Home",
            "noWA" => "6281213469281"
        ]);
    }

    function listkavling()
    {
        return view('listkavling', [
            "title" => "List",
            "listkavling" => ListKavling::all(),
            "noWA" => "6281213469281"
        ]);
    }

    function panduan()
    {
        return view('panduan', [
            "title" => "Panduan",
            "noWA" => "6281213469281"
        ]);
    }
}
