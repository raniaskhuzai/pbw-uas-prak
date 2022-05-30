<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LibController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel notechara
        // $chara= DB::table('notechara')->get();

        // // mengirim ke halaman notechara untuk ditampilkan data
        return view('done');
    }

    public function input()
    {
        return view('inputc');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('notelib')->insert([
            'rating' => $request->rating,
            'author' => $request->author,
            'publisher'=> $request->publisher,
            'comments'=> $request->comments,
        ]);

        return redirect('/Done');
    }

    public function edit($rating)
    {
        #ambil data berdasarkan nama
        $lib = DB::table('notelib')
            ->select('rating', 'author', 'publisher', 'comments')
            ->rating('rating',$rating)
            ->get();
        $lib = json_decode($lib, true);
        #passing data
        return view('editc', ['lib' => $lib]);
    }

    public function update(Request $request)
    {
        DB::table('notelib')->where('rating', $request->rating)->update([
            'rating' => $request->rating,
            'author' => $request->author,
            'publisher'=> $request->publisher,
            'comments'=> $request->comments,
        ]);

        return redirect('/Done');
    }

    public function hapus($rating)
    {
        DB::table('notelib')->where('rating', $rating)->delete();
        return redirect('/Done');
    }


}