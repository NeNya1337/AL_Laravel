<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
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


    public function level(Request $request)
    {
        $user = User::where('id', 1)->update([
            'experience' => $request->input('experience')
        ]);

        return redirect('/user');
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
