<?php

namespace App\Http\Controllers;

use App\Models\UserShip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserShipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ships = DB::table('user_ships')
            ->join('ships', 'ships.id', '=', 'user_ships.ship_id')
            ->get();

        return view('userships.index', ['ships' => $ships]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //TODO is this needed?
        return redirect('/userships');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ship = UserShip::create([
            'ship_id' => $request->input('id'),
            'level' => 0
        ]);

        return redirect('/userships');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $ship = DB::table('user_ships')
            ->where('user_ships.id', $id)
            ->join('ships', 'ships.id', '=', 'user_ships.ship_id')
            ->get()->first();
        dd($ship);
        //TODO properly
        return view('userships.show')->with('ship', $ship);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //TODO
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
        //TODO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //TODO
    }
}
