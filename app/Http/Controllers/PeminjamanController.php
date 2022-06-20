<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Models\Post;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formPeminjaman', [
            'posts'=>Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formPeminjaman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable',
            'DateBorrowed' => 'required',
            'DueDate' => 'required'
        ]);
        
        Peminjaman::create($validatedData);

        // $validatedData['user_id'] = auth()->user()->id;

        return redirect('/formpeminjaman/{id}')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('formPeminjaman', [
            'posts'=>$post]);
    }

    public function show_peminjaman($id){
        $post = Peminjaman::find($id);
        return view('yourBooks', [
            'posts'=>$post
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        return view('extendDate', [
            'post' => $peminjaman,
            'posts'=>Peminjaman::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $validatedData = $request->validate([
            'title' => 'nullable',
            'DateBorrowed' => 'required',
            'DueDate' => 'required'
        ]);

        Peminjaman::where('id', $peminjaman->id)
            ->update($validatedData);

        return redirect('/formpeminjaman/{id}')->with('success', 'Peminjaman has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
