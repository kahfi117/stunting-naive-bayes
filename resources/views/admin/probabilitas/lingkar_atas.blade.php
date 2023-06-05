<tr>
    <td rowspan="2">1 (1-15 cm)</td>
    <td>Absence</td>
    <td>{{ $llaCat1['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceLlaCat1,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($llaCat1['absence'] ?? 0) + ($llaCat1['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $llaCat1['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceLlaCat1,2,'.','') }}</td>
</tr>

<tr>
    <td rowspan="2">2 (>16 cm)</td>
    <td>Absence</td>
    <td>{{ $llaCat2['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceLlaCat2,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($llaCat2['absence'] ?? 0) + ($llaCat2['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $llaCat2['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceLlaCat2,2,'.','') }}</td>
</tr>