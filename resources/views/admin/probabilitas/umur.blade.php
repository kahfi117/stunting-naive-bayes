<tr>
    <td rowspan="2">1 (0-24 bulan)</td>
    <td>Absence</td>
    <td>{{ $umurCat1['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceUmurCat1,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($umurCat1['absence'] ?? 0) + ($umurCat1['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $umurCat1['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceUmurCat1,2,'.','') }}</td>
</tr>
<tr>
    <td rowspan="2">2 (25-48 bulan)</td>
    <td>Absence</td>
    <td>{{ $umurCat2['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceUmurCat2,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($umurCat2['absence'] ?? 0) + ($umurCat2['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $umurCat2['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceUmurCat2,2,'.','') }}</td>
</tr>
<tr>
    <td rowspan="2">3 (> 49 bulan)</td>
    <td>Absence</td>
    <td>{{ $umurCat3['absence'] ?? 0 }}</td>
    <td>{{ number_format($peluangAbsenceUmurCat3,2,'.','') }}</td>
    <td rowspan="2" class="text-right">
        <b>
            {{ ($umurCat3['absence'] ?? 0) + ($umurCat3['presence'] ?? 0) }}
        </b>
    </td>
</tr>
<tr>
    <td>Presence</td>
    <td>{{ $umurCat3['presence'] ?? 0 }}</td>
    <td>{{ number_format($peluangPresenceUmurCat3,2,'.','') }}</td>
</tr>