<?php

namespace App\Http\Controllers;

use App\Models\Tango;
use Illuminate\Http\Request;

class TangoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tangos = Tango::all();
        return view('tango.index', ['tangos' => $tangos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tango.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tango = new Tango;
        $tango->word = $request->word;
        $tango->memo = $request->memo;
        $tango->done = false;
        $tango->save();
        return redirect('/tango');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect("/tango/{$id}/edit");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tango = Tango::find($id);
        return view('tango.edit', ['tango' => $tango]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tango = Tango::find($id);
        $tango->word = $request->word;
        $tango->memo = $request->memo;
        $tango->done = false;
        $tango->save();
        return redirect('/tango');
    }
}
