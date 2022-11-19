<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    
    public function index()
    {
        $cats=Branch::all();//select * from categories;
//        dd($cats);
        return view('backend.branch.index',compact('cats'));
    }

    
    public function create()
    {
        return view('Backend.branch.create');
    }

    
    public function store(Request $request)
    {
         //        dd($request->all());
         Branch::create ([
            //database column name => input field name
                'Brance_name'=>$request->Brance_name ,
                'Branch_phone'=>$request->Branch_phone,
                'Branch_address'=>$request->Brance_address,
                'Branch_status'=>$request->Branch_status,
         ]);
         return redirect()->route('branch.index');
    }
    public function deletebranch($branch_id){
        branch::find($branch_id)->delete();
        return redirect()->back()->with('message','branch deleted successfully.');
    }

}
