<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DetailPembayaran;
use App\Models\Order;

class PembayaranController extends Controller
{
    public function pembayaran($id)
    {
        $id_user = auth()->user()->id;

        $data = DB::connection('mongodb')->table('undangans')
            ->where('_id', '=', $id)->get();
        // dd($data);

        return view('order.pembayaran', [
            'data' => $data
        ]);
    }

    public function pembayaranUndangan(Request $request, $id)
    {
        $id_order = DB::connection('mongodb')->table('undangans')
            ->where('_id', '=', $id)
            ->get();

        // dd($id_order);

        $order = Order::find($id_order[0]['id_order']);

        $order->update([
            'total_harga' => $request['harga'],
            'status_order' => 1
        ]);

        // dd($order);

        $data = new DetailPembayaran;
        $data->id_order = $id_order[0]['id_order'];
        $data->metode_pembayaran = $request['metode-pembayaran'];
        $data->kode_kupon = $request['kupon'];
        $data->status_pembayaran = 1;
        $data->save();
        // dd($request);

        if ($id_order[0]['jenis_undangan'] == 'pernikahan') {

            return redirect()->route('undangan_pernikahan', [
                'id' => $id
            ]);
        } else {
            return redirect()->route('undangan_ulangtahun', [
                'id' => $id
            ]);
        }
    }
}