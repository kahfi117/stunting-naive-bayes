<tr>
    <td rowspan="2">1 (1-5 kg)</td>
    <td>Absence</td>
    <td>{{ $bbCat1['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceBbCat1,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($bbCat1['absence'] ?? 0) + ($bbCat1['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $bbCat1['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceBbCat1,2,'.','') }}</td>
</tr>


<tr>
    <td rowspan="2">2 (6-10 kg)</td>
    <td>Absence</td>
    <td>{{ $bbCat2['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceBbCat2,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($bbCat2['absence'] ?? 0) + ($bbCat2['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $bbCat2['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceBbCat2,2,'.','') }}</td>
</tr>


<tr>
    <td rowspan="2">3 (11-15 kg)</td>
    <td>Absence</td>
    <td>{{ $bbCat3['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceBbCat3,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($bbCat3['absence'] ?? 0) + ($bbCat3['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $bbCat3['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceBbCat3,2,'.','') }}</td>
</tr>

<tr>
    <td rowspan="2">4 (16-20 kg)</td>
    <td>Absence</td>
    <td>{{ $bbCat4['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceBbCat4,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($bbCat4['absence'] ?? 0) + ($bbCat4['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $bbCat4['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceBbCat4,2,'.','') }}</td>
</tr>

<tr>
    <td rowspan="2">5 (>20 kg)</td>
    <td>Absence</td>
    <td>{{ $bbCat5['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceBbCat5,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($bbCat5['absence'] ?? 0) + ($bbCat5['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $bbCat5['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceBbCat5,2,'.','') }}</td>
</tr>