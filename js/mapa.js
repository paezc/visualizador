
// centro el mapa
var map = L.map('mapid').setView([-40, -59], 4);
// argenmap
var argenmap = L.tileLayer
            ('https://wms.ign.gob.ar/geoserver/gwc/service/tms/1.0.0/capabaseargenmap@EPSG%3A3857@png/{z}/{x}/{-y}.png', 
                {
                attribution: 'ACCIONAR | <a href="http://www.ign.gob.ar/AreaServicios/Argenmap/IntroduccionV2" target="_blank">Instituto Geográfico Nacional</a> + <a href="http://www.osm.org/copyright" target="_blank">OpenStreetMap</a>',
                minZoom: 3,
                maxZoom: 21
                }
            ).addTo(map);
// osm
/*
var osm = L.tileLayer
            ('https://tile.openstreetmap.org/{z}/{x}/{y}.png', 
                {
                attribution: 'ACCIONAR | <a href="https://www.osm.org/copyright" target="_blank">OpenStreetMap</a>',
                minZoom: 3,
                maxZoom: 21
                }
            ).addTo(map);



var map = L.map('mapid').setView([-40, -59], 4);
// osm
var osm = L.tileLayer
            ('https://tile.openstreetmap.org/{z}/{x}/{y}.png', 
                {
                attribution: 'ACCIONAR | <a href="https://www.osm.org/copyright" target="_blank">OpenStreetMap</a>',
                minZoom: 3,
                maxZoom: 21
                }
            ).addTo(map);

// argenmap gris
var argenmapGris = L.tileLayer
            ('https://wms.ign.gob.ar/geoserver/gwc/service/tms/1.0.0/mapabase_gris@EPSG%3A3857@png/{z}/{x}/{-y}.png', 
                {
                attribution: 'ACCIONAR | <a href="https://www.ign.gob.ar/AreaServicios/Argenmap/IntroduccionV2" target="_blank">Instituto Geográfico Nacional</a> + <a href="https://www.osm.org/copyright" target="_blank">OpenStreetMap</a>',
                minZoom: 3,
                maxZoom: 21
                }
            ).addTo(map);

var baseMaps = {
    'OSM' : osm,
    'Argenmap Gris': argenmapGris,
    'Argenmap' : argenmap
};
*/