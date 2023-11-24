<?php
// $wfsUrl =
// file_get_contents("http://geoportal.slemankab.go.id/geoserver/geonode/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geonode:analisis_resiko_bencana_gunung_api&outputFormat=json");

# Ubah URL pada file_get_contents sesuai alamat file pada geoserver
$wfsUrl =
file_get_contents("http://localhost/geoserver/kalsel/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=kalsel%3Ahotspot_style2&outputFormat=application%2Fjson");

header('Content-type: application/json');
echo ($wfsUrl);
?>