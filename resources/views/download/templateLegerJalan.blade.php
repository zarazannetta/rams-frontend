<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kartu Jalan (Jalan Utama)</title>
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
            width: 30%;
        }

        .section-center {
            float: left;
            width: 43%;
            margin-left: 1%;
        }

        .section-right {
            float: right;
            width: 25%;
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
            <h2>KARTU JALAN<br />(JALAN UTAMA)</h2>
        </div>
        <div class="title-right">
            <h2>DEPAN</h2>
            <h2>LEMBAR DISTRIBUSI KE ---</h2>
            <h2>
                NOMOR LEMBAR KARTU JALAN UTAMA --- ---- ---
            </h2>
        </div>
    </div>

    <h2 class="section-title">IDENTIFIKASI</h2>
    <table class="header-table">
        <tr>
            <td>NOMOR KODE DAN NAMA</td>
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
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>NOMOR SEKSI / NAMA SEKSI</td>
            <td>:</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>LOKASI / KOTA</td>
            <td>:</td>
            <td>---</td>
            <td>
                @if (isset($data['data_jalan_identifikasi']['titik_awal_segmen_km']) &&
                        isset($data['data_jalan_identifikasi']['titik_akhir_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_awal_segmen_km'] }} S/D KM
                    {{ $data['data_jalan_identifikasi']['titik_akhir_segmen_km'] }}
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
            <td>---</td>
            <td>Y</td>
            <td>:</td>
            <td>---</td>
            <td>Z</td>
            <td>:</td>
            <td>---</td>
            <td>DESKRIPSI</td>
            <td>:</td>
            <td>---</td>
        </tr>
        <tr>
            <td>TITIK IKAT PATOK KM</td>
            <td>:</td>
            <td>---</td>
            <td>
                @if (isset($data['data_jalan_identifikasi']['titik_ikat_patok_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_ikat_patok_km'] }}
                @else
                    ---
                @endif
            </td>
            <td>X</td>
            <td>:</td>
            <td>
                @if (isset($data['data_jalan_identifikasi']['titik_ikat_patok_x']))
                    {{ $data['data_jalan_identifikasi']['titik_ikat_patok_x'] }}
                @else
                    ---
                @endif
            </td>
            <td>Y</td>
            <td>:</td>
            <td>
                @if (isset($data['data_jalan_identifikasi']['titik_ikat_patok_y']))
                    {{ $data['data_jalan_identifikasi']['titik_ikat_patok_y'] }}
                @else
                    ---
                @endif
            </td>
            <td>Z</td>
            <td>:</td>
            <td>
                @if (isset($data['data_jalan_identifikasi']['titik_ikat_patok_z']))
                    {{ $data['data_jalan_identifikasi']['titik_ikat_patok_z'] }}
                @else
                    ---
                @endif
            </td>
            <td>DESKRIPSI</td>
            <td>:</td>
            <td>---</td>
        </tr>
        <tr>
            <td>TITIK AWAL SEGMEN RUAS JALAN</td>
            <td>:</td>
            <td>---</td>
            <td>
                @if (isset($data['data_jalan_identifikasi']['titik_awal_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_awal_segmen_km'] }}
                @else
                    ---
                @endif
            </td>
            <td>X</td>
            <td>:</td>
            <td>---</td>
            <td>Y</td>
            <td>:</td>
            <td>---</td>
            <td>Z</td>
            <td>:</td>
            <td>---</td>
            <td>DESKRIPSI</td>
            <td>:</td>
            <td>---</td>
        </tr>
        <tr>
            <td>TITIK AKHIR SEGMEN RUAS JALAN</td>
            <td>:</td>
            <td>---</td>
            <td>
                @if (isset($data['data_jalan_identifikasi']['titik_akhir_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_akhir_segmen_km'] }}
                @else
                    ---
                @endif
            </td>
            <td>X</td>
            <td>:</td>
            <td>---</td>
            <td>Y</td>
            <td>:</td>
            <td>---</td>
            <td>Z</td>
            <td>:</td>
            <td>---</td>
            <td>DESKRIPSI</td>
            <td>:</td>
            <td>---</td>
        </tr>
    </table>

    <h2 class="section-title">DATA TEKNIK - 1</h2>
    <table class="header-table">
        <tr>
            <th rowspan="2">URAIAN</th>
            <th colspan="4">ASAL / TAHUN</th>
            <th colspan="4">PEMUTAKHIRAN / TAHUN</th>
        </tr>
        <tr>
            <th>LUAS</th>
            <th>DATA PEROLEHAN</th>
            <th>NILAI PEROLEHAN</th>
            <th>BUKTI PEROLEHAN</th>
            <th>LUAS</th>
            <th>DATA PEROLEHAN</th>
            <th>NILAI PEROLEHAN</th>
            <th>BUKTI PEROLEHAN</th>
        </tr>
        <tr>
            <td>a. LAHAN RUMIJA</td>
            <td>
                @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                    {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                    {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
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
        <tr>
            <td>b. BADAN JALAN</td>
            <td>
                @if (isset($data['data_jalan_teknik1']["badan_jalan"]['luas']))
                    {{ $data['data_jalan_teknik1']["badan_jalan"]['luas'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_jalan_teknik1']["badan_jalan"]['data_perolehan']))
                    {{ $data['data_jalan_teknik1']["badan_jalan"]['data_perolehan'] }}
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
        <tr>
            <td>c. BAHU JALAN</td>
            <td>
                @if (isset($data['data_jalan_teknik1']["bahu_jalan"]['luas']))
                    {{ $data['data_jalan_teknik1']["bahu_jalan"]['luas'] }}
                @else
                    ---
                @endif
            </td>
            <td>
                @if (isset($data['data_jalan_teknik1']["bahu_jalan"]['data_perolehan']))
                    {{ $data['data_jalan_teknik1']["bahu_jalan"]['data_perolehan'] }}
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
    </table>

    <div class="section-container">
        <section class="section-left">
            <h2 class="section-title">DATA TEKNIK - 2</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="2">URAIAN KONSTRUKSI</th>
                    <th colspan="8">ASAL / TAHUN</th>
                    <th colspan="8">PEMUTAKHIRAN / TAHUN</th>
                </tr>
                <tr>
                    <th colspan="4">JALUR KIRI</th>
                    <th colspan="4">JALUR KANAN</th>
                    <th colspan="4">JALUR KIRI</th>
                    <th colspan="4">JALUR KANAN</th>
                </tr>
                <tr>
                    <th>BADAN JALAN</th>
                    <th>LAJUR 1</th>
                    <th>LAJUR 2</th>
                    <th>LAJUR 3</th>
                    <th>LAJUR 4</th>
                    <th>LAJUR 4</th>
                    <th>LAJUR 3</th>
                    <th>LAJUR 2</th>
                    <th>LAJUR 1</th>
                    <th>LAJUR 1</th>
                    <th>LAJUR 2</th>
                    <th>LAJUR 3</th>
                    <th>LAJUR 4</th>
                    <th>LAJUR 4</th>
                    <th>LAJUR 3</th>
                    <th>LAJUR 2</th>
                    <th>LAJUR 1</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. LAPIS PERMUKAAN</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">
                        LEBAR (M)</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TEBAL (M)</td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS</td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["jenis"]['nilai_ka_lajur1'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">NILAI KONDISI (PCI)</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KATEGORI</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">NILAI KONDISI (IRI)</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KATEGORI</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">b. LAPIS PONDASI ATAS</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">LEBAR (M)</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TEBAL (M)</td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["tebal"]['nilai_ka_lajur1'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS</td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_atas"]["jenis"]['nilai_ka_lajur1'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">c. LAPIS PONDASI BAWAH</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">LEBAR (M)</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TEBAL (M)</td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_lajur1'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS</td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_pondasi_bawah"]["jenis"]['nilai_ka_lajur1'] }}
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
                </tr>
                <tr>
                    <th>MEDIAN</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">LEBAR</td>
                    <td colspan="8">
                        @if (isset($data['data_jalan_teknik2_median']["lebar"]['nilai']))
                            {{ $data['data_jalan_teknik2_median']["lebar"]['nilai'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="8">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TEBAL</td>
                    <td colspan="8">---</td>
                    <td colspan="8">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS</td>
                    <td colspan="8">---</td>
                    <td colspan="8">---</td>
                </tr>
                <tr>
                    <th>BAHU JALAN</th>
                    <th colspan="2">LUAR</th>
                    <th colspan="2">DALAM</th>
                    <th colspan="2">LUAR</th>
                    <th colspan="2">DALAM</th>
                    <th colspan="2">LUAR</th>
                    <th colspan="2">DALAM</th>
                    <th colspan="2">LUAR</th>
                    <th colspan="2">DALAM</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. LAPIS PERMUKAAN</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">LEBAR (M)</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TEBAL (M)</td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["tebal"]['nilai_ki_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["tebal"]['nilai_ki_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["tebal"]['nilai_ki_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["tebal"]['nilai_ki_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["tebal"]['nilai_ka_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["tebal"]['nilai_ka_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["tebal"]['nilai_ka_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["tebal"]['nilai_ka_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS</td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["jenis"]['nilai_ki_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["jenis"]['nilai_ki_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["jenis"]['nilai_ki_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["jenis"]['nilai_ki_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["jenis"]['nilai_ka_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["jenis"]['nilai_ka_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["jenis"]['nilai_ka_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_permukaan"]["jenis"]['nilai_ka_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">NILAI KONDISI (PCI)</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KATEGORI</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">NILAI KONDISI (IRI)</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KATEGORI</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">b. LAPIS PONDASI ATAS</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">LEBAR (M)</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TEBAL (M)</td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["tebal"]['nilai_ki_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["tebal"]['nilai_ki_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["tebal"]['nilai_ki_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["tebal"]['nilai_ki_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["tebal"]['nilai_ka_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["tebal"]['nilai_ka_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["tebal"]['nilai_ka_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["tebal"]['nilai_ka_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS</td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["jenis"]['nilai_ki_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["jenis"]['nilai_ki_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["jenis"]['nilai_ki_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["jenis"]['nilai_ki_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["jenis"]['nilai_ka_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["jenis"]['nilai_ka_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["jenis"]['nilai_ka_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_atas"]["jenis"]['nilai_ka_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">c. LAPIS PONDASI BAWAH</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">LEBAR (M)</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TEBAL (M)</td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_bawah"]["tebal"]['nilai_ki_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapis_pondasi_bawah"]["tebal"]['nilai_ka_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS</td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapsi_pondasi_bawah"]["jenis"]['nilai_ki_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapsi_pondasi_bawah"]["jenis"]['nilai_ki_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapsi_pondasi_bawah"]["jenis"]['nilai_ki_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapsi_pondasi_bawah"]["jenis"]['nilai_ki_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapsi_pondasi_bawah"]["jenis"]['nilai_ka_dalam']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapsi_pondasi_bawah"]["jenis"]['nilai_ka_dalam'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">
                        @if (isset($data['data_jalan_teknik_2_bahujalan']["lapsi_pondasi_bawah"]["jenis"]['nilai_ka_luar']))
                            {{ $data['data_jalan_teknik_2_bahujalan']["lapsi_pondasi_bawah"]["jenis"]['nilai_ka_luar'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                    <td colspan="2">---</td>
                </tr>
            </table>

            <h2 class="section-title">DATA TEKNIK - 4</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="3">URAIAN PERLENGKAPAN JALAN</th>
                    <th colspan="6">ASAL / TAHUN</th>
                    <th colspan="6">PEMUTAKHIRAN / TAHUN</th>
                </tr>
                <tr>
                    <th colspan="2">KIRI</th>
                    <th colspan="2">MEDIAN</th>
                    <th colspan="2">KANAN</th>
                    <th colspan="2">KIRI</th>
                    <th colspan="2">MEDIAN</th>
                    <th colspan="2">KANAN</th>
                </tr>
                <tr>
                    <th>BUAH</th>
                    <th>METER</th>
                    <th>BUAH</th>
                    <th>METER</th>
                    <th>BUAH</th>
                    <th>METER</th>
                    <th>BUAH</th>
                    <th>METER</th>
                    <th>BUAH</th>
                    <th>METER</th>
                    <th>BUAH</th>
                    <th>METER</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. RAMBU LALU LINTAS</td>
                    <td>
                        @if (isset($data['rambu_lalulintas_count']['kiri']) && $data['rambu_lalulintas_count']['kiri'])
                            {{ $data['rambu_lalulintas_count']['kiri'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['rambu_lalulintas_count']['median']) && $data['rambu_lalulintas_count']['median'])
                            {{ $data['rambu_lalulintas_count']['median'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['rambu_lalulintas_count']['kanan']) && $data['rambu_lalulintas_count']['kanan'])
                            {{ $data['rambu_lalulintas_count']['kanan'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- RAMBU PERINGATAN</td>
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
                    <td style="border-right: 0.1px solid black;">- RAMBU LARANGAN</td>
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
                    <td style="border-right: 0.1px solid black;">- RAMBU PERINTAH</td>
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
                    <td style="border-right: 0.1px solid black;">- RAMBU PETUNJUK</td>
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
                    <td style="border-right: 0.1px solid black;">- RAMBU ELEKTRONIK</td>
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
                    <td style="border-right: 0.1px solid black;">b. MARKA JALAN</td>
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
                    <td style="border-right: 0.1px solid black;">- MARKA MEMBUJUR</td>
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
                    <td style="border-right: 0.1px solid black;">- MARKA MELINTANG</td>
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
                    <td style="border-right: 0.1px solid black;">MARKA SERONG</td>
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
                    <td style="border-right: 0.1px solid black;">- MARKA KOTAK KUNING</td>
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
                    <td style="border-right: 0.1px solid black;">- MARKA LAINNYA</td>
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
                    <td style="border-right: 0.1px solid black;">- PAKU JALAN</td>
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
                    <td style="border-right: 0.1px solid black;">- CONCRETE BARRIER</td>
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
                    <td style="border-right: 0.1px solid black;">c. PENERANGAN JALAN</td>
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
                    <td style="border-right: 0.1px solid black;">- LAMPU PJU</td>
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
                    <td style="border-right: 0.1px solid black;">- HIGHMAST TOWER</td>
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
                    <td style="border-right: 0.1px solid black;">c. ALAT PEMBERI ISYARAT LALU LINTAS</td>
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
                    <td style="border-right: 0.1px solid black;">- LAMPU TIGA WARNA</td>
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
                    <td style="border-right: 0.1px solid black;">- LAMPU DUA WARNA</td>
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
                    <td style="border-right: 0.1px solid black;">- LAMPU SATU WARNA</td>
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
                    <td style="border-right: 0.1px solid black;">e. ALAT PENGENDALI & PENGAMAN PENGGUNA JALAN</td>
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
                    <td style="border-right: 0.1px solid black;">- PAGAR PENGAMAN KAKU</td>
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
                    <td style="border-right: 0.1px solid black;">- PAGAR PENGAMAN SEMI KAKU</td>
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
                    <td style="border-right: 0.1px solid black;">- PAGAR PENGAMAN FLEKSIBEL</td>
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
                    <td style="border-right: 0.1px solid black;">- CRASH CUSHION</td>
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
                    <td style="border-right: 0.1px solid black;">- SAFETY ROLLER</td>
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
                    <td style="border-right: 0.1px solid black;">- CERMIN TIKUNGAN</td>
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
                    <td style="border-right: 0.1px solid black;">- PATOK LALU LINTAS</td>
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
                    <td style="border-right: 0.1px solid black;">- REFLEKTOR</td>
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
                    <td style="border-right: 0.1px solid black;">- PITA PENGGADUH</td>
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
                    <td style="border-right: 0.1px solid black;">- JALUR PENGHENTIAN DARURAT</td>
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
                    <td style="border-right: 0.1px solid black;">PEMBATAS KECEPATAN</td>
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
                    <td style="border-right: 0.1px solid black;">- PEMBATAS TINGGI & LEBAR</td>
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
                    <td style="border-right: 0.1px solid black;">- PENAHAN SILAU</td>
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
                    <td style="border-right: 0.1px solid black;">- PEREDAM BISING</td>
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
                    <td style="border-right: 0.1px solid black;">f. ALAT PENGAWAS & PENGAMAN JALAN</td>
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
                    <td style="border-right: 0.1px solid black;">- KAMERA PENGAWAS</td>
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
                    <td style="border-right: 0.1px solid black;">- SPEEDGUN</td>
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
                    <td style="border-right: 0.1px solid black;">- PENGAMAN SALURAN UDARA TEGANGAN TINGGI</td>
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
                    <td style="border-right: 0.1px solid black;">g. PAGAR OPERASIONAL</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["pagar_operasional"]['nilai_ki']) && $data['data_jalan_teknik4']["pagar_operasional"]['nilai_ki'])
                            {{ $data['data_jalan_teknik4']["pagar_operasional"]['nilai_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['pagar_operasional']['kiri']["pagar_operasional"]['length']) && $data['pagar_operasional']['kiri']["pagar_operasional"]['length'])
                            {{ $data['pagar_operasional']['kiri']["pagar_operasional"]['length'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["pagar_operasional"]['nilai_md']) && $data['data_jalan_teknik4']["pagar_operasional"]['nilai_md'])
                            {{ $data['data_jalan_teknik4']["pagar_operasional"]['nilai_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['pagar_operasional']['median']["pagar_operasional"]['length']) && $data['pagar_operasional']['median']["pagar_operasional"]['length'])
                            {{ $data['pagar_operasional']['median']["pagar_operasional"]['length'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["pagar_operasional"]['nilai_ka']) && $data['data_jalan_teknik4']["pagar_operasional"]['nilai_ka'])
                            {{ $data['data_jalan_teknik4']["pagar_operasional"]['nilai_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['pagar_operasional']['kanan']["pagar_operasional"]['length']) && $data['pagar_operasional']['kanan']["pagar_operasional"]['length'])
                            {{ $data['pagar_operasional']['kanan']["pagar_operasional"]['length'] }}
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
                <tr>
                    <td style="border-right: 0.1px solid black;">h. PATOK JALAN</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PATOK KILOMETER</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_km"]['nilai_ki']) && $data['data_jalan_teknik4']["patok_km"]['nilai_ki'])
                            {{ $data['data_jalan_teknik4']["patok_km"]['nilai_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_km"]['nilai_md']) && $data['data_jalan_teknik4']["patok_km"]['nilai_md'])
                            {{ $data['data_jalan_teknik4']["patok_km"]['nilai_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_km"]['nilai_ka']) && $data['data_jalan_teknik4']["patok_km"]['nilai_ka'])
                            {{ $data['data_jalan_teknik4']["patok_km"]['nilai_ka'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PATOK HEKTOMETER</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_hm"]['nilai_ki']) && $data['data_jalan_teknik4']["patok_hm"]['nilai_ki'])
                            {{ $data['data_jalan_teknik4']["patok_hm"]['nilai_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_hm"]['nilai_md']) && $data['data_jalan_teknik4']["patok_hm"]['nilai_md'])
                            {{ $data['data_jalan_teknik4']["patok_hm"]['nilai_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_hm"]['nilai_ka']) && $data['data_jalan_teknik4']["patok_hm"]['nilai_ka'])
                            {{ $data['data_jalan_teknik4']["patok_hm"]['nilai_ka'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PATOK LJ</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_lj"]['nilai_ki']) && $data['data_jalan_teknik4']["patok_lj"]['nilai_ki'])
                            {{ $data['data_jalan_teknik4']["patok_lj"]['nilai_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_lj"]['nilai_md']) && $data['data_jalan_teknik4']["patok_lj"]['nilai_md'])
                            {{ $data['data_jalan_teknik4']["patok_lj"]['nilai_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_lj"]['nilai_ka']) && $data['data_jalan_teknik4']["patok_lj"]['nilai_ka'])
                            {{ $data['data_jalan_teknik4']["patok_lj"]['nilai_ka'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PATOK RMJ</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_rmj"]['nilai_ki']) && $data['data_jalan_teknik4']["patok_rmj"]['nilai_ki'])
                            {{ $data['data_jalan_teknik4']["patok_rmj"]['nilai_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_rmj"]['nilai_md']) && $data['data_jalan_teknik4']["patok_rmj"]['nilai_md'])
                            {{ $data['data_jalan_teknik4']["patok_rmj"]['nilai_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_teknik4']["patok_rmj"]['nilai_ka']) && $data['data_jalan_teknik4']["patok_rmj"]['nilai_ka'])
                            {{ $data['data_jalan_teknik4']["patok_rmj"]['nilai_ka'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">- PATOK CP</td>
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
                    <td style="border-right: 0.1px solid black;">i. PATOK UTILITAS</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">j. PAPAN PENGUMUMAN KEPEMILIKAN TANAH NEGARA</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">k. REKLAME</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">l. FASILITAS PUTAR BALIK</td>
                </tr>
            </table>

            <h2 class="section-title">DATA LINTAS HARIAN RATA-RATA</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="2">GOLONGAN KENDARAAN</th>
                    <th colspan="3">ASAL / TAHUN</th>
                    <th colspan="3">PEMUTAKHIRAN / TAHUN</th>
                </tr>
                <tr>
                    <th>JALUR KIRI</th>
                    <th>TARIF / KM</th>
                    <th>JALUR KANAN</th>
                    <th>JALUR KIRI</th>
                    <th>TARIF / KM</th>
                    <th>JALUR KANAN</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. GOLONGAN I (SEDAN, JIP, PICKUP, BUS)</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_i"]['lhr_ki']) && $data['data_jalan_lhr']["golongan_i"]['lhr_ki'])
                            {{ $data['data_jalan_lhr']["golongan_i"]['lhr_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_i"]['lhr_ka']) && $data['data_jalan_lhr']["golongan_i"]['lhr_ka'])
                            {{ $data['data_jalan_lhr']["golongan_i"]['lhr_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">b. GOLONGAN II (TRUK DENGAN 2 GANDAR)</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_ii"]['lhr_ki']) && $data['data_jalan_lhr']["golongan_ii"]['lhr_ki'])
                            {{ $data['data_jalan_lhr']["golongan_ii"]['lhr_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_ii"]['lhr_ka']) && $data['data_jalan_lhr']["golongan_ii"]['lhr_ka'])
                            {{ $data['data_jalan_lhr']["golongan_ii"]['lhr_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">c. GOLONGAN III (TRUK DENGAN 3 GANDAR)</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_iii"]['lhr_ki']) && $data['data_jalan_lhr']["golongan_iii"]['lhr_ki'])
                            {{ $data['data_jalan_lhr']["golongan_iii"]['lhr_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_iii"]['lhr_ka']) && $data['data_jalan_lhr']["golongan_iii"]['lhr_ka'])
                            {{ $data['data_jalan_lhr']["golongan_iii"]['lhr_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">d. GOLONGAN IV (TRUK DENGAN 4 GANDAR)</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_iv"]['lhr_ki']) && $data['data_jalan_lhr']["golongan_iv"]['lhr_ki'])
                            {{ $data['data_jalan_lhr']["golongan_iv"]['lhr_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_iv"]['lhr_ka']) && $data['data_jalan_lhr']["golongan_iv"]['lhr_ka'])
                            {{ $data['data_jalan_lhr']["golongan_iv"]['lhr_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">e. GOLONGAN V (TRUK DENGAN 5 GANDAR ATAU LEBIH)</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_v"]['lhr_ki']) && $data['data_jalan_lhr']["golongan_v"]['lhr_ki'])
                            {{ $data['data_jalan_lhr']["golongan_v"]['lhr_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_v"]['lhr_ka']) && $data['data_jalan_lhr']["golongan_v"]['lhr_ka'])
                            {{ $data['data_jalan_lhr']["golongan_v"]['lhr_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">f. GOLONGAN VI (KENDARAAN RODA DUA)</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_vi"]['lhr_ki']) && $data['data_jalan_lhr']["golongan_vi"]['lhr_ki'])
                            {{ $data['data_jalan_lhr']["golongan_vi"]['lhr_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>
                        @if (isset($data['data_jalan_lhr']["golongan_vi"]['lhr_ka']) && $data['data_jalan_lhr']["golongan_vi"]['lhr_ka'])
                            {{ $data['data_jalan_lhr']["golongan_vi"]['lhr_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </table>
        </section>

        <section class="section-center">
            <h2 class="section-title">DATA TEKNIK - 3</h2>
            <table class="header-table">
                <tr COL>
                    <th rowspan="2">URAIAN PENGAMAN & PELENGKAP</th>
                    <th colspan="12">ASAL / TAHUN</th>
                    <th colspan="12">PEMUTAKHIRAN / TAHUN</th>
                </tr>
                <tr>
                    <th colspan="3">KE-1</th>
                    <th colspan="3">KE-2</th>
                    <th colspan="3">KE-3</th>
                    <th colspan="3">KE-4</th>
                    <th colspan="3">KE-1</th>
                    <th colspan="3">KE-2</th>
                    <th colspan="3">KE-3</th>
                    <th colspan="3">KE-4</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. GORONG-GORONG</td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke1']) && $data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke1'])
                            {{ $data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke1'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke2']) && $data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke2'])
                            {{ $data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke3']) && $data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke3'])
                            {{ $data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke4']) && $data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke4'])
                            {{ $data['data_jalan_teknik3_goronggorong']["jenis_material"]['nilai_ke4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">UKURAN PANJANG (M)</td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke1']) && $data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke1'])
                            {{ $data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke1'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke2']) && $data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke2'])
                            {{ $data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke3']) && $data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke3'])
                            {{ $data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke4']) && $data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke4'])
                            {{ $data['data_jalan_teknik3_goronggorong']["ukuran_panjang"]['nilai_ke4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke1']) && $data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke1'])
                            {{ $data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke1'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke2']) && $data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke2'])
                            {{ $data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke2'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke3']) && $data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke3'])
                            {{ $data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke3'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">
                        @if (isset($data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke4']) && $data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke4'])
                            {{ $data['data_jalan_teknik3_goronggorong']["kondisi"]['nilai_ke4'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">b. AKUADUK</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">UKURAN PANJANG (M)</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                    <td colspan="3">---</td>
                </tr>
                <tr>
                    <th>DRAINASE</th>
                    <th>KIRI</th>
                    <th>MEDIAN</th>
                    <th>KANAN</th>
                    <th>KIRI</th>
                    <th>MEDIAN</th>
                    <th>KANAN</th>
                    <th>KIRI</th>
                    <th>MEDIAN</th>
                    <th>KANAN</th>
                    <th>KIRI</th>
                    <th>MEDIAN</th>
                    <th>KANAN</th>
                    <th>KIRI</th>
                    <th>MEDIAN</th>
                    <th>KANAN</th>
                    <th>KIRI</th>
                    <th>MEDIAN</th>
                    <th>KANAN</th>
                    <th>KIRI</th>
                    <th>MEDIAN</th>
                    <th>KANAN</th>
                    <th>KIRI</th>
                    <th>MEDIAN</th>
                    <th>KANAN</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">c. SALURAN TERBUKA</td>
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
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
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
                    <td style="border-right: 0.1px solid black;">UKURAN PANJANG (BH/M)</td>
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
                    <td style="border-right: 0.1px solid black;">DALAM (M)</td>
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
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
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
                    <td style="border-right: 0.1px solid black;">d. SALURAN TERTUTUP</td>
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
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
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
                    <td style="border-right: 0.1px solid black;">UKURAN PANJANG (BH/M)</td>
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
                    <td style="border-right: 0.1px solid black;">DALAM (M)</td>
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
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
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
                    <td style="border-right: 0.1px solid black;">e. SALURAN LERENG</td>
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
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
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
                    <td style="border-right: 0.1px solid black;">UKURAN PANJANG (BH/M)</td>
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
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
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
                    <td style="border-right: 0.1px solid black;">f. MANHOLE</td>
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
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke1_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke1_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke1_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke1_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke1_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke1_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke1_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke1_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke1_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke2_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke2_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke2_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke2_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke2_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke2_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke2_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke2_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke2_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke3_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke3_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke3_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke3_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke3_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke3_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke3_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke3_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke3_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke4_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke4_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke4_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke4_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke4_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke4_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke4_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke4_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["jenis_material"]['nilai_ke4_ka'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">UKURAN POKOK (BH)</td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke1_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke1_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke1_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke1_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke1_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke1_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke1_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke1_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke1_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke2_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke2_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke2_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke2_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke2_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke2_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke2_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke2_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke2_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke3_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke3_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke3_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke3_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke3_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke3_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke3_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke3_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke3_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke4_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke4_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke4_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke4_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke4_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke4_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke4_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke4_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["ukuran_pokok"]['nilai_ke4_ka'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke1_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke1_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke1_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke1_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke1_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke1_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke1_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke1_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke1_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke2_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke2_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke2_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke2_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke2_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke2_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke2_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke2_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke2_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke3_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke3_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke3_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke3_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke3_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke3_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke3_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke3_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke3_ka'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke4_ki']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke4_ki'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke4_ki'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke4_md']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke4_md'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke4_md'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if (isset($data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke4_ka']) && $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke4_ka'])
                            {{ $data['data_jalan_teknik3_saluran']["manhole"]["kondisi"]['nilai_ke4_ka'] }}
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
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">g. KERB</td>
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
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
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
                    <td style="border-right: 0.1px solid black;">UKURAN PANJANG (BH/M)</td>
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
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
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
                    <td style="border-right: 0.1px solid black;">h. INLET</td>
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
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
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
                    <td style="border-right: 0.1px solid black;">UKURAN POKOK (BH)</td>
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
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
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
                    <th>BANGUNAN PENGAMAN</th>
                    <th colspan="1.5">KIRI</th>
                    <th colspan="1.5">KANAN</th>
                    <th colspan="1.5">KIRI</th>
                    <th colspan="1.5">KANAN</th>
                    <th colspan="1.5">KIRI</th>
                    <th colspan="1.5">KANAN</th>
                    <th colspan="1.5">KIRI</th>
                    <th colspan="1.5">KANAN</th>
                    <th colspan="1.5">KIRI</th>
                    <th colspan="1.5">KANAN</th>
                    <th colspan="1.5">KIRI</th>
                    <th colspan="1.5">KANAN</th>
                    <th colspan="1.5">KIRI</th>
                    <th colspan="1.5">KANAN</th>
                    <th colspan="1.5">KIRI</th>
                    <th colspan="1.5">KANAN</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">i. PARAPET</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">UKURAN PANJANG (M)</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">j. DINDING PENAHAN TANAH</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">UKURAN PANJANG (M)</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">k. BRONJONG</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">UKURAN PANJANG (M<sup>2</sup>)</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">l. PENUTUP LERENG</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">JENIS MATERIAL</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">UKURAN PANJANG (M)</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KONDISI</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </table>

            <h2 class="section-title">DATA TEKNIK - 5</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="3">JENIS UTILITAS</th>
                    <th colspan="6">ASAL / TAHUN</th>
                    <th colspan="6">PEMUTAKHIRAN / TAHUN</th>
                </tr>
                <tr>
                    <th colspan="2">KIRI</th>
                    <th colspan="2">MEDIAN</th>
                    <th colspan="2">KANAN</th>
                    <th colspan="2">KIRI</th>
                    <th colspan="2">MEDIAN</th>
                    <th colspan="2">KANAN</th>
                </tr>
                <tr>
                    <th>BUAH</th>
                    <th>METER</th>
                    <th>BUAH</th>
                    <th>METER</th>
                    <th>BUAH</th>
                    <th>METER</th>
                    <th>BUAH</th>
                    <th>METER</th>
                    <th>BUAH</th>
                    <th>METER</th>
                    <th>BUAH</th>
                    <th>METER</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. JARINGAN LISTRIK DIATAS TANAH</td>
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
                    <td style="border-right: 0.1px solid black;">b. JARINGAN LISTRIK DIBAWAH TANAH</td>
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
                    <td style="border-right: 0.1px solid black;">c. JARINGAN LISTRIK SAL UDARA TEG. TINGGI</td>
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
                    <td style="border-right: 0.1px solid black;">d. JARINGAN TELEKOMUNIKASI DIATAS TANAH</td>
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
                    <td style="border-right: 0.1px solid black;">e. JARINGAN TELEKOMUNIKASI DIBAWAH TANAH</td>
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
                    <td style="border-right: 0.1px solid black;">f. JARINGAN PIPA AIR BERSIH</td>
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
                    <td style="border-right: 0.1px solid black;">g. JARINGAN PIPA MINYAK</td>
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
                    <td style="border-right: 0.1px solid black;">h. JARINGAN PIPA GAS</td>
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
                    <td style="border-right: 0.1px solid black;">i. GARDU LISTRIK</td>
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
                    <td style="border-right: 0.1px solid black;">j. TRAFO</td>
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
                    <td style="border-right: 0.1px solid black;">k. RUMAH KABEL</td>
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
                    <td style="border-right: 0.1px solid black;">l. HIDRAN</td>
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
                    <td style="border-right: 0.1px solid black;">m. LAINNYA</td>
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

            <h2 class="section-title">DATA BANGUNAN PENGHUBUNG</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="2">JENIS BANG. PENGHUBUNG</th>
                    <th rowspan="2">NAMA</th>
                    <th colspan="8">ASAL / TAHUN</th>
                    <th colspan="8">PEMUTAKHIRAN / TAHUN</th>
                </tr>
                <tr>
                    <th>KM</th>
                    <th>PJG (M)</th>
                    <th>LBR (M)</th>
                    <th>LUAS</th>
                    <th>X</th>
                    <th>Y</th>
                    <th>Z</th>
                    <th>NILAI</th>
                    <th>KM</th>
                    <th>PJG (M)</th>
                    <th>LBR (M)</th>
                    <th>LUAS (M<sup>2</sup>)</th>
                    <th>X</th>
                    <th>Y</th>
                    <th>Z</th>
                    <th>NILAI (RP.)</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. JEMBATAN</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">b. TEROWONGAN</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">c. LINTAS ATAS</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">d. LINTAS BAWAH</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">e. JALAN LAYANG</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">f. PILE SLAB</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">g. BOX CULVERT</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">h. VIADUCT</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">i. JEMBATAN KERETA API</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">j. TEROWONGAN KERETA API</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">k. JEMB. PENY. ORANG</td>
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
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </table>
        </section>

        <section class="section-right">
            <h2 class="section-title">CATATAN</h2>
            <table class="header-table">
                <tr>
                    <th colspan="2">CATATAN</th>
                </tr>
                <tr>
                    <th>ASAL / TAHUN</th>
                    <th>PEMUTAKHIRAN / TAHUN</th>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </table>

            <h2 class="section-title">DATA PENANGANAN JALAN</h2>
            <table class="header-table">
                <tr>
                    <th colspan="4">ASAL / TAHUN :</th>
                </tr>
                <tr>
                    <th>BENTUK PENANGANAN</th>
                    <th>LUAS (M<sup>2</sup>)</th>
                    <th>SEGMEN AWAL</th>
                    <th>SEGMEN AKHIR</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">PENINGKATAN DAN REKONSTRUKSI</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. REKONSTRUKSI</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">b. PELEBARAN</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. PEMELIHARAAN PREVENTIF</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">b. PEMELIHARAAN RUTIN</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">c. REHABILITASI MAYOR</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">d. REHABILITASI MINOR</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">LAINNYA</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <th colspan="4">PEMUTAKHIRAN / TAHUN :</th>
                </tr>
                <tr>
                    <th>BENTUK PENANGANAN</th>
                    <th>LUAS (M<sup>2</sup>)</th>
                    <th>SEGMEN AWAL</th>
                    <th>SEGMEN AKHIR</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">PENINGKATAN DAN REKONSTRUKSI</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. REKONSTRUKSI</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">b. PELEBARAN</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">a. PEMELIHARAAN PREVENTIF</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">b. PEMELIHARAAN RUTIN</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">c. REHABILITASI MAYOR</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">d. REHABILITASI MINOR</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">LAINNYA</td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;"></td>
                    <td>---</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </table>

            <h2 class="section-title">DATA GEOMETRIK JALAN</h2>
            <table class="header-table">
                <tr>
                    <th>URAIAN</th>
                    <th>ASAL / TAHUN</th>
                    <th>PEMUTAKHIRAN / TAHUN</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">LEBAR RUMIJA (M)</td>
                    <td>
                        @if (isset($data['data_jalan_geometrik']["lebar_rumija"]['nilai']) && $data['data_jalan_geometrik']["lebar_rumija"]['nilai'])
                            {{ $data['data_jalan_geometrik']["lebar_rumija"]['nilai'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">KELANDAIAN (%) KI / KA</td>
                    <td>
                        @if (isset($data['data_jalan_geometrik']["kelandaian_kiri"]['nilai']) &&
                                $data['data_jalan_geometrik']["kelandaian_kiri"]['nilai'] &&
                                isset($data['data_jalan_geometrik']["kelandaian_kanan"]['nilai']) &&
                                $data['data_jalan_geometrik']["kelandaian_kanan"]['nilai']
                        )
                            {{ $data['data_jalan_geometrik']["kelandaian_kiri"]['nilai'] }} /
                            {{ $data['data_jalan_geometrik']["kelandaian_kanan"]['nilai'] }}
                        @elseif (isset($data['data_jalan_geometrik']["kelandaian_kiri"]['nilai']) && $data['data_jalan_geometrik']["kelandaian_kiri"]['nilai'])
                            {{ $data['data_jalan_geometrik']["kelandaian_kiri"]['nilai'] }} / ---
                        @elseif (isset($data['data_jalan_geometrik']["kelandaian_kanan"]['nilai']) && $data['data_jalan_geometrik']["kelandaian_kanan"]['nilai'])
                            --- / {{ $data['data_jalan_geometrik']["kelandaian_kanan"]['nilai'] }}
                        @else
                            --- / ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">CROSS FALL (%)</td>
                    <td>
                        @if (isset($data['data_jalan_geometrik']["crossfall_kiri"]['nilai']) &&
                                $data['data_jalan_geometrik']["crossfall_kiri"]['nilai'] &&
                                isset($data['data_jalan_geometrik']["crossfall_kanan"]['nilai']) &&
                                $data['data_jalan_geometrik']["crossfall_kanan"]['nilai']
                        )
                            {{ $data['data_jalan_geometrik']["crossfall_kiri"]['nilai'] }} /
                            {{ $data['data_jalan_geometrik']["crossfall_kanan"]['nilai'] }}
                        @elseif (isset($data['data_jalan_geometrik']["crossfall_kiri"]['nilai']) && $data['data_jalan_geometrik']["crossfall_kiri"]['nilai'])
                            {{ $data['data_jalan_geometrik']["crossfall_kiri"]['nilai'] }} / ---
                        @elseif (isset($data['data_jalan_geometrik']["crossfall_kanan"]['nilai']) && $data['data_jalan_geometrik']["crossfall_kanan"]['nilai'])
                            --- / {{ $data['data_jalan_geometrik']["crossfall_kanan"]['nilai'] }}
                        @else
                            --- / ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">SUPERELEVASI (%)</td>
                    <td>
                        @if (isset($data['data_jalan_geometrik']["superelevasi"]['nilai']) && $data['data_jalan_geometrik']["superelevasi"]['nilai'])
                            {{ $data['data_jalan_geometrik']["superelevasi"]['nilai'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">RADIUS (M)</td>
                    <td>
                        @if (isset($data['data_jalan_geometrik']["radius"]['nilai']) && $data['data_jalan_geometrik']["radius"]['nilai'])
                            {{ $data['data_jalan_geometrik']["radius"]['nilai'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
            </table>

            <h2 class="section-title">DATA SITUASI JALAN</h2>
            <table class="header-table">
                <tr>
                    <th>URAIAN</th>
                    <th>ASAL / TAHUN</th>
                    <th>PEMUTAKHIRAN / TAHUN</th>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">ALINYEMEN HORIZONTAL</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">ALINYEMEN VERTIKAL</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TERRAIN KIRI</td>
                    <td>
                        @if (isset($data['data_jalan_situasi']["terrain_kiri"]['nilai']) && $data['data_jalan_situasi']["terrain_kiri"]['nilai'])
                            {{ $data['data_jalan_situasi']["terrain_kiri"]['nilai'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TERRAIN KANAN</td>
                    <td>
                        @if (isset($data['data_jalan_situasi']["terrain_kanan"]['nilai']) && $data['data_jalan_situasi']["terrain_kanan"]['nilai'])
                            {{ $data['data_jalan_situasi']["terrain_kanan"]['nilai'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TATA GUNA LAHAN KIRI</td>
                    <td>
                        @if (isset($data['data_jalan_situasi']["tataguna_lahan_kiri"]['nilai']) && $data['data_jalan_situasi']["tataguna_lahan_kiri"]['nilai'])
                            {{ $data['data_jalan_situasi']["tataguna_lahan_kiri"]['nilai'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">TATA GUNA LAHAN KANAN</td>
                    <td>
                        @if (isset($data['data_jalan_situasi']["tataguna_lahan_kanan"]['nilai']) && $data['data_jalan_situasi']["tataguna_lahan_kanan"]['nilai'])
                            {{ $data['data_jalan_situasi']["tataguna_lahan_kanan"]['nilai'] }}
                        @else
                            ---
                        @endif
                    </td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">LOKASI BLACKSPOT</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">SUTET</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">PERLINTASAN KERETA API</td>
                    <td>---</td>
                    <td>---</td>
                </tr>
            </table>
        </section>
    </div>

    <div style = "float: right; width: 69%; margin-left: 1%">
        <h2 class="section-title">DATA BANGUNAN PENDUKUNG</h2>
        <table class="header-table">
            <tr>
                <th rowspan="3">JENIS BANGUNAN PENDUKUNG</th>
                <th colspan="4">ASAL / TAHUN</th>
                <th colspan="4">PEMUTAKHIRAN / TAHUN</th>
            </tr>
            <tr>
                <th colspan="2">LUAS</th>
                <th colspan="2">NILAI</th>
                <th colspan="2">LUAS</th>
                <th colspan="2">NILAI</th>
            </tr>
            <tr>
                <th>LAHAN</th>
                <th>BANGUNAN</th>
                <th>LAHAN</th>
                <th>BANGUNAN</th>
                <th>LAHAN</th>
                <th>BANGUNAN</th>
                <th>LAHAN</th>
                <th>BANGUNAN</th>
            </tr>
            <tr>
                <td style="border-right: 0.1px solid black;">a. GERBANG TOL</td>
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
                <td style="border-right: 0.1px solid black;">b. KANTOR OPERASIONAL</td>
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
                <td style="border-right: 0.1px solid black;">c. TEMPAT ISTIRAHAT DAN PELAYANAN</td>
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
                <td style="border-right: 0.1px solid black;">d. POS PJR</td>
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
                <td style="border-right: 0.1px solid black;">e. KANTOR OPERASI JEMBATANTIMBANG</td>
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
    </div>
</body>

</html>
