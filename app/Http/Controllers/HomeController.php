<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function __construct(User $user){
        $this->user = $user;
    }
    public function index(){
        return view('index');
    }

    public function insert(Request $request){
        try{
            $this->user->create($request->all());
            return back()->with('success','Data added successfully');
        }catch(\Exception $e){
            return back()->with('error','Data not added');
        }
    }
}
