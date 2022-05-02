<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;

class ShipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ships = Ship::all();
        //dd($ships);

        foreach ($ships as $ship){
            $date = $ship->getAttributes();
            //dd($date);
        }
        return view('ships.index', ['ships' => $ships]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ships.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $ship = new Ship;
//        $ship->name = $request->input('name');
//        $ship->faction = $request->input('faction');
//        $ship->laid_down = $request->input('laid_down');
//        $ship->greeting = $request->input('greeting');
//        $ship->save();

        $ship = Ship::create([
            'name' => $request->input('name'),
            'faction' => $request->input('faction'),
            'laid_down' => $request->input('laid_down'),
            'greeting' => $request->input('greeting')
        ]);

        return redirect('/ships');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ship =  Ship::where('id', $id)->first();

        return view('ships.show')->with('ship', $ship);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $ship =  Ship::where('id', $id)->first();
        // dd($ship);
        return view('ships.edit')->with('ship', $ship);
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
        $ship = Ship::where('id', $id)->update([
            'name' => $request->input('name'),
            'faction' => $request->input('faction'),
            'laid_down' => $request->input('laid_down'),
            'greeting' => $request->input('greeting')
        ]);

        return redirect('/ships');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ship =  Ship::where('id', $id)->first();
        $ship->delete();

        return redirect('/ships');
    }
}
