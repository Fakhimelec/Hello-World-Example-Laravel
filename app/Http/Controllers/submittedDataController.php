<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class submittedDataController extends Controller
{
    public function homePage(){
        
        return view('members');
    }

    public function addMember(Request $request) {
        
        echo $request->post('member_fname');
        echo $request->post('member_lname');
        echo $request->post('member_age');

        return view('members');
    }
}
