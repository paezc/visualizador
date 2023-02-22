function baseMapArgenmap() {
    var argenmap = L.tileLayer
            ('https://wms.ign.gob.ar/geoserver/gwc/service/tms/1.0.0/capabaseargenmap@EPSG%3A3857@png/{z}/{x}/{-y}.png', 
                {
                attribution: 'ACCIONAR | <a href="http://www.ign.gob.ar/AreaServicios/Argenmap/IntroduccionV2" target="_blank">Instituto Geográfico Nacional</a> + <a href="http://www.osm.org/copyright" target="_blank">OpenStreetMap</a>',
                minZoom: 3,
                maxZoom: 21
                }
            ).addTo(map);
}