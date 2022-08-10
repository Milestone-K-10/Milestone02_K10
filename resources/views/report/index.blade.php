@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
            <tr style="text-align: center">
                <th>
                    <select name="filter">
                        <option value="filter">Filter</option>
                        <option value="#"></option>
                    </select>
                </th>
                <th>
                    <form class="from-inline" action="/search">
                        <input type="text" width="50%" name="search">
                        <button class="btn btn-sm btn-primary" type="submit">Search</button>
                    </form>
                </th>
                <th>
                    <button class="btn btn-primary btn-sm">
                        Advanced
                    </button>
                </th>
            </tr>
        </thead>
        
        <thead>
            <tr style="text-align: center">
                <th>Nama</th>
                <th>Nomor Rekening</th>
                <th>Platform</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr style="text-align: center">
                    <td> {{$report->nama}} </td>
                    <td> {{$report->rekening}} </td>
                    <td> {{$report->platform}} </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection