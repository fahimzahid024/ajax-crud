<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use Redirect;
use Response;
use DB;

class acontroller extends Controller
{
    public function index(){
        return view('test');
    }
    public function store(Request $request){
        $data = array();
        $data['name']= $request->name;
        $data['email']   = $request->email;
        $data['password']      = $request->password;
        $dataSave = DB::table('contacts')
                ->insert($data);
        Response::json($data);
    }
}
