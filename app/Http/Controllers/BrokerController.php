<?php

namespace App\Http\Controllers;

use App\Broker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrokerController extends Controller
{
    public function get(){
       var_dump($tables = DB::select('SHOW TABLES'));
    }

    public function add()
    {
        return view('broker/add');
    }

    public function store(Request $request, Broker $broker)
    {
        $broker->id = 1;
        $broker->save($request->toArray());
    }
}
