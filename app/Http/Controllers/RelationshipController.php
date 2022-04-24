<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Profile;

class RelationshipController extends Controller
{
    public function relation($id){

        $client = Client::find($id);

        return view('has_many.relationship')
        ->with('client', $client);

    }

}
