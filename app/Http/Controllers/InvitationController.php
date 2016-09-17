<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InvitationController extends Controller
{
     public function store(Request $request){
         //dd($request->all());
         
         $this->validate($request, [
             //'email.*' => 'required|email',
             'name' => 'required'
         ],['email.*' => 'this is not correct email address']);
         
         return 'All Items are correct';
     }
}
