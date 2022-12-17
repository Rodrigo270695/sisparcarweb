<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class RatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates = Rate::paginate(5);
        $vehicles = Vehicle::all();
        return view('admin.rates.index', compact('rates','vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicle = Vehicle::pluck('descripcion','id');
        return view('admin.rates.create',compact("vehicle"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rate::create($request->all());
        return redirect()->route('admin.rates.index');
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
        $rate = Rate::find($id);

        return view('admin.rates.show',compact("rate","vehicles"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::pluck('descripcion','id');
        $rate = Rate::find($id);

        return view('admin.rates.edit',compact("rate", "vehicle"));
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
        $rate=Rate::find($id);
        $rate -> update($request->all());
        return redirect()->route('admin.rates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rate = Rate::find($id);
        $rate->delete();

        return redirect()->route('admin.rates.index')->with('eliminar','ok');
    }
}
