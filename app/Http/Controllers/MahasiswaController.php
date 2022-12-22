<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        // $request all berfungsi untuk memasukkan semua request dari nama fiel
        $mahasiswa = Mahasiswa::all();

        return response()->json(
            $data = [
                'data' => $mahasiswa,

            ]
        );
    }

    public function store(Request $request)
    {
        // $request all berfungsi untuk memasukkan semua request dari nama field
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $output = $mahasiswa->save();
        return response()->json(
            $data = [
                'data' => $request->all(),
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return response()->json(
            $data = [
                'data' => $mahasiswa,
            ]
        );
    }


    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->save();
        return response()->json(
            $data = [
                'data' => $request->all(),
                'mahasiswa' => $mahasiswa
            ]
        );
    }

    public function destroy($id)
    {
        // $request all berfungsi untuk memasukkan semua request dari nama field
        $mahasiswa = Mahasiswa::find($id);
        $hapus = $mahasiswa->delete();

        return response()->json(
            $data = [
                'data' => $hapus,

            ]
        );
    }
}
