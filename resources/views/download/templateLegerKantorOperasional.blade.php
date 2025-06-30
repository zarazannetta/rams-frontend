<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kartu Bangunan Pendukung (Kantor Operasional)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            margin: 5px 0;
            border: 0.1px solid black;
        }

        th,
        td {
            border: 0.1px solid black;
            padding-top: 1px;
            padding-bottom: 1px;
            padding-left: 5px;
            padding-right: 5px;
        }

        td {
            font-size: 3.5px;
        }

        th {
            font-size: 4px;
            text-align: center;
            background-color: #f2f2f2;
        }

        h1,
        h2 {
            text-align: center;
        }

        .header-table {
            width: 100%;
            border: 0.1px solid black;
        }

        .section-title {
            text-align: left;
            font-weight: bold;
            padding: 0px;
            font-size: 5px;
            margin: 0px;
        }

        .header-table td {
            border: none;
            text-align: left;
            margin-left: 1px;
        }

        .title-left {
            float: left;
            width: 30%;
        }

        .title-center {
            float: left;
            width: 40%;
        }

        .title-right {
            float: right;
            width: 30%;
        }

        .title-left h2 {
            text-align: left;
            font-size: 10px;
        }

        .title-center h2 {
            font-size: 12px;
        }

        .title-right h2 {
            text-align: right;
            font-size: 6px;
        }

        .section-left {
            float: left;
            width: 33%;
        }

        .section-center {
            float: left;
            width: 33%;
            
        }
        .section-right {
            float: right;
            width: 33%;
        }
        .section-container {
            display: flex;
            justify-content: space-between;
        }
        .section-left-2{
            float: left;
            width: 49.8%;
        }
        .section-right-2{
            float: right;
            width: 49.8%;
        }
    </style>
</head>

<body>
    <div class="title">
        <div class="title-left">
            <h2>
                KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT<br />DIREKTORAT
                JENDERAL BINA MARGA
            </h2>
        </div>
        <div class="title-center">
            <h2>KARTU BANGUNAN PENDUKUNG<br />(KANTOR OPERASIONAL)</h2>
        </div>
        <div class="title-right">
            <h2>DEPAN</h2>
            <h2>LEMBAR DISTRIBUSI KE ----</h2>
            <h2>
                NOMOR LEMBAR KARTU BANGUNAN PENDUKUNG (KANTOR OPERASIONAL) --- -- --- -
            </h2>
        </div>
    </div>

    <div style="clear: both;"></div>
    <h2 class="section-title">IDENTIFIKASI</h2>
    <table class="header-table">
        <tr>
            <td>NOMOR KODE / NAMA</td>
            <td>:</td>
            <td>
                @if (isset($data['administratif'][0]['kode_prov']))
                    {{ $data['administratif'][0]['kode_prov'] }}
                @else
                    ---
                @endif
            </td>
            <td>PROVINSI</td>
            <td>:</td>
            <td>
                @if (isset($data['administratif'][0]['nama_prov']))
                    {{ $data['administratif'][0]['nama_prov'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['administratif'][0]['kode_kab']))
                    {{ $data['administratif'][0]['kode_kab'] }}
                @else
                    ---
                @endif
            </td>
            <td>KABUPATEN/KOTA</td>
            <td>:</td>
            <td>
                @if (isset($data['administratif'][0]['nama_kab']))
                    {{ $data['administratif'][0]['nama_kab'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['administratif'][0]['kode_kec']))
                    {{ $data['administratif'][0]['kode_kec'] }}
                @else
                    ---
                @endif
            </td>
            <td>KECAMATAN</td>
            <td>:</td>
            <td>
                @if (isset($data['administratif'][0]['nama_kec']))
                    {{ $data['administratif'][0]['nama_kec'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['administratif'][0]['kode_desa']))
                    {{ $data['administratif'][0]['kode_desa'] }}
                @else
                    ---
                @endif
            </td>
            <td>DESA/KELURAHAN</td>
            <td>:</td>
            <td>
                @if (isset($data['administratif'][0]['nama_desa']))
                    {{ $data['administratif'][0]['nama_desa'] }}
                @else
                    ---
                @endif
            </td>

        </tr>
        <tr>
            <td>NOMOR RUAS / NAMA RUAS</td>
            <td>:</td>
            <td>
                @if (isset($data['data_gerbang_identifikasi']['nomor_ruas']))
                    {{ $data['data_gerbang_identifikasi']['nomor_ruas'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
        <tr>
            <td>NOMOR SEKSI / NAMA SEKSI</td>
            <td>:</td>
            <td>
                @if (isset($data['data_gerbang_identifikasi']['nomor_seksi']))
                    {{ $data['data_gerbang_identifikasi']['nomor_seksi'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
        <tr>
            <td>KANTOR GERBANG TOL</td>
            <td>:</td>
            <td>
                @if (isset($data['data_kantor_identifikasi']['nama_kawasan_kantor']))
                    {{ $data['data_kantor_identifikasi']['nama_kawasan_kantor'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
        <tr>
            <td>LOKASI / KOTA</td>
            <td>:</td>
            <td>
                @if (isset($data['data_kantor_identifikasi']['lokasi']))
                    {{ $data['data_kantor_identifikasi']['lokasi'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
        <tr>
            <td>TITIK IKAT LEGER JALAN</td>
            <td>:</td>
            <td>LJ</td>
            <td>---</td>
            <td>X</td>
            <td>:</td>
            <td>
                @if (isset($data['data_kantor_identifikasi']['titik_ikat_leger_x']))
                    {{ $data['data_kantor_identifikasi']['titik_ikat_leger_x'] }}
                @else
                    -
                @endif
            </td>
            <td>Y</td>
            <td>:</td>
            <td>
                @if (isset($data['data_kantor_identifikasi']['titik_ikat_leger_y']))
                    {{ $data['data_kantor_identifikasi']['titik_ikat_leger_y'] }}
                @else
                    -
                @endif
            </td>
            <td>Z</td>
            <td>:</td>
            <td>
                @if (isset($data['data_kantor_identifikasi']['titik_ikat_leger_z']))
                    {{ $data['data_kantor_identifikasi']['titik_ikat_leger_z'] }}
                @else
                    -
                @endif
            </td>
            <td>DESKRIPSI</td>
            <td>:</td>
            <td>
                @if (isset($data['data_kantor_identifikasi']['titik_ikat_leger_deskripsi']))
                    {{ $data['data_kantor_identifikasi']['titik_ikat_leger_deskripsi'] }}
                @else
                    -
                @endif
            </td>
        </tr>
        <tr>
            <td>TANGGAL SELESAI DIBANGUN</td>
            <td>:</td>
            <td>
                @if (isset($data['data_kantor_identifikasi']['tanggal_selesai_bangun']))
                    {{ $data['data_kantor_identifikasi']['tanggal_selesai_bangun'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
        <tr>
            <td>TANGGAL DIBUKA UNTUK OPERASI</td>
            <td>:</td>
            <td>
                @if (isset($data['data_kantor_identifikasi']['tanggal_dibuka']))
                    {{ $data['data_kantor_identifikasi']['tanggal_dibuka'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
        <tr>
            <td>TANGGAL DITUTUP UNTUK OPERASI</td>
            <td>:</td>
            <td>
                @if (isset($data['data_kantor_identifikasi']['tanggal_ditutup']))
                    {{ $data['data_kantor_identifikasi']['tanggal_ditutup'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
    </table>
    
    <h2 class="section-title">LUAS LAHAN</h2>
    <table class="header-table">
        <tr>
            <th colspan="5">ASAL / TAHUN:
                @if (isset($data['data_kantor_luas_lahan']['tahun']))
                    {{ $data['data_kantor_luas_lahan']['tahun'] }}
                @else
                    -
                @endif
            </th>
            <th colspan="5">PEMUTAKHIRAN I / TAHUN:</th>
        </tr>
        <tr>
            <th>URAIAN</th>
            <th>LUAS (M<sup>2</sup>)</th>
            <th>DATA PEROLEHAN</th>
            <th>NILAI PEROLEHAN (Rp.0)</th>
            <th>BUKTI PEROLEHAN</th>
            <th>URAIAN</th>
            <th>LUAS (M<sup>2</sup>)</th>
            <th>DATA PEROLEHAN</th>
            <th>NILAI PEROLEHAN (Rp.0)</th>
            <th>BUKTI PEROLEHAN</th>
        </tr>
        <tr>
            <td>BANGUNAN</td>
            <td>
                @if (isset($data['data_kantor_luas_lahan']['luas']))
                    {{ $data['data_kantor_luas_lahan']['luas'] }}
                @else
                    ---
                @endif
            </td>
            <td>HASIL LAPANGAN</td>
            <td>
                @if (isset($data['data_kantor_luas_lahan']['nilai_perolehan']))
                    {{ $data['data_kantor_luas_lahan']['nilai_perolehan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_kantor_luas_lahan']['bukti_perolehan']))
                    {{ $data['data_kantor_luas_lahan']['bukti_perolehan'] }}
                @else
                    ---
                @endif
            </td>
            <td>BANGUNAN</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>TANAH</td>
            <td>
                @if (isset($data['data_kantor_luas_lahan']['luas']))
                    {{ $data['data_kantor_luas_lahan']['luas'] }}
                @else
                    ---
                @endif
            </td>
            <td>HASIL LAPANGAN</td>
            <td>
                @if (isset($data['data_kantor_luas_lahan']['nilai_perolehan']))
                    {{ $data['data_kantor_luas_lahan']['nilai_perolehan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_kantor_luas_lahan']['bukti_perolehan']))
                    {{ $data['data_kantor_luas_lahan']['bukti_perolehan'] }}
                @else
                    ---
                @endif
            </td>
            <td>TANAH</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
    </table>
    
    <div style="clear: both;"></div>
    
        <div class="section-container">
        <section class="section-left">
            <h2 class="section-title">DATA TEKNIK-1</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="2">URAIAN</th>
                    <th colspan="2">ASAL / TAHUN:
                    <th colspan="3">ASAL / TAHUN:
                        @if (isset($data['data_kantor_teknik1']['tahun']))
                            {{ $data['data_kantor_teknik1']['tahun'] }}
                        @else
                            -
                        @endif
                    </th>
                    <th colspan="2">PEMUTAKHIRAN / TAHUN:</th>
                </tr>
                <tr>
                    <th>JUMLAH</th>
                    <th>LUAS (M<sup>2</sup>)</th>
                    <th>JUMLAH</th>
                    <th>LUAS (M<sup>2</sup>)</th>

                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">1. RUANG KEPALA KANTOR</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_kepala_kantor"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["ruang_kepala_kantor"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_kepala_kantor"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["ruang_kepala_kantor"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>   
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">2. RUANG STAFF</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_staff"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["ruang_staff"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_staff"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["ruang_staff"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>   
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">3. RUANG RAPAT</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_rapat"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["ruang_rapat"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_rapat"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["ruang_rapat"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">4. RUANG TAMU/LOBBY</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_tamu_lobby"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["ruang_tamu_lobby"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_tamu_lobby"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["ruang_tamu_lobby"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">5. RUANG SERVER</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_server"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["ruang_server"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_server"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["ruang_server"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>

                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">6. MUSHOLA</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["mushola"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["mushola"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["mushola"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["mushola"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">7. DAPUR/PANTRY</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["dapur_pantry"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["dapur_pantry"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["dapur_pantry"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["dapur_pantry"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">8. TOILET</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["toilet"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["toilet"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["toilet"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["toilet"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">9. PENGOLAHAN LIMBAH</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["pengolahan_limbah"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["pengolahan_limbah"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["pengolahan_limbah"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["pengolahan_limbah"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">10. RUANG GENSET</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_genset"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["ruang_genset"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["ruang_genset"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["ruang_genset"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">11. GUDANG</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["gudang"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["gudang"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["gudang"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["gudang"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">12. POS KEAMANAN</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["pos_keamanan"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["pos_keamanan"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["pos_keamanan"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["pos_keamanan"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">13. AREA PARKIR</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["area_parkir"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["area_parkir"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["area_parkir"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["area_parkir"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">14. MENARA AIR</td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["menara_air"]['jumlah']))
                            {{ $data['data_kantor_teknik1']["menara_air"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_kantor_teknik1']["menara_air"]['luas_lahan']))
                            {{ $data['data_kantor_teknik1']["menara_air"]['luas_lahan'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </table>    
        </section>

        <section class="section-center">
            <h2 class="section-title">DATA TEKNIK-2</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="2">URAIAN</th>
                    <th colspan="1">ASAL / TAHUN:
                        @if (isset($data['data_kantor_teknik2']['tahun']))
                            {{ $data['data_kantor_teknik2']['tahun'] }}
                        @else
                            -
                        @endif
                    </th>
                    <th colspan="1">PEMUTAKHIRAN / TAHUN:</th>
                </tr>
                <tr>
                    <th>JUMLAH</th>
                    <th>JUMLAH</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">1. PAGAR OPERASIONAL KANTOR</td>
                    <td>
                        @if (isset($data['data_kantor_teknik2']["pagar_operasional_kantor"]['jumlah']))
                            {{ $data['data_kantor_teknik2']["pagar_operasional_kantor"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td> 
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">2. RAMBU LALU LINTAS</td>
                    <td>
                        @if (isset($data['data_kantor_teknik2']["rambu_lalu_lintas"]['jumlah']))
                            {{ $data['data_kantor_teknik2']["rambu_lalu_lintas"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
  
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">3. LAMPU LALU LINTAS</td>
                    <td>
                        @if (isset($data['data_kantor_teknik2']["lampu_lalu_lintas"]['jumlah']))
                            {{ $data['data_kantor_teknik2']["lampu_lalu_lintas"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">4. LAMPU PENERANGAN</td>
                    <td>
                        @if (isset($data['data_kantor_teknik2']["lampu_penerangan"]['jumlah']))
                            {{ $data['data_kantor_teknik2']["lampu_penerangan"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">5. KAMERA PENGAWAS</td>
                    <td>
                        @if (isset($data['data_kantor_teknik2']["kamera_pengawas"]['jumlah']))
                            {{ $data['data_kantor_teknik2']["kamera_pengawas"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">6.APAR</td>
                    <td>
                        @if (isset($data['data_kantor_teknik2']["apar"]['jumlah']))
                            {{ $data['data_kantor_teknik2']["apar"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">7. GROUND WATER TANK</td>
                    <td>
                        @if (isset($data['data_kantor_teknik2']["ground_water_tank"]['jumlah']))
                            {{ $data['data_kantor_teknik2']["ground_water_tank"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">8. MENARA AIR</td>
                    <td>
                        @if (isset($data['data_kantor_teknik2']["menara_air"]['jumlah']))
                            {{ $data['data_kantor_teknik2']["menara_air"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">9. LAYANAN MOBIL DEREK</td>
                    <td>
                        @if (isset($data['data_kantor_teknik2']["layanan_mobil_derek"]['jumlah']))
                            {{ $data['data_kantor_teknik2']["layanan_mobil_derek"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
            </table>
        </section>
        <section class="section-right">
            <h2 class="section-title">CATATAN TAMBAHAN</h2>
            <table class="header-table">
                <colgroup>
                    <col style="width: 50%;">
                    <col style="width: 50%;">
                </colgroup>
                <tr>
                    <th colspan="1">ASAL / TAHUN :</th>
                    <th colspan="1">PEMUTAKHIRAN / TAHUN :</th>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr> 
                <tr style="height:80px;">
                </tr>               
            </table>
        </section>
    </div>

    <div style="clear: both;"></div>
    <div class="section-container">
        <section class="section-left-2">
            <h2 class="section-title">GAMBAR SITUASI KANTOR GERBANG TOL</h2>
            <table class="header-table">
                <td colspan="5" style="height:200px;"></td>
            </table> 
        </section>
        <section class="section-right-2">
            <h2 class="section-title">ORTHOPHOTO</h2>
            <table class="header-table">
                <td colspan="5" style="height:200px;"></td>
            </table> 
        </section>
    </div>

    <div style="clear: both;"></div>
    <h2 class="section-title">LEGALISASI</h2>
    <table class="header-table">
        <tr>
            <th rowspan="2">KEGIATAN</th>
            <th colspan="3">ASAL / TAHUN:
                ---
            </th>
            <th colspan="3">PEMUTAKHIRAN I / TAHUN:</th>
        </tr>
        <tr>
            <th>TGL.BLN.THN</th>
            <th>OLEH</th>
            <th>PARAF</th>
            <th>TGL.BLN.THN</th>
            <th>OLEH</th>
            <th>PARAF</th>
        </tr>
        <tr>
            <td>PENGUKURAN</td>
        </tr>
        <tr>
            <td>PENGGAMBARAN</td>
        </tr>
        <tr>
            <td>PENCATATAN</td>
        </tr>
        <tr>
            <th colspan="1">PEMERIKSAAN OLEH BUJT</th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"></th>
            <th colspan="1"></th>
        </tr>
        <tr>
            <td>PERSETUJUAN</td>
        </tr>
        <tr>
            <td>DI</td>
        </tr>
        <tr>
            <td>TGL.BLN.THN</td>
        </tr>
        <tr>
            <td>OLEH</td>
        </tr>
    </table>
</body>

</html>
