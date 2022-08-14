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
                <input type="text" width="50%" name="search" id="myInput" placeholder="Search" onkeyup="handleChange()">
            </th>
            <th colspan="2">
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
            @if (Auth::user()->role == "admin")
                <th>Action</th>
            @endif
        </tr>
    </thead>
    <tbody id="result">
        @foreach ($reports as $report)
        <tr style="text-align: center">
            <td>
                <p> {{$report->nama}} </p>
            </td>
            <td>
                <p> {{$report->rekening}} </p>
            </td>
            <td>
                <p> {{$report->platform}} </p>
            </td>
            @if (Auth::user()->role == "admin")
                <td>
                    <form action="/unverify-report/{{$report->id}}" method="POST">
                        @csrf
                        <input type="submit" value="Unverify" class="btn btn-sm btn-danger">    
                    </form>
                </td>
            @endif
            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('script')
<script>
function handleChange() {
        input = document.getElementById("myInput");
        fetch(`/api/search?search=${input.value}`).then(data => {
            return data.text()
        }).then(data => {
            document.getElementById("result").innerHTML = data;
        })
    }
</script>
@endsection