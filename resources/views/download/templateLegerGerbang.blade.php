<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kartu Bangunan Pendukung (Gerbang Tol)</title>
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
            padding-bottom: 1x;
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
            width: 49.8%;
            min-height: 150px;
        }

        .section-right {
            float: right;
            width: 49.8%;
            min-height: 150px;
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
            <h2>KARTU BANGUNAN PENDUKUNG<br />(GERBANG TOL)</h2>
        </div>
        <div class="title-right">
            <h2>DEPAN</h2>
            <h2>LEMBAR DISTRIBUSI KE ----</h2>
            <h2>
                NOMOR LEMBAR KARTU BANGUNAN PENDUKUNG (GERBANG TOL) --- -- --- -
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
            <td>GERBANG TOL</td>
            <td>:</td>
            <td>
                @if (isset($data['data_gerbang_identifikasi']['nama_kawasan_kantor']))
                    {{ $data['data_gerbang_identifikasi']['nama_kawasan_kantor'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
        <tr>
            <td>LOKASI / KOTA</td>
            <td>:</td>
            <td>
                @if (isset($data['data_gerbang_identifikasi']['lokasi']))
                    {{ $data['data_gerbang_identifikasi']['lokasi'] }}
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
                @if (isset($data['data_gerbang_identifikasi']['titik_ikat_leger_x']))
                    {{ $data['data_gerbang_identifikasi']['titik_ikat_leger_x'] }}
                @else
                    -
                @endif
            </td>
            <td>Y</td>
            <td>:</td>
            <td>
                @if (isset($data['data_gerbang_identifikasi']['titik_ikat_leger_y']))
                    {{ $data['data_gerbang_identifikasi']['titik_ikat_leger_y'] }}
                @else
                    -
                @endif
            </td>
            <td>Z</td>
            <td>:</td>
            <td>
                @if (isset($data['data_gerbang_identifikasi']['titik_ikat_leger_z']))
                    {{ $data['data_gerbang_identifikasi']['titik_ikat_leger_z'] }}
                @else
                    -
                @endif
            </td>
            <td>DESKRIPSI</td>
            <td>:</td>
            <td>
                @if (isset($data['data_gerbang_identifikasi']['titik_ikat_leger_deskripsi']))
                    {{ $data['data_gerbang_identifikasi']['titik_ikat_leger_deskripsi'] }}
                @else
                    -
                @endif
            </td>
        </tr>
        <tr>
            <td>TANGGAL SELESAI DIBANGUN</td>
            <td>:</td>
            <td>
                @if (isset($data['data_gerbang_identifikasi']['tanggal_selesai_bangun']))
                    {{ $data['data_gerbang_identifikasi']['tanggal_selesai_bangun'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
        <tr>
            <td>TANGGAL DIBUKA UNTUK LALULINTAS</td>
            <td>:</td>
            <td>
                @if (isset($data['data_gerbang_identifikasi']['tanggal_dibuka']))
                    {{ $data['data_gerbang_identifikasi']['tanggal_dibuka'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
        <tr>
            <td>TANGGAL DITUTUP UNTUK LALULINTAS</td>
            <td>:</td>
            <td>
                @if (isset($data['data_gerbang_identifikasi']['tanggal_ditutup']))
                    {{ $data['data_gerbang_identifikasi']['tanggal_ditutup'] }}
                @else
                    ---
                @endif
            </td>
        </tr>
    </table>

    <h2 class="section-title">DATA GERBANG TOL</h2>
    <table class="header-table">
        <tr>
            <th rowspan="2">URAIAN</th>
            <th colspan="4">ASAL / TAHUN:
                @if (isset($data['data_gerbang_teknik1']['tahun']))
                    {{ $data['data_gerbang_teknik1']['tahun'] }}
                @else
                    -
                @endif
            </th>
            <th colspan="4">PEMUTAKHIRAN I / TAHUN:</th>
            <th rowspan="2">URAIAN</th>
            <th colspan="4">ASAL / TAHUN:
                @if (isset($data['data_gerbang_teknik1']['tahun']))
                    {{ $data['data_gerbang_teknik1']['tahun'] }}
                @else
                    -
                @endif
            </th>
            <th colspan="4">PEMUTAKHIRAN I / TAHUN:</th>
        </tr>
        <tr>
            <th>JUMLAH (BH) </th>
            <th>LUAS LAHAN (M<sup>2</sup>)</th>
            <th>LUAS BANGUNAN (M<sup>2</sup>)</th>
            <th>KONDISI</th>
            <th>JUMLAH (BH) </th>
            <th>LUAS LAHAN (M<sup>2</sup>)</th>
            <th>LUAS BANGUNAN (M<sup>2</sup>)</th>
            <th>KONDISI</th>
            <th>JUMLAH (BH) </th>
            <th>LUAS LAHAN (M<sup>2</sup>)</th>
            <th>LUAS BANGUNAN (M<sup>2</sup>)</th>
            <th>KONDISI</th>
            <th>JUMLAH (BH) </th>
            <th>LUAS LAHAN (M<sup>2</sup>)</th>
            <th>LUAS BANGUNAN (M<sup>2</sup>)</th>
            <th>KONDISI</th>
        </tr>
        <tr>
            <td>1. GARDU TOL PERMANEN (BH)</td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gardu_tol_permanen"]['jumlah']))
                    {{ $data['data_gerbang_teknik1']["gardu_tol_permanen"]['jumlah'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gardu_tol_permanen"]['luas_lahan']))
                    {{ $data['data_gerbang_teknik1']["gardu_tol_permanen"]['luas_lahan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gardu_tol_permanen"]['luas_bangunan']))
                    {{ $data['data_gerbang_teknik1']["gardu_tol_permanen"]['luas_bangunan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gardu_tol_permanen"]['kondisi']))
                    {{ $data['data_gerbang_teknik1']["gardu_tol_permanen"]['kondisi'] }}
                @else
                    ---
                @endif
            </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>9. </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>2. GTO / GARDU TOL OTOMATIS (BH)</td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gto_gardu_tol_otomatis"]['jumlah']))
                    {{ $data['data_gerbang_teknik1']["gto_gardu_tol_otomatis"]['jumlah'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gto_gardu_tol_otomatis"]['luas_lahan']))
                    {{ $data['data_gerbang_teknik1']["gto_gardu_tol_otomatis"]['luas_lahan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gto_gardu_tol_otomatis"]['luas_bangunan']))
                    {{ $data['data_gerbang_teknik1']["gto_gardu_tol_otomatis"]['luas_bangunan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gto_gardu_tol_otomatis"]['kondisi']))
                    {{ $data['data_gerbang_teknik1']["gto_gardu_tol_otomatis"]['kondisi'] }}
                @else
                    ---
                @endif
            </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>10. </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>3. GERBANG TOL THUNDEM (BH)</td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gerbang_tol_thundem"]['jumlah']))
                    {{ $data['data_gerbang_teknik1']["gerbang_tol_thundem"]['jumlah'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gerbang_tol_thundem"]['luas_lahan']))
                    {{ $data['data_gerbang_teknik1']["gerbang_tol_thundem"]['luas_lahan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gerbang_tol_thundem"]['luas_bangunan']))
                    {{ $data['data_gerbang_teknik1']["gerbang_tol_thundem"]['luas_bangunan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gerbang_tol_thundem"]['kondisi']))
                    {{ $data['data_gerbang_teknik1']["gerbang_tol_thundem"]['kondisi'] }}
                @else
                    ---
                @endif
            </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>4. GARDU TOL NON PERMANEN (BH)</td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gardu_tol_non_permanen"]['jumlah']))
                    {{ $data['data_gerbang_teknik1']["gardu_tol_non_permanen"]['jumlah'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gardu_tol_non_permanen"]['luas_lahan']))
                    {{ $data['data_gerbang_teknik1']["gardu_tol_non_permanen"]['luas_lahan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gardu_tol_non_permanen"]['luas_bangunan']))
                    {{ $data['data_gerbang_teknik1']["gardu_tol_non_permanen"]['luas_bangunan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["gardu_tol_non_permanen"]['kondisi']))
                    {{ $data['data_gerbang_teknik1']["gardu_tol_non_permanen"]['kondisi'] }}
                @else
                    ---
                @endif
            </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>5. TOLL BOOTH (BH/M<sup>2</sup>)</td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["toll_booth"]['jumlah']))
                    {{ $data['data_gerbang_teknik1']["toll_booth"]['jumlah'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["toll_booth"]['luas_lahan']))
                    {{ $data['data_gerbang_teknik1']["toll_booth"]['luas_lahan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["toll_booth"]['luas_bangunan']))
                    {{ $data['data_gerbang_teknik1']["toll_booth"]['luas_bangunan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["toll_booth"]['kondisi']))
                    {{ $data['data_gerbang_teknik1']["toll_booth"]['kondisi'] }}
                @else
                    ---
                @endif
            </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>6. KANTOR GERBANG (BH/M<sup>2</sup>)</td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["kantor_gerbang"]['jumlah']))
                    {{ $data['data_gerbang_teknik1']["kantor_gerbang"]['jumlah'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["kantor_gerbang"]['luas_lahan']))
                    {{ $data['data_gerbang_teknik1']["kantor_gerbang"]['luas_lahan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["kantor_gerbang"]['luas_bangunan']))
                    {{ $data['data_gerbang_teknik1']["kantor_gerbang"]['luas_bangunan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["kantor_gerbang"]['kondisi']))
                    {{ $data['data_gerbang_teknik1']["kantor_gerbang"]['kondisi'] }}
                @else
                    ---
                @endif
            </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>7. JALAN PEJALAN KAKI (BH/M<sup>2</sup>)</td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["jalan_pejalan_kaki"]['jumlah']))
                    {{ $data['data_gerbang_teknik1']["jalan_pejalan_kaki"]['jumlah'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["jalan_pejalan_kaki"]['luas_lahan']))
                    {{ $data['data_gerbang_teknik1']["jalan_pejalan_kaki"]['luas_lahan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["jalan_pejalan_kaki"]['luas_bangunan']))
                    {{ $data['data_gerbang_teknik1']["jalan_pejalan_kaki"]['luas_bangunan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["jalan_pejalan_kaki"]['kondisi']))
                    {{ $data['data_gerbang_teknik1']["jalan_pejalan_kaki"]['kondisi'] }}
                @else
                    ---
                @endif
            </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>8. TEROWONGAN PEJALAN KAKI (BH/M<sup>2</sup>)</td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["terowongan_pejalan_kaki"]['jumlah']))
                    {{ $data['data_gerbang_teknik1']["terowongan_pejalan_kaki"]['jumlah'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["terowongan_pejalan_kaki"]['luas_lahan']))
                    {{ $data['data_gerbang_teknik1']["terowongan_pejalan_kaki"]['luas_lahan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["terowongan_pejalan_kaki"]['luas_bangunan']))
                    {{ $data['data_gerbang_teknik1']["terowongan_pejalan_kaki"]['luas_bangunan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_teknik1']["terowongan_pejalan_kaki"]['kondisi']))
                    {{ $data['data_gerbang_teknik1']["terowongan_pejalan_kaki"]['kondisi'] }}
                @else
                    ---
                @endif
            </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
    </table>
    <h2 class="section-title">LUAS LAHAN</h2>
    <table class="header-table">
        <tr>
            <th colspan="4">ASAL / TAHUN:
                @if (isset($data['data_gerbang_teknik1']['tahun']))
                    {{ $data['data_gerbang_teknik1']['tahun'] }}
                @else
                    -
                @endif
            </th>
            <th colspan="4">PEMUTAKHIRAN I / TAHUN:</th>
        </tr>
        <tr>
            <th>LUAS (M<sup>2</sup>)</th>
            <th>DATA PEROLEHAN</th>
            <th>NILAI PEROLEHAN (Rp.0)</th>
            <th>BUKTI PEROLEHAN</th>
            <th>LUAS (M<sup>2</sup>)</th>
            <th>DATA PEROLEHAN</th>
            <th>NILAI PEROLEHAN (Rp.0)</th>
            <th>BUKTI PEROLEHAN</th>
        </tr>
        <tr>
            <td>
                @if (isset($data['data_gerbang_luas_lahan']['luas']))
                    {{ $data['data_gerbang_luas_lahan']['luas'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_luas_lahan']['data_perolehan']))
                    {{ $data['data_gerbang_luas_lahan']['data_perolehan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_luas_lahan']['nilai_perolehan']))
                    {{ $data['data_gerbang_luas_lahan']['nilai_perolehan'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_gerbang_luas_lahan']['bukti_perolehan']))
                    {{ $data['data_gerbang_luas_lahan']['bukti_perolehan'] }}
                @else
                    ---
                @endif
            </td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
    </table>

    <div class="section-container">
        <section class="section-left">
            <h2 class="section-title">DATA PERLENGKAPAN GERBANG TOL</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="2">URAIAN</th>
                    <th colspan="3">ASAL / TAHUN:
                        @if (isset($data['data_gerbang_teknik2']['tahun']))
                            {{ $data['data_gerbang_teknik2']['tahun'] }}
                        @else
                            -
                        @endif
                    </th>
                    <th colspan="3">PEMUTAKHIRAN / TAHUN:</th>
                </tr>
                <tr>
                    <th>JUMLAH (BH)</th>
                    <th>PANJANG (M)</th>
                    <th>KONDISI</th>
                    <th>JUMLAH (BH)</th>
                    <th>PANJANG (M)</th>
                    <th>KONDISI</th>

                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. RAMBU LALU LINTAS</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- RAMBU PERINGATAN</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_peringatan"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_peringatan"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_peringatan"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_peringatan"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_peringatan"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_peringatan"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>   
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- RAMBU LARANGAN</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_larangan"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_larangan"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_larangan"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_larangan"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_larangan"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_larangan"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>   
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- RAMBU PERINTAH</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_perintah"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_perintah"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_perintah"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_perintah"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_perintah"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_perintah"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- RAMBU PETUNJUK</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_petunjuk"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_petunjuk"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_petunjuk"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_petunjuk"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_petunjuk"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_petunjuk"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- RAMBU ELEKTRONIK</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_elektronik"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_elektronik"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_elektronik"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_elektronik"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_elektronik"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["rambu_lalu_lintas"]["rambu_elektronik"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">b. ALAT PEMBERI ISYARAT LALU LINTAS</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- LAMPU TIGA WARNA</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_tiga_warna"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_tiga_warna"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_tiga_warna"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_tiga_warna"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_tiga_warna"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_tiga_warna"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- LAMPU DUA WARNA</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_dua_warna"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_dua_warna"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_dua_warna"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_dua_warna"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_dua_warna"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_dua_warna"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- LAMPU SATU WARNA</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_satu_warna"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_satu_warna"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_satu_warna"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_satu_warna"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_satu_warna"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pemberi_isyarat_lalu_lintas"]["lampu_satu_warna"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">c. PENERANGAN JALAN</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- LAMPU PJU</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["penerangan_jalan"]["lampu_pju"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["penerangan_jalan"]["lampu_pju"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["penerangan_jalan"]["lampu_pju"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["penerangan_jalan"]["lampu_pju"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["penerangan_jalan"]["lampu_pju"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["penerangan_jalan"]["lampu_pju"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- HIGHMAST TOWER</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["penerangan_jalan"]["highmast_tower"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["penerangan_jalan"]["highmast_tower"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["penerangan_jalan"]["highmast_tower"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["penerangan_jalan"]["highmast_tower"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["penerangan_jalan"]["highmast_tower"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["penerangan_jalan"]["highmast_tower"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">d. ALAT PENGENDALI DAN PENGAMAN PENGGUNA JALAN</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PAGAR PENGAMAN KAKU</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_kaku"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_kaku"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_kaku"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_kaku"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_kaku"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_kaku"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PAGAR PENGAMAN SEMI KAKU</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_semi_kaku"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_semi_kaku"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_semi_kaku"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_semi_kaku"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_semi_kaku"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_pengaman_semi_kaku"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PAGAR FLEKSIBEL</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_fleksibel"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_fleksibel"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_fleksibel"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_fleksibel"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_fleksibel"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pagar_fleksibel"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- CRASH CUSHION</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["crash_cushion"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["crash_cushion"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["crash_cushion"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["crash_cushion"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["crash_cushion"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["crash_cushion"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- CERMIN TIKUNGAN</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["cermin_tikungan"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["cermin_tikungan"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["cermin_tikungan"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["cermin_tikungan"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["cermin_tikungan"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["cermin_tikungan"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- REFLEKTOR</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["reflektor"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["reflektor"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["reflektor"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["reflektor"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["reflektor"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["reflektor"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PITA PENGGADUH</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pita_penggaduh"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pita_penggaduh"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pita_penggaduh"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pita_penggaduh"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pita_penggaduh"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pita_penggaduh"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PEMBATAS KECEPATAN</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_kecepatan"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_kecepatan"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_kecepatan"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_kecepatan"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_kecepatan"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_kecepatan"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PEMBATAS TINGGI DAN LEBAR</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_tinggi_dan_lebar"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_tinggi_dan_lebar"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_tinggi_dan_lebar"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_tinggi_dan_lebar"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_tinggi_dan_lebar"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pengendali_dan_pengaman_pengguna_jalan"]["pembatas_tinggi_dan_lebar"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">f. ALAT PENGAWAS DAN PENGAMAN JALAN</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- KAMERA PENGAWAS</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengawas_dan_pengaman_jalan"]["kamera_pengawas"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["alat_pengawas_dan_pengaman_jalan"]["kamera_pengawas"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengawas_dan_pengaman_jalan"]["kamera_pengawas"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["alat_pengawas_dan_pengaman_jalan"]["kamera_pengawas"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["alat_pengawas_dan_pengaman_jalan"]["kamera_pengawas"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["alat_pengawas_dan_pengaman_jalan"]["kamera_pengawas"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">G. PAGAR OPERASIONAL</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["pagar_operasional"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["pagar_operasional"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["pagar_operasional"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["pagar_operasional"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["pagar_operasional"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["pagar_operasional"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">h. PAPAN INFORMASI TARIF TOL</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["papan_informasi_tarif_tol"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["papan_informasi_tarif_tol"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["papan_informasi_tarif_tol"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["papan_informasi_tarif_tol"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["papan_informasi_tarif_tol"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["papan_informasi_tarif_tol"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">i. PATOK KILOMETER</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["patok_kilometer"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["patok_kilometer"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["patok_kilometer"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["patok_kilometer"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["patok_kilometer"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["patok_kilometer"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">j. LOOP COIL</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["loop_coil"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["loop_coil"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["loop_coil"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["loop_coil"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["loop_coil"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["loop_coil"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">k. PALANG PINTU TOL</td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["palang_pintu_tol"]['jumlah']))
                            {{ $data['data_gerbang_teknik2']["palang_pintu_tol"]['jumlah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["palang_pintu_tol"]['panjang']))
                            {{ $data['data_gerbang_teknik2']["palang_pintu_tol"]['panjang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_teknik2']["palang_pintu_tol"]['kondisi']))
                            {{ $data['data_gerbang_teknik2']["palang_pintu_tol"]['kondisi'] }}
                        @else
                            ---
                        @endif
                    </td>
                </tr>
            </table>

            <h2 class="section-title">TARIF TOL</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="3">ASAL GERBANG</th>
                    <th colspan="6">ASAL / TAHUN:
                        @if (isset($data['data_gerbang_harga_tarif']['tahun']))
                            {{ $data['data_gerbang_harga_tarif']['tahun'] }}
                        @else
                            -
                        @endif
                    </th>
                    <th colspan="6">PEMUTAKHIRAN / TAHUN:</th>
                </tr>
                <tr>
                    <th colspan="6">GOLONGAN / TARIF/KM (Rp.)</th>
                    <th colspan="6">GOLONGAN / TARIF (Rp.)</th>
                </tr>
                <tr>
                    <th colspan="1">I</th>
                    <th colspan="1">II</th>
                    <th colspan="1">III</th>
                    <th colspan="1">IV</th>
                    <th colspan="1">V</th>
                    <th colspan="1">VI</th>
                    <th colspan="1">I</th>
                    <th colspan="1">II</th>
                    <th colspan="1">III</th>
                    <th colspan="1">IV</th>
                    <th colspan="1">V</th>
                    <th colspan="1">VI</th>
                </tr>
                <tr>
                    <th>TUJUAN</th>
                    <th>SEDAN, JIP, PICK UP, BUS</th>
                    <th>TRUK DGN 2 GANDAR</th>
                    <th>TRUK DGN 3 GANDAR</th>
                    <th>TRUK DGN 4 GANDAR</th>
                    <th>TRUK 5 GDR ATAU LEBIH</th>
                    <th>KENDARAAN RODA 2</th>
                    <th>SEDAN, JIP, PICK UP, BUS</th>
                    <th>TRUK DGN 2 GANDAR</th>
                    <th>TRUK DGN 3 GANDAR</th>
                    <th>TRUK DGN 4 GANDAR</th>
                    <th>TRUK 5 GDR ATAU LEBIH</th>
                    <th>KENDARAAN RODA 2</th>
                </tr>
                <tr> 
                    <td>
                        @if (isset($data['data_gerbang_harga_tarif']['gerbang']))
                            {{ $data['data_gerbang_harga_tarif']['gerbang'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_harga_tarif']['gol_1']))
                            {{ $data['data_gerbang_harga_tarif']['gol_1'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_harga_tarif']['gol_2']))
                            {{ $data['data_gerbang_harga_tarif']['gol_2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_harga_tarif']['gol_3']))
                            {{ $data['data_gerbang_harga_tarif']['gol_3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_harga_tarif']['gol_4']))
                            {{ $data['data_gerbang_harga_tarif']['gol_4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_harga_tarif']['gol_5']))
                            {{ $data['data_gerbang_harga_tarif']['gol_5'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_harga_tarif']['gol_6']))
                            {{ $data['data_gerbang_harga_tarif']['gol_6'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr style="height:100px;">
                </tr>
            </table>
        </section>

        <section class="section-right">
            <h2 class="section-title">PERWUJUDAN</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="2">KEGIATAN POKOK</th>
                    <th colspan="4">ASAL / TAHUN:
                        @if (isset($data['data_gerbang_realisasi']['tahun']))
                            {{ $data['data_gerbang_realisasi']['tahun'] }}
                        @else
                            -
                        @endif
                    </th>
                    <th colspan="4">PEMUTAKHIRAN / TAHUN:</th>
                </tr>
                <tr>
                    <th>PENYEDIA JASA</th>
                    <th>CACAH (M, M<sup>2</sup>, M<sup>3</sup>)</th>
                    <th>BIAYA (Rp)</th>
                    <th>SUMBER DANA</th>
                    <th>PENYEDIA JASA</th>
                    <th>CACAH (M, M<sup>2</sup>, M<sup>3</sup>)</th>
                    <th>BIAYA (Rp)</th>
                    <th>SUMBER DANA</th>
                </tr>
                <tr>
                    <td>1. PEMBEBASAN LAHAN</td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pembebasan_lahan"]['penyedia_jasa']))
                            {{ $data['data_gerbang_realisasi']["pembebasan_lahan"]['penyedia_jasa'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pembebasan_lahan"]['cacah']))
                            {{ $data['data_gerbang_realisasi']["pembebasan_lahan"]['cacah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pembebasan_lahan"]['biaya']))
                            {{ $data['data_gerbang_realisasi']["pembebasan_lahan"]['biaya'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pembebasan_lahan"]['sumber_dana']))
                            {{ $data['data_gerbang_realisasi']["pembebasan_lahan"]['sumber_dana'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>2. DESAIN</td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["desain"]['penyedia_jasa']))
                            {{ $data['data_gerbang_realisasi']["desain"]['penyedia_jasa'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["desain"]['cacah']))
                            {{ $data['data_gerbang_realisasi']["desain"]['cacah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["desain"]['biaya']))
                            {{ $data['data_gerbang_realisasi']["desain"]['biaya'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["desain"]['sumber_dana']))
                            {{ $data['data_gerbang_realisasi']["desain"]['sumber_dana'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>3. PEMBANGUNAN</td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pembangunan"]['penyedia_jasa']))
                            {{ $data['data_gerbang_realisasi']["pembangunan"]['penyedia_jasa'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pembangunan"]['cacah']))
                            {{ $data['data_gerbang_realisasi']["pembangunan"]['cacah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pembangunan"]['biaya']))
                            {{ $data['data_gerbang_realisasi']["pembangunan"]['biaya'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pembangunan"]['sumber_dana']))
                            {{ $data['data_gerbang_realisasi']["pembangunan"]['sumber_dana'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>4. PENINGKATAN</td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["peningkatan"]['penyedia_jasa']))
                            {{ $data['data_gerbang_realisasi']["peningkatan"]['penyedia_jasa'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["peningkatan"]['cacah']))
                            {{ $data['data_gerbang_realisasi']["peningkatan"]['cacah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["peningkatan"]['biaya']))
                            {{ $data['data_gerbang_realisasi']["peningkatan"]['biaya'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["peningkatan"]['sumber_dana']))
                            {{ $data['data_gerbang_realisasi']["peningkatan"]['sumber_dana'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>5. REKONSTRUKSI</td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["rekonstruksi"]['penyedia_jasa']))
                            {{ $data['data_gerbang_realisasi']["rekonstruksi"]['penyedia_jasa'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["rekonstruksi"]['cacah']))
                            {{ $data['data_gerbang_realisasi']["rekonstruksi"]['cacah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["rekonstruksi"]['biaya']))
                            {{ $data['data_gerbang_realisasi']["rekonstruksi"]['biaya'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["rekonstruksi"]['sumber_dana']))
                            {{ $data['data_gerbang_realisasi']["rekonstruksi"]['sumber_dana'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>6. PEMELIHARAAN & REHABILITASI</td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pemeliharaan_dan_rehabilitasi"]['penyedia_jasa']))
                            {{ $data['data_gerbang_realisasi']["pemeliharaan_dan_rehabilitasi"]['penyedia_jasa'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pemeliharaan_dan_rehabilitasi"]['cacah']))
                            {{ $data['data_gerbang_realisasi']["pemeliharaan_dan_rehabilitasi"]['cacah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pemeliharaan_dan_rehabilitasi"]['biaya']))
                            {{ $data['data_gerbang_realisasi']["pemeliharaan_dan_rehabilitasi"]['biaya'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pemeliharaan_dan_rehabilitasi"]['sumber_dana']))
                            {{ $data['data_gerbang_realisasi']["pemeliharaan_dan_rehabilitasi"]['sumber_dana'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>7. SUPERVISI</td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["supervisi"]['penyedia_jasa']))
                            {{ $data['data_gerbang_realisasi']["supervisi"]['penyedia_jasa'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["supervisi"]['cacah']))
                            {{ $data['data_gerbang_realisasi']["supervisi"]['cacah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["supervisi"]['biaya']))
                            {{ $data['data_gerbang_realisasi']["supervisi"]['biaya'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["supervisi"]['sumber_dana']))
                            {{ $data['data_gerbang_realisasi']["supervisi"]['sumber_dana'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>8. PENGENDALI MUTU INDEPENDEN</td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pengendali_mutu_independen"]['penyedia_jasa']))
                            {{ $data['data_gerbang_realisasi']["pengendali_mutu_independen"]['penyedia_jasa'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pengendali_mutu_independen"]['cacah']))
                            {{ $data['data_gerbang_realisasi']["pengendali_mutu_independen"]['cacah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pengendali_mutu_independen"]['biaya']))
                            {{ $data['data_gerbang_realisasi']["pengendali_mutu_independen"]['biaya'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["pengendali_mutu_independen"]['sumber_dana']))
                            {{ $data['data_gerbang_realisasi']["pengendali_mutu_independen"]['sumber_dana'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>9. LAINNYA</td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["lainnya"]['penyedia_jasa']))
                            {{ $data['data_gerbang_realisasi']["lainnya"]['penyedia_jasa'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["lainnya"]['cacah']))
                            {{ $data['data_gerbang_realisasi']["lainnya"]['cacah'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["lainnya"]['biaya']))
                            {{ $data['data_gerbang_realisasi']["lainnya"]['biaya'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_gerbang_realisasi']["lainnya"]['sumber_dana']))
                            {{ $data['data_gerbang_realisasi']["lainnya"]['sumber_dana'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td></td>
                    <th colspan="2">JUMLAH</th>
                    <th>---</th>
                    <th>---</th>
                    <th colspan="2">JUMLAH</th>
                    <th>---</th>
                    <th>---</th>
                </tr>
            </table>

            <h2 class="section-title">CATATAN KHUSUS</h2>
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
                <tr style="height:320px;">
                </tr>               
            </table>
        </section>
    </div>
    
    <div style="clear: both;"></div>
    <h2 class="section-title">LEGALISASI</h2>
    <table class="header-table">
        <tr>
            <th rowspan="2">KEGIATAN</th>
            <th colspan="3">ASAL / TAHUN:
                @if (isset($data['data_gerbang_teknik1']['tahun']))
                    {{ $data['data_gerbang_teknik1']['tahun'] }}
                @else
                    -
                @endif
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
