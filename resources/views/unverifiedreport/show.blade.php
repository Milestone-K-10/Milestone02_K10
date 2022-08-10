@extends('adminlte.master')

@section('content')
    <p>Nama : {{$report->nama}}</p> 
    <p> Nomor Rekening : {{$report->rekening}}</p>
    <p>Platform : {{$report->platform}}</p> 
    
    <a href="/"></a>
@endsection