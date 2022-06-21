<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;



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
    public function indexnew(){
        $data=\DB::table('peminjamen')->get();
        return view('admin.booking.index', ['data' => $data]);
    }

    public function editstatus($id)
    {
        $data = \DB::table('peminjamen')->where('id', $id)->first();
        return view('admin.booking.edit', compact('data', 'id'));
    }
    public function updatestatus(Request $request, $id)
    {
        switch($request->get('approve'))
        {
            case 0:
                Peminjaman::postpone($id);
                break;
            case 1:
                Peminjaman::approve($id);
                break;
            case 2:
                Peminjaman::reject($id);
                break;
            case 3:
                Peminjaman::postpone($id);
                break;
            default:    
                break;

        }
        return redirect('/admin/booking');
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
    // public function destroy($id)
    // {
    //     DB::delete('delete from peminjamen where id = ?',[$id]);
    //     return redirect('/admin/booking')->with('success', 'User has been deleted');
    // }
}
