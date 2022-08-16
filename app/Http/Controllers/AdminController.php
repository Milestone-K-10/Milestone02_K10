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

    public function show($id){
        $report = Report::where('id',$id)->first();
        return view('unverifiedreport.show',compact('report'));
    }

    public function searchApi(Request $request){
        $reports = Report::where([
            ['report_verified',null],
            ['nama','LIKE','%'.$request->search.'%']
        ])->orWhere([
            ['report_verified',null],
            ['rekening','LIKE','%'.$request->search.'%']
        ])->orWhere([
            ['report_verified',null],
            ['platform','LIKE','%'.$request->search.'%']
        ])->get();

        return view('report.partial',compact('reports'));
    }


}
