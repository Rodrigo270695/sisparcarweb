<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Rate;
use App\Models\Entry;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Entry::paginate(5);
        $rates = Rate::all();
        return view('admin.entries.index', compact('rates','entries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rate = Rate::pluck('vehicle_id','id');
        return view('admin.entries.create',compact("rate"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Entry::create($request->all());
        return redirect()->route('admin.entries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicles = Vehicle::all();
        $entry = Entry::find($id);

        return view('admin.entries.show',compact("entry","vehicles"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entry = Entry::find($id);
        $rate = Rate::find($entry->rate_id);
        $entry->fecha_salida = Carbon::now();
        /* $horas = $entry->fecha_ingreso->diffInHours($entry->fecha_salida);
        $monto = $horas * $rate->precio_hora; */

        return view('admin.entries.edit',compact("entry"));
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
        $entry=Entry::find($id);
        $entry->fecha_salida = Carbon::now();
        $entry -> update($request->all());
        return redirect()->route('admin.entries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = Entry::find($id);
        $entry->delete();

        return redirect()->route('admin.entries.index')->with('eliminar','ok');
    }
}
