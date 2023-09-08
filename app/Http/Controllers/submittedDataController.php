<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MemberData;

class submittedDataController extends Controller
{
    public function homePage(){
        return view('members');
    }

    public function addMember(Request $request) {
        
        $new_mem = new MemberData;
        $new_mem->fname = $request->post('member_fname');
        $new_mem->lname = $request->post('member_lname');
        $new_mem->age = $request->post('member_age');
        $new_mem->save();

        return redirect('/');
    }
}
