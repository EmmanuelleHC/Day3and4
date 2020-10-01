<?php

namespace App\Http\Controllers\Pinjaman;
use App\Buku;
use App\Pinjaman;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mahasiswa;
class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pinjaman::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman'=>['required'],
            'tanggal_batas_akhir_peminjaman'=>['required'],
            'id_mahasiswa'=>['required'],
            'id_buku'=>['required'],



        ]);

        $Mahasiswa=new Mahasiswa();

        $pinjaman=$Mahasiswa->pinjaman()->create([

            'tanggal_peminjaman'=>request('tanggal_peminjaman'),
            'tanggal_batas_akhir_peminjaman'=>request('tanggal_batas_akhir_peminjaman'),
            'id_mahasiswa'=>request('id_mahasiswa'),
            'id_buku'=>request('id_buku')

        ]);
        return $pinjaman;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pinjaman $pinjaman)
    {
        return 'masuk';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $pinjaman=Pinjaman::find(1);
    $pinjaman->update($request->only('tanggal_pengembalian','status_ontime'));
 
    return response()->json([
        'message' => "Your question has been updated.",
        'pinjaman' => $pinjaman,
    ]);

        
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
