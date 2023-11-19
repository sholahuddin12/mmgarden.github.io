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
        // $database = ListKavling::all();

        // if (request('search')) {
        //     $database->where('nama', 'like', '%' . request('search') . '%');
        //     // $database = ListKavling::all()->where('nama', 'like', '%' . request('search') . '%');
        // }

        return view('database', [
            "title" => "Database",
            // "listkavling" => $database,
            "listkavling" => ListKavling::filter(request(['search']))->get(),
            "noWA" => "6281213469281"
        ]);
    }
}
