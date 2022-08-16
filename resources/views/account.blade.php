@extends('adminlte.master')

@section('content')
    <h1 class='post'>Profile</h1>
        <div class="card">
            <div class="card-body">
                <p>Nama     : {{Auth::user()->name}}</p>
                <p>E-Mail    : {{Auth::user()->email}}</p>
            </div>
        </div>
@endsection
