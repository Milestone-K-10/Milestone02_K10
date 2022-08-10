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
        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
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
        </tr>
        @endforeach

    </tbody>
</table>
@endsection

@section('script')
<script>
    function filterFunction() {
        var input, filter, ul, li, a, i, p;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        p = div.getElementsByTagName("p");
        for (i = 0; i < p.length; i++) {
            txtValue = p[i].textContent || p[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                p[i].style.display = "";
            } else {
                p[i].style.display = "none";
            }
        }
    }
</script>
@endsection