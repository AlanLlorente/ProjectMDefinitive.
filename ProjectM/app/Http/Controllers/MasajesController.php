<?php

namespace App\Http\Controllers;

use App\Masajes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasajesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('masajes.index', [
            'citas' => auth()->user()->masajes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("masajes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'tipo' => 'required',
            'fecha_cita' => 'required',
            'observaciones' => 'required'
        ]);
        auth()->user()->masajes()->create($attributes);

        return redirect('/masajes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Masajes  $masajes
     * @return \Illuminate\Http\Response
     */
    public function show(Masajes $masajes)
    {
        return view('masajes.show', compact('masajes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Masajes  $masajes
     * @return \Illuminate\Http\Response
     */
    public function edit(Masajes $masajes)
    {
        return view('masajes.edit', compact('masajes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Masajes  $masajes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masajes $masajes)
    {
        $attributes = request()->validate([
            'tipo' => 'required',
            'fecha_cita' => 'required',
            'observaciones' => 'required'
        ]);

        $masajes->update($attributes);
        return redirect('/masajes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Masajes  $masajes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masajes $masajes)
    {
        $masajes->delete();
        return redirect('/masajes');
    }
}
