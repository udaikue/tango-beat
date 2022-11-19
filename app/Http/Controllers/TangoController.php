<?php

namespace App\Http\Controllers;

use App\Models\Tango;
use Illuminate\Http\Request;

class TangoController extends Controller
{
    public function index() {
        $tangos = Tango::all();
        return view('index', ['tangos' => $tangos]);
    }

    public function add(Request $request) {
        return view('new');
    }

    public function create(Request $request) {
        // $this->validate($request, Tango::$rules);
        $tango = new Tango;
        $tango->word = $request->word;
        $tango->memo = $request->memo;
        $tango->done = false;
        $tango->save();
        return redirect('/');
    }
}
