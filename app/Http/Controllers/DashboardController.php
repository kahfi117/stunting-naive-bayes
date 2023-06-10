<?php

namespace App\Http\Controllers;

use App\Models\DataTesting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $total = DataTesting::count();

        $absence = DataTesting::where('status', 'absence')->count();
        $presence = DataTesting::where('status', 'presence')->count();

        return view('admin.dashboard', compact('total', 'absence', 'presence'));
    }
}
