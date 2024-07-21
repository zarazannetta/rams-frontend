<h3 style="text-align: center;"><strong>Data Leger</strong></h3>
<table border="1" style="width: 100%;">
    <tr>
        <td>Nomor Kartu Leger Jalan</td>
        <td id="kode_leger_view" style="text-align: right;">{{ $data['kode_leger'] }}</td>
    </tr>
    <tr>
        <td>Nomor Kode dan Nama</td>
        <td id="kode_administratif_view" style="text-align: right;">{{ $data['kode_administratif'] }}</td>
    </tr>
    <tr>
        <td>Nomor Ruas Jalan / Seksi</td>
        <td id="nomor_ruas_view" style="text-align: right;">{{ $data['nomor_ruas'] }}</td>
    </tr>
    <tr>
        <td>Titik Awal Segmen Jalan</td>
        <td id="segmen_awal_view" style="text-align: right;">{{ $data['segmen_awal'] }}</td>
    </tr>
    <tr>
        <td>Titik Akhir Segmen Jalan</td>
        <td id="segmen_akhir_view" style="text-align: right;">{{ $data['segmen_akhir'] }}</td>
    </tr>
</table>