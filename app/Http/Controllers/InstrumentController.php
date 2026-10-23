<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instrument;

class InstrumentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Jika user mengetik sesuatu di kolom pencarian, filter berdasarkan nama, tipe, atau brand
        $instruments = Instrument::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('type', 'like', "%{$search}%")
                         ->orWhere('brand', 'like', "%{$search}%");
        })->paginate(6)->withQueryString();

        return view('instruments.index', compact('instruments', 'search'));
    }

    public function home()
    {
        $instruments = Instrument::take(3)->get();
        return view('home', compact('instruments'));
    }

    public function show($id)
    {
        $instrument = Instrument::findOrFail($id);
        return view('instruments.show', compact('instrument'));
    }
}