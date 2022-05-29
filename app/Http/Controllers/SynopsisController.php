<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SinopsisController extends Controller
{
    public function readdata()
    {
        $select = DB::table('notelib')
            ->select('rating', 'author', 'publisher', 'comments')
            ->get();
        $select = json_decode($select, true);

        $synopsis = DB::table('notesynopsis')
            ->select('title', 'synopsis')
            ->get();
        $synopsis = json_decode($synopsis, true);

        return view('done', [
            'selectN' => $select,
            'synopsis' => $synopsis,
        ]);
    }

    public function input()
    {
        return view('inputs');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('notesynopsis')->insert([
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
        ]);

        return redirect('/Done');
    }

    public function edit($title)
    {
        #ambil data berdasarkan judul
        $editSynopsis = DB::table('notesynopsis')
            ->select('title', 'synopsis')
            ->where('title', $title)
            ->get();
        $editSynopsis = json_decode($editSynopsis, true);
        #passing data
        return view('edit', [
            'notesynopsis' => $editSynopsis,
            'title' => $title,
        ]);
    }

    public function update(Request $request)
    {
        DB::table('notesynopsis')
            ->where('title', $request->title)
            ->update([
                'title' => $request->title,
                'synopsis' => $request->synopsis,
            ]);

        return redirect('/Done');
    }

    public function hapus($title)
    {
        DB::table('notesynopsis')
            ->where('title', $title)
            ->delete();
        return redirect('/Done');
    }
}