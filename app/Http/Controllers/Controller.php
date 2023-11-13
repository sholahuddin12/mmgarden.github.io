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
            "title" => "MMGarden | Home",
            "noWA" => "6281213469281"
        ]);
    }

    function listkavling()
    {
        return view('listkavling', [
            "title" => "MMGarden | List",
            "listkavling" => ListKavling::all(),
            "noWA" => "6281213469281"
        ]);
    }

    function panduan()
    {
        return view('panduan', [
            "title" => "MMGarden | Panduan",
            "noWA" => "6281213469281"
        ]);
    }

    function database()
    {
        return view('database', [
            "title" => "Database",
            "listkavling" => ListKavling::latest()->filter()->get(),
            "noWA" => "6281213469281"
        ]);
    }
}
