<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index()
    {
        $data = DB::connection('mongodb')->table('reviews')->get();

        // dd($data);

        return view('review', [
            'data' => $data
        ]);
    }
}