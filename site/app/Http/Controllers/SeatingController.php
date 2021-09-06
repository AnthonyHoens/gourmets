<?php

namespace App\Http\Controllers;

use App\Models\Exhibitor;
use Illuminate\Http\Request;

class SeatingController extends Controller
{
    public function index()
    {
        $query = \request('search') ? \request('search') : '';
        $exhibitors = Exhibitor::with('table.tags')
            ->where('full_name', 'LIKE', "%$query%")
            ->where('confirmed','=', 1)
            ->get();

        $exhibitors = $exhibitors->shuffle()
            ->take(5);

        return view('seating.index', compact('exhibitors'));
    }
}
