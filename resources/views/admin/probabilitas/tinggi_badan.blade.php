<tr>
    <td rowspan="2">1 (1-25 cm)</td>
    <td>Absence</td>
    <td>{{ $tbCat1['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceTbCat1,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($tbCat1['absence'] ?? 0) + ($tbCat1['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $tbCat1['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceTbCat1,2,'.','') }}</td>
</tr>


<tr>
    <td rowspan="2">2 (26-50 cm)</td>
    <td>Absence</td>
    <td>{{ $tbCat2['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceTbCat2,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($tbCat2['absence'] ?? 0) + ($tbCat2['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $tbCat2['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceTbCat2,2,'.','') }}</td>
</tr>


<tr>
    <td rowspan="2">3 (51-75 cm)</td>
    <td>Absence</td>
    <td>{{ $tbCat3['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceTbCat3,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($tbCat3['absence'] ?? 0) + ($tbCat3['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $tbCat3['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceTbCat3,2,'.','') }}</td>
</tr>

<tr>
    <td rowspan="2">4 (76-100 cm)</td>
    <td>Absence</td>
    <td>{{ $tbCat4['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceTbCat4,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($tbCat4['absence'] ?? 0) + ($tbCat4['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $tbCat4['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceTbCat4,2,'.','') }}</td>
</tr>

<tr>
    <td rowspan="2">5 (>100 cm)</td>
    <td>Absence</td>
    <td>{{ $tbCat5['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceTbCat5,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($tbCat5['absence'] ?? 0) + ($tbCat5['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $tbCat5['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceTbCat5,2,'.','') }}</td>
</tr>