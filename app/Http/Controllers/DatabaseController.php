<?php

namespace App\Http\Controllers;

use App\Models\ListKavling;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('database', [
            "title" => "Database",
            "listkavling" => ListKavling::filter(request(['search']))->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('database.create', [
            "title" => "Create",
            // "listkavling" => ListKavling::filter(request(['search']))->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $booking = $request->input('booking');
        // $tunai = $request->input('tunai');
        // $cicil = $request->input('cicil');

        // // Hapus "Rp. " dari nilai booking
        // $booking = str_replace('Rp. ', '', $booking);
        // $tunai = str_replace('Rp. ', '', $tunai);
        // $cicil = str_replace('Rp. ', '', $cicil);

        // Validasi dan pemformatan jika tipe data yang diharapkan adalah datetime
        // $formattedBooking = Carbon::parse($booking)->format('Y-m-d H:i:s');

        // Simpan ke database
        // ListKavling::create([
        //     'booking' => $formattedBooking,
        //     // kolom-kolom lainnya
        // ]);

        // return $request;
        ListKavling::create($request->all());

        return redirect('/database')->with('success', 'Data baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ListKavling $listKavling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListKavling $database)
    {
        return view('database.edit', [
            "title" => "Edit",
            "listkavling" => $database,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListKavling $database)
    {
        $database->update($request->all());

        return redirect('/database')->with('success', 'Data  berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // dd('Menghapus data dengan ID: ' . $list->panjang . 'error');
        // $list->delete();
        // ListKavling::delete($request->id);
        // ListKavling::create($request->all());
        // dd('Data' . $list->id . ' berhasil dihapus');
        // $request = ListKavling::find($request->all());
        $id = $request->input('id');
        ListKavling::destroy($id);

        // $request->delete($id);


        return redirect('/database')->with('success', 'Data berhasil dihapus!');
    }

    public function jumlah(Request $request)
    {
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');

        $total = $panjang * $lebar;

        return response()->json(['total' => $total]);
    }
}
