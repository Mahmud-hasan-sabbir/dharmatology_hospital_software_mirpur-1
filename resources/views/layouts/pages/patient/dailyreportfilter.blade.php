@foreach($dailyreport as $report)
<tr>
    <td>{{ $report->consultent }}</td>
    <td>{{ $report->gender }}</td>
    <td>{{ $report->totalpatient }}</td>
    <td>{{ $report->totalfees }}</td>
</tr>
@endforeach