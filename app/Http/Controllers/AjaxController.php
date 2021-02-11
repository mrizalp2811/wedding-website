<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function AjaxRequest( Request $request )
    {
        $confirmation = $request->get('confirmation');
        print_r($confirmation);

        if ( $confirmation == 'yes')
        {
            echo("asu");
        }
        else {
            echo("goblok");
        }
    }
}
