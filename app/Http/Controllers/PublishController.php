<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tamu;

class PublishController extends Controller
{
    public function index_pernikahan($slug)
    {
        $undangan = DB::connection('mongodb')->table('undangans')
            ->where('slug', '=', $slug)
            ->get();

        $detail = $undangan[0]['details'];

        return view('order.pernikahan.publish', [
            'undangan' => $undangan,
            'detail' => $detail
        ]);
    }

    public function tamu_pernikahan(Request $request, $slug)
    {
        $undangan = DB::connection('mongodb')->table('undangans')
            ->where('slug', '=', $slug)
            ->get();

        Tamu::create([
            'id_undangan' => (string)$undangan[0]['_id'],
            'nama_tamu' => $request['nama_lengkap'],
            'telepon_tamu' => $request['telepon'],
            'kehadiran_tamu' => $request['kehadiran']
        ]);

        return redirect()->route('publish_pernikahan', [
            'slug' => $slug
        ])->with('tamusukses', 'Berhasil menambahkan data kehadiran.');
    }

    public function index_ulangtahun($slug)
    {
        $undangan = DB::connection('mongodb')->table('undangans')
            ->where('slug', '=', $slug)
            ->get();

        $detail = $undangan[0]['details'];

        return view('order.ulangtahun.publish', [
            'undangan' => $undangan,
            'detail' => $detail
        ]);
    }

    public function tamu_ulangtahun(Request $request, $slug)
    {
        $undangan = DB::connection('mongodb')->table('undangans')
            ->where('slug', '=', $slug)
            ->get();

        Tamu::create([
            'id_undangan' => (string)$undangan[0]['_id'],
            'nama_tamu' => $request['nama_lengkap'],
            'telepon_tamu' => $request['telepon'],
            'kehadiran_tamu' => $request['kehadiran']
        ]);

        return redirect()->route('publish_ulangtahun', [
            'slug' => $slug
        ])->with('tamusukses', 'Berhasil menambahkan data kehadiran.');
    }
}