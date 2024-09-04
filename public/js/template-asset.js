$('#tipe_aset').on('change', function() {
    var selectedType = $(this).val();
    var tipeGeom = '';
    var tipeAttribute = '';

    // Show Description
    if (selectedType) {
        $('.template-desc').show();
    } else {
        $('.template-desc').hide();
    }

    switch(selectedType) {
        case 'bpt_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
                <li>jenis_material</li>
                <li>ukuran_pokok</li>
                <li>kondisi</li>
            `;
            break;
        case 'batas_desa_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'box_culvert_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
                <li>jenis_material</li>
                <li>ukuran_panjang</li>
                <li>kondisi</li>
            `;
            break;
        case 'bronjong_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'concrete_barrier_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'gerbang_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'gorong_gorong_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
                <li>jenis_material</li>
                <li>ukuran_panjang</li>
                <li>kondisi</li>
                <li>diameter</li>
            `;
            break;
        case 'guardrail_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'jalan_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'listrik_bawahtanah_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'marka_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'pagar_operasional_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
                <li>jenis</li>
            `;
            break;
        case 'pita_kejut_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'riol_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
                <li>jenis_material</li>
                <li>ukuran_pokok</li>
                <li>kondisi</li>
            `;
            break;
        case 'saluran_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
                <li>jenis_material</li>
                <li>kondisi</li>
                <li>panjang</li>
                <li>lebar</li>
                <li>tinggi</li>
            `;
            break;
        case 'sungai_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'telepon_bawahtanah_line':
            tipeGeom = '<i>multiLineString</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'gerbang_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'jembatan_point':
            tipeGeom = '<i>pointZ</i>';
            tipeAttribute = `
                <li>nama</li>
                <li>km</li>
                <li>panjang</li>
                <li>lebar</li>
                <li>luas</li>
                <li>absis_x</li>
                <li>ordinat_y</li>
            `;
            break;
        case 'lampu_lalulintas_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>absis_x</li>
                <li>ordinat_y</li>
            `;
            break;
        case 'manhole_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
                <li>jenis_material</li>
                <li>ukuran_pokok</li>
                <li>kondisi</li>
            `;
            break;
        case 'patok_hm_point':
            tipeGeom = '<i>pointZ</i>';
            tipeAttribute = `
                <li>layer</li>
                <li>km</li>
            `;
            break;
        case 'patok_km_point':
            tipeGeom = '<i>pointZ</i>';
            tipeAttribute = `
                <li>layer</li>
                <li>km</li>
            `;
            break;
        case 'patok_lj_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
                <li>keterangan</li>
                <li>deskripsi</li>
            `;
            break;
        case 'patok_pemandu_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'patok_row_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'patok_rmj_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'rambu_lalulintas_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'rambu_penunjukarah_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'reflektor_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'rumah_kabel_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'sta_text_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>sta</li>
            `;
            break;
        case 'tiang_listrik_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'tiang_telepon_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'vms_point':
            tipeGeom = '<i>point</i>';
            tipeAttribute = `
                <li>layer</li>
            `;
            break;
        case 'administratif_polygon':
            tipeGeom = '<i>multiPolygon</i>';
            tipeAttribute = `
                <li>txtmemo</li>
                <li>kode_prov</li>
                <li>nama_prov</li>
                <li>kode_kab</li>
                <li>nama_kab</li>
                <li>kode_kec</li>
                <li>nama_kec</li>
                <li>kode_desa</li>
                <li>nama_desa</li>
                <li>tahun</li>
            `;
            break;
        case 'data_geometrik_jalan_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>id_leger</li>
                <li>segmen_tol</li>
                <li>nama</li>
                <li>lebar_rmj</li>
                <li>gradien_kiri</li>
                <li>gradien_kanan</li>
                <li>cross_fall_kiri</li>
                <li>cross_fall_kanan</li>
                <li>super_elevasi</li>
                <li>radius</li>
                <li>terrain_kiri</li>
                <li>terrain_kanan</li>
                <li>tataguna_lahan_kiri</li>
                <li>tataguna_lahan_kanan</li>
            `;
            break;
        case 'iri_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>jalur</li>
                <li>bagian_jalan</li>
                <li>lebar</li>
                <li>segmen_tol</li>
                <li>km</li>
                <li>nilai_iri</li>
            `;
            break;
        case 'jembatan_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>nama</li>
                <li>km</li>
                <li>panjang</li>
                <li>lebar</li>
                <li>luas</li>
            `;
            break;
        case 'lapis_permukaan_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>tebal</li>
                <li>jenis</li>
            `;
            break;
        case 'lapis_pondasi_atas1_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>tebal</li>
                <li>jenis</li>
            `;
            break;
        case 'lapis_pondasi_atas2_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>tebal</li>
                <li>jenis</li>
            `;
            break;
        case 'lapis_pondasi_bawah_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>tebal</li>
                <li>jenis</li>
            `;
            break;
        case 'lhr_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>segmen_tol</li>
                <li>nama_segmen</li>
                <li>gol_i</li>
                <li>gol_ii</li>
                <li>gol_iii</li>
                <li>gol_iv</li>
                <li>gol_v</li>
            `;
            break;
        case 'ruwasja_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>keterangan</li>
            `;
            break;
        case 'segmen_konstruksi_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>bagian_jalan</li>
                <li>lebar</li>
            `;
            break;
        case 'segmen_leger_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>id_leger</li>
                <li>km</li>
            `;
            break;
        case 'segmen_perlengkapan_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>jalur</li>
            `;
            break;
        case 'segmen_seksi_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>no_ruas</li>
                <li>nama_ruas</li>
                <li>seksi</li>
                <li>keterangan</li>
                <li>km_awal</li>
                <li>km_akhir</li>
                <li>sta_awal</li>
                <li>sta_akhir</li>
                <li>x_awal</li>
                <li>x_akhir</li>
                <li>y_awal</li>
                <li>y_akhir</li>
                <li>z_awal</li>
                <li>z_akhir</li>
                <li>deskripsi_awal</li>
                <li>deskripsi_akhir</li>
            `;
            break;
        case 'segmen_tol_polygon':
            tipeGeom = '<i>multiPolygonZ</i>';
            tipeAttribute = `
                <li>segmen_tol</li>
                <li>nama_segmen</li>
            `;
            break;
        default:
            tipeGeom = '<i>null</i>';
            tipeAttribute = `
                <li><i>null</i></li>
            `;
    }

    $('#tipe-geom').html(tipeGeom);
    $('#tipe-attribute').html(tipeAttribute);
});