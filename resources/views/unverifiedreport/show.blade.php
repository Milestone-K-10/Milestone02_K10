@extends('adminlte.master')

@section('content')
    <div class="card">
        <h2 class="card-title" style="text-align: center; padding:1em">
            Report ke {{$report->id}}
        </h2>
        <p>Bukti : </p>
        <img class="card-img-top" src="{{$report->bukti}}" width="50%">
        <div class="card-body">

            <p>Nama : {{$report->nama}}</p>
            <p> Nomor Rekening : {{$report->rekening}}</p>
            <p>Platform : {{$report->platform}}</p>
            <div style="display: flex">
                <a href="/unverified-reports" class="btn btn-sm btn-primary" style="margin-right: 0.5em">Back</a>
                <form action="/verifyreport/{{$report->id}}" method="POST">
                    @csrf
                    <input type="submit" value="Verify" class="btn btn-sm btn-warning" style="margin-left: 1em">
                </form>

            </div>
        </div>

    </div>

@endsection
