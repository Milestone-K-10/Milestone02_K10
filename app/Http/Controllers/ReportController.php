<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{
    //Fungsi Get Link
    function getMyUrl()
    {
        $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
        $server = $_SERVER['SERVER_NAME'];
        $port = $_SERVER['SERVER_PORT'] ? ':' . $_SERVER['SERVER_PORT'] : '';
        return $protocol . $server . $port;
    }

    // Deklarasi Variabel Link
    public function link()
    {
        $linkurl = $this->getMyUrl();
        session()->put('linkurl', $linkurl);
    }


    public function __construct(){
        $this->middleware('auth')->only('create');
    }

    public function index(){
        $reports = Report::where('report_verified','verified') ->get();
        return view('report.index', compact('reports'));
    }

    public function create(){
        return view('report.create');
    }

    public function store(Request $request){

        $request->validate([
            'nama' => 'required',
            'rekening' => 'required|unique:reports',
            'platform' => 'required',
            'bukti' => 'required'
        ]);

        $uploadedImage = $request->file('bukti');
        $imageName = time(). "." . $uploadedImage->getClientOriginalExtension();
        $imageFolder = public_path('/foto/');
        $uploadedImage->move($imageFolder, $imageName);
        Report::create([
            'nama' => $request['nama'],
            'rekening' => $request['rekening'],
            'platform' => $request['platform'],
            'bukti' => '/foto/' . $imageName,
        ]);

        return redirect('/');
    }


    public function search(Request $request){

        $reports = Report::where([
            ['report_verified','verified'],
            ['nama','LIKE','%'.$request->search.'%']
        ])->orWhere([
            ['report_verified','verified'],
            ['rekening','LIKE','%'.$request->search.'%']
        ])->orWhere([
            ['report_verified','verified'],
            ['platform','LIKE','%'.$request->search.'%']
        ])->get();
        return view('report.index',compact('reports'));
    }

    public function searchApi(Request $request){
        $reports = Report::where([
            ['report_verified','verified'],
            ['nama','LIKE','%'.$request->search.'%']
        ])->orWhere([
            ['report_verified','verified'],
            ['rekening','LIKE','%'.$request->search.'%']
        ])->orWhere([
            ['report_verified','verified'],
            ['platform','LIKE','%'.$request->search.'%']
        ])->get();

        return view('report.partial',compact('reports'));
    }


}
