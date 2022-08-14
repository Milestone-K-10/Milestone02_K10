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