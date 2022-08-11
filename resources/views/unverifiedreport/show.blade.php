@extends('adminlte.master')

@section('content')
    <p>Nama : {{$report->nama}}</p> 
    <p> Nomor Rekening : {{$report->rekening}}</p>
    <p>Platform : {{$report->platform}}</p> 
    
    <div style="display: flex">
        <a href="/unverified-reports" class="btn btn-sm btn-primary">Back</a>
        <form action="/verifyreport/{{$report->id}}" method="POST">
            @csrf
            <input type="submit" value="Verify" class="btn btn-sm btn-warning ml-2">
        </form>
    </div>
@endsection