<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class AdminController extends Controller
{
    public function verification($id){
        Report::where('id',$id)->update([
            'report_verified' => 'verified'
        ]);
        return redirect('/');
    }

    public function unverifiedReports(){
        $reports = Report::whereNull('report_verified')->get();
        return view('unverifiedreport.index',compact('reports'));
    }

    public function unverify($id){
        Report::where('id',$id)->update([
            'report_verified' => null
        ]);
        return redirect('/');
    }
}
