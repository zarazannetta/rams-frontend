var url = "http://117.53.47.111:91/api/data/aset/";

function getAdministratifPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "administratif_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: "#478CCF"
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Administratif</div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">Provinsi</span>: ${layer.feature.properties.nama_prov}</div>
                        <div class="mb-1"><span class="font-weight-bold">Kabupaten/Kota</span>: ${layer.feature.properties.nama_kab}</div>
                        <div class="mb-1"><span class="font-weight-bold">Desa</span>: ${layer.feature.properties.nama_desa}</div>
                    </div>
                </div>`;
    });
}

function getDataGeometrikJalanPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "data_geometrik_jalan_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: getDataGeometrikJalanColor(feature.properties.segmen_tol)
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Data Geometrik Jalan</div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">Segmen</span>: ${layer.feature.properties.segmen_tol}</div>
                        <div class="mb-1"><span class="font-weight-bold">Nama Segmen</span>: ${layer.feature.properties.nama}</div>
                        <div class="mb-1">
                            <div class="font-weight-bold mb-1">Data Geometrik:</div>
                            <table class="table table-bordered table-sm">
                                <tbody>
                                    <tr>
                                        <td>Lebar Rumija</td>
                                        <td>${layer.feature.properties.lebar_rmj}</td>
                                    </tr>
                                    <tr>
                                        <td>Gradien Kiri</td>
                                        <td>${layer.feature.properties.gradien_kiri}</td>
                                    </tr>
                                    <tr>
                                        <td>Gradien Kanan</td>
                                        <td>${layer.feature.properties.gradien_kanan}</td>
                                    </tr>
                                    <tr>
                                        <td>Cross Fall Kiri</td>
                                        <td>${layer.feature.properties.cross_fall_kiri}</td>
                                    </tr>
                                    <tr>
                                        <td>Cross Fall Kanan</td>
                                        <td>${layer.feature.properties.cross_fall_kanan}</td>
                                    </tr>
                                    <tr>
                                        <td>Super Elevasi</td>
                                        <td>${layer.feature.properties.super_elevasi}</td>
                                    </tr>
                                    <tr>
                                        <td>Radius</td>
                                        <td>${layer.feature.properties.radius}</td>
                                    </tr>
                                    <tr>
                                        <td>Terrain Kiri</td>
                                        <td>${layer.feature.properties.terrain_kiri}</td>
                                    </tr>
                                    <tr>
                                        <td>Terrain Kanan</td>
                                        <td>${layer.feature.properties.terrain_kanan}</td>
                                    </tr>
                                    <tr>
                                        <td>Tataguna Lahan Kiri</td>
                                        <td>${layer.feature.properties.tataguna_lahan_kiri}</td>
                                    </tr>
                                    <tr>
                                        <td>Tataguna Lahan Kanan</td>
                                        <td>${layer.feature.properties.tataguna_lahan_kanan}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>`;
    });
}

function getDataGeometrikJalanColor(data) {
    switch (data) {
        case "MAIN ROAD":
            return "#4793AF";
        case "RAMP":
            return "#FFC470";
        case "AKSES":
            return "#DD5746";
        default:
            return "black";
    }
}

function getIRIPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "iri_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: getIRIColor(feature.properties.nilai_iri)
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header text-center">
                        ${layer.feature.properties.sgm_tol}
                        ${layer.feature.properties.km !== "-" ? "<br/> KM " + layer.feature.properties.km : ""}
                    </div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">Jalur</span>: ${layer.feature.properties.jalur}</div>
                        <div class="mb-1"><span class="font-weight-bold">Bagian Jalan</span>: ${layer.feature.properties.bagian_jalan}</div>
                        <div class="mb-1"><span class="font-weight-bold">Lebar</span>: ${layer.feature.properties.lebar}</div>
                        <div class="mb-1">
                            <div class="font-weight-bold mb-1">Nilai IRI:</div> 
                            <h3 class="text-center font-weight-bold border mb-0">${layer.feature.properties.nilai_iri}</h3>
                        </div>
                    </div>
                </div>`;
    });
}

// STANDAR IRI
// IRI < 4: Baik
// IRI 4-8: Sedang
// IRI 8-12: Rusak Ringan
// IRI > 12: Rusak Berat 
function getIRIColor(data) {
    return data > 12 ? "#dc3545" : data > 8 ? "#fd7e14" : data > 4 ? "#ffc107" : "#198754";
}

function getJembatanPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "jembatan_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: "#EB5B00"
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Jembatan</div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">Nama</span>: ${layer.feature.properties.nama}</div>
                        <div class="mb-1"><span class="font-weight-bold">Lokasi</span>: KM ${layer.feature.properties.km}</div>
                        <div class="mb-1"><span class="font-weight-bold">Panjang</span>: ${layer.feature.properties.panjang}</div>
                        <div class="mb-1"><span class="font-weight-bold">Lebar</span>: ${layer.feature.properties.lebar}</div>
                        <div class="mb-1"><span class="font-weight-bold">Luas</span>: ${layer.feature.properties.luas}</div>
                    </div>
                </div>`;
    });
}

function getLapisPermukaanPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "lapis_permukaan_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: getLapisPermukaanColor(feature.properties.jenis)
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Lapis Permukaan</div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">Jenis</span>: ${layer.feature.properties.jenis}</div>
                        <div class="mb-1"><span class="font-weight-bold">Tebal</span>: ${layer.feature.properties.tebal}</div>
                    </div>
                </div>`;
    });
}

function getLapisPermukaanColor(data) {
    switch (data) {
        case "BETON":
            return "#009FBD";
        case "AC-BC":
            return "#4A249D";
        case "MCB":
            return "#F9E2AF";
        default:
            return "black";
    }
}

function getLapisPondasiAtas1PolygonLayer() {
    return new L.GeoJSON.AJAX(url + "lapis_pondasi_atas1_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: getLapisPondasiAtas1Color(feature.properties.jenis)
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Lapis Pondasi Atas 1</div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">Jenis</span>: ${layer.feature.properties.jenis}</div>
                        <div class="mb-1"><span class="font-weight-bold">Tebal</span>: ${layer.feature.properties.tebal}</div>
                    </div>
                </div>`;
    });
}

function getLapisPondasiAtas1Color(data) {
    switch (data) {
        case "AGG-A":
            return "#124076";
        case "JEMBATAN":
            return "#87A922";
        case "LEAN CONCRETE":
            return "#FAA300";
        default:
            return "black";
    }
}

function getLapisPondasiAtas2PolygonLayer() {
    return new L.GeoJSON.AJAX(url + "lapis_pondasi_atas2_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: getLapisPondasiAtas2Color(feature.properties.jenis)
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Lapis Pondasi Atas 2</div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">Jenis</span>: ${layer.feature.properties.jenis}</div>
                        <div class="mb-1"><span class="font-weight-bold">Tebal</span>: ${layer.feature.properties.tebal}</div>
                    </div>
                </div>`;
    });
}

function getLapisPondasiAtas2Color(data) {
    switch (data) {
        case "AGG-A":
            return "#124076";
        case "JEMBATAN":
            return "#87A922";
        case "BOX CULVERT":
            return "#EE4266";
        default:
            return "black";
    }
}

function getLapisPondasiBawahPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "lapis_pondasi_bawah_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: getLapisPondasiBawahColor(feature.properties.jenis)
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Lapis Pondasi Bawah</div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">Jenis</span>: ${layer.feature.properties.jenis}</div>
                        <div class="mb-1"><span class="font-weight-bold">Tebal</span>: ${layer.feature.properties.tebal}</div>
                    </div>
                </div>`;
    });
}

function getLapisPondasiBawahColor(data) {
    switch (data) {
        case "BOX CULVERT":
            return "#114232";
        case "JEMBATAN":
            return "#87A922";
        case "TANAH PILIHAN":
            return "#FCDC2A";
        default:
            return "black";
    }
}

function getLHRPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "lhr_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: "#007F73"
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header text-center">Lintas Harian Rata-Rata</div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">Segmen</span>: ${layer.feature.properties.segmen_tol}</div>
                        <div class="mb-1"><span class="font-weight-bold">Nama Segmen</span>: ${layer.feature.properties.nama_segmen}</div>
                        <div class="mb-1">
                            <div class="font-weight-bold mb-1">Jumlah LHR:</div>
                            <table class="table table-bordered table-sm">
                                <tbody>
                                    <tr>
                                        <td>Gol I</td>
                                        <td>${layer.feature.properties.gol_i}</td>
                                    </tr>
                                    <tr>
                                        <td>Gol II</td>
                                        <td>${layer.feature.properties.gol_ii}</td>
                                    </tr>
                                    <tr>
                                        <td>Gol III</td>
                                        <td>${layer.feature.properties.gol_iii}</td>
                                    </tr>
                                    <tr>
                                        <td>Gol IV</td>
                                        <td>${layer.feature.properties.gol_iv}</td>
                                    </tr>
                                    <tr>
                                        <td>Gol V</td>
                                        <td>${layer.feature.properties.gol_v}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>`;
    });
}

function getRuwasjaPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "ruwasja_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: "#FFDE4D"
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Ruwasja</div>
                    <div class="popup-body">
                        Ruas Bakauheni - Terbanggi Besar
                    </div>
                </div>`;
    });
}

function getSegmenKonstruksiPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "segmen_konstruksi_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: getSegmenKonstruksiColor(feature.properties.bagian_jalan)
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Segmen Konstruksi</div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">Bagian Jalan</span>: ${layer.feature.properties.bagian_jalan}</div>
                        <div class="mb-1"><span class="font-weight-bold">Lebar</span>: ${layer.feature.properties.lebar}</div>
                    </div>
                </div>`;
    });
}

function getSegmenKonstruksiColor(data) {
    switch (data) {
        case "BAHU LUAR":
            return "#071952";
        case "BAHU DALAM":
            return "#FFB200";
        case "LAJUR 1":
            return "#81A263";
        case "LAJUR 2":
            return "#365E32";
        case "LAJUR TAMBAHAN":
            return "#9CAFAA";
        case "MEDIAN":
            return "#E4003A";
        default:
            return "black";
    }
}

function getSegmenLegerPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "segmen_leger_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: getSegmenLegerColor(feature.properties.id_leger)
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Segmen Leger</div>
                    <div class="popup-body">
                        <div class="mb-1"><span class="font-weight-bold">ID Leger</span>: ${layer.feature.properties.id_leger}</div>
                        <div class="mb-1"><span class="font-weight-bold">Lokasi</span>: KM ${layer.feature.properties.km}</div>
                    </div>
                </div>`;
    });
}

function getSegmenLegerColor(data) {
    var code = data.substring(0, 1);
    switch (code) {
        case "M":
            return "#4793AF";
        case "R":
            return "#FFC470";
        case "A":
            return "#DD5746";
        default:
            return "black";
    }
}

function getSegmenPerlengkapanPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "segmen_perlengkapan_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: getSegmenPerlengkapanColor(feature.properties.jalur)
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">Segmen Perlengkapan</div>
                    <div class="popup-body">
                        ${layer.feature.properties.jalur}
                    </div>
                </div>`;
    });
}

function getSegmenPerlengkapanColor(data) {
    switch (data) {
        case "JALUR KANAN":
            return "#008DDA";
        case "JALUR KIRI":
            return "#FF204E";
        case "MEDIAN":
            return "#FFF455";
        default:
            return "black";
    }
}

function getSegmenTolPolygonLayer() {
    return new L.GeoJSON.AJAX(url + "segmen_tol_polygon", {
        style: function (feature) {
            return {
                weight: 1,
                color: "black",
                fillOpacity: 1,
                fillColor: getSegmenTolColor(feature.properties.segmen_tol)
            }
        }
    })
    .bindPopup(function (layer) {
        return `<div class="custom-map-popup">
                    <div class="popup-header">${layer.feature.properties.segmen_tol}</div>
                    <div class="popup-body">
                        ${layer.feature.properties.nama_segmen}
                    </div>
                </div>`;
    });
}

function getSegmenTolColor(data) {
    switch (data) {
        case "MAINROAD":
            return "#4793AF";
        case "RAMP":
            return "#FFC470";
        case "AKSES":
            return "#DD5746";
        default:
            return "black";
    }
}