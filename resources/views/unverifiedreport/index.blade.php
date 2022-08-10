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
                    <form class="from-inline" action="/report/search">
                        <input type="text" width="50%" name="search">
                        <button class="btn btn-sm btn-primary">Search</button>
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
                <th>#</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr style="text-align: center">
                    <td> {{$loop->iteration}} </td>
                    <td> {{$report->nama}} </td>
                    <td>
                        <a href="/report/{{$report->id}}" class="btn btn-primary btn-sm">Show Details</a>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection