<?php
// $wfsUrl = file_get_contents("http://geoportal.slemankab.go.id/geoserver/geonode/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geonode:analisis_resiko_bencana_gunung_api&outputFormat=json");

# Ubah URL pada file_get_contents sesuai alamat file pada geoserver
$wfsUrl = file_get_contents("http://localhost:8080/geoserver/ne/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=ne%3ATEMATIK_JUMLAHPENDUDUK_Proj&maxFeatures=50&outputFormat=application%2Fjson");
echo ($wfsUrl);

# Jika terdapat &maxFeatures=50 pada url wfs geojson, dihapus supaya jumlah feature tidak dibatasi
?>