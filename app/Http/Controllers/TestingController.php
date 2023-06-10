<?php

namespace App\Http\Controllers;

use App\Models\DataTesting;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        $testing = DataTesting::orderBy('created_at', 'asc')->get();
        return view('admin.riwayat.index', compact('testing'));
    }
}
