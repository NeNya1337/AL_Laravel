<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function starters()
    {
        $names = array('Ayanami', 'Z23', 'Laffey', 'Javelin');
        $ships = array();
        foreach($names as $name){
            $ships[] = Ship::where('name', $name)->first();
        }
        //dd($ships);
        return view('starters', ['ships' => $ships]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
