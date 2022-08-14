@extends('adminlte.master')

@section('content')
    <link rel="stylesheet" href="community.css">
    <p>Nama : {{$report->nama}}</p> 
    <p> Nomor Rekening : {{$report->rekening}}</p>
    <p>Platform : {{$report->platform}}</p> 
<<<<<<< HEAD
    <p>Bukti : </p>
    <p class="bukti" style="text-align: center"><img src="{{$report->bukti}}" alt="" width="50%"></p>
=======
    
>>>>>>> 22be9151cf02288dab2efbc5dad07886a97a099e
    <div style="display: flex">
        <a href="/unverified-reports" class="btn btn-sm btn-primary">Back</a>
        <form action="/verifyreport/{{$report->id}}" method="POST">
            @csrf
            <input type="submit" value="Verify" class="btn btn-sm btn-warning ml-2">
        </form>
    </div>
@endsection