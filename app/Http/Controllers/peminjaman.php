<?php

namespace App\Http\Controllers;

use App\Models\formPeminjaman;
use Illuminate\Http\Request;

class peminjaman extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//menampilkan list ebook berdasarkan user tertentu
    {
        return view('yourBook', [
            'posts'=>formPeminjaman::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //menampilkan halaman form peminjaman
    {
        return view('formPeminjaman'); //menampilkan halaman form peminjaman
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //menyimpan data inputan user ke dalam database
    {
        $validatedData = $request->validate([
            'email' => 'required|email', //validasi email user
            'name' => 'required|max:255', //validasi nama dengan karakter maksimal 255 kata
            'title' => 'required|max:255', //validasi title dengan karakter maksimal 255 kata
            'DateBorrow' => 'date_format:m/d/Y', //validasi format tanggal
            'dueDate' => 'date_format:m/d/Y' //validasi format tanggal
        ]);
        
        formPeminjaman::create($validatedData); //mengupload data peminjaman ke database peminjaman

        return redirect('formPeminjaman')->with('success', 'You have '); //pesan alert bahwa data berhasil diinput oleh user
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formPeminjaman  $formPeminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(formPeminjaman $formPeminjaman)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formPeminjaman  $formPeminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(formPeminjaman $formPeminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formPeminjaman  $formPeminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formPeminjaman $formPeminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formPeminjaman  $formPeminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(formPeminjaman $formPeminjaman)
    {
        //
    }
}
