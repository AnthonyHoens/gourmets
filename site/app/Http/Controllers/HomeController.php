<?php

namespace App\Http\Controllers;

use App\Models\Exhibitor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $exhibitors = Exhibitor::with('table.tags')
            ->get()
            ->shuffle()
            ->take(5)
            ->where('confirmed', '=', '1');

        return view('home.index', compact('exhibitors'));
    }
}
