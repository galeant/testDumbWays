<html>
    <head>
        <script src="https://code.highcharts.com/maps/highmaps.js"></script>
        <script src="https://code.highcharts.com/maps/modules/map.js"></script>
        <script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>
        <script src="https://code.highcharts.com/mapdata/custom/world-continents.js"></script>
        <script src="https://code.highcharts.com/mapdata/custom/world.js"></script>
    </head>
    <body>
    <div id="container" class="container-fluid" style="margin-top:7px">
        
    </div>
    <script>
        // var data = [
        //     {
        //         "hc-key": "id-3700",
        //         "value": 0
        //     },
        //     {
        //         // Aceh
        //         "hc-key": "id-ac",
        //         "value": 4.48
        //     },
        //     {
        //         // Sumatera Utara
        //         "hc-key": "id-su",
        //         "value": 12.98
        //     },
        //     {
        //         // Sumatera Barat
        //         "hc-key": "id-sb",

        //         "value": 4.84
        //     },
        //     {
        //         // Riau
        //         "hc-key": "id-ri",
        //         "value": 5.54
        //     },
        //     {
        //         // Kepulauan Riau
        //         "hc-key": "id-kr",
        //         "value": 1.69
        //     },
        //     {
        //         // Jambi
        //         "hc-key": "id-ja",
        //         "value": 3.09
        //     },
        //     {
        //         // Bengkulu
        //         "hc-key": "id-be",
        //         "value": 1.71
        //     },
        //     {
        //         // Sumatera Selatan
        //         "hc-key": "id-sl",
        //         "value": 7.44
        //     },
        //     {
        //         // Bangka Belitung
        //         "hc-key": "id-bb",
        //         "value": 1.22
        //     },
        //     {
        //         // Lampung
        //         "hc-key": "id-1024",
        //         "value": 7.59
        //     },
        //     {
        //         // Banten
        //         "hc-key": "id-bt",
        //         "value": 10.54
        //     },
        //     {
        //         // Jakarta
        //         "hc-key": "id-jk",
        //         "value": 9.59
        //     },
        //     {
        //         // Jawa Barat
        //         "hc-key": "id-jr",
        //         "value": 43.02
        //     },
        //     {
        //         // Jawa Tengah
        //         "hc-key": "id-jt",
        //         "value": 32.38
        //     },
        //     {
        //         // Jawa Timur
        //         "hc-key": "id-ji",
        //         "value": 37.47
        //     },
        //     {
        //         // Yogyakarta
        //         "hc-key": "id-yo",
        //         "value": 3.45
        //     },
        //     {
        //         // Bali
        //         "hc-key": "id-ba",
        //         "value": 3.89
        //     },
        //     {
        //         // Nusa Tenggara Barat
        //         "hc-key": "id-nb",
        //         "value": 4.49
        //     },
        //     {
        //         // Nusa Tenggara Timur
        //         "hc-key": "id-nt",
        //         "value": 4.68
        //     },
        //     {
        //         // Kalimantan Barat
        //         "hc-key": "id-kb",
        //         "value": 4.39
        //     },
        //     {
        //         // Kalimantan Timur
        //         "hc-key": "id-ki",
        //         "value": 3.55
        //     },
        //     {
        //         // Kalimantan Tengah
        //         "hc-key": "id-kt",
        //         "value": 2.2
        //     },
        //     {
        //         // Kalimantan Selatan
        //         "hc-key": "id-ks",
        //         "value": 3.63
        //     },
        //     {
        //         // Sulawesi Utara
        //         "hc-key": "id-sw",
        //         "value": 2.26
        //     },
        //     {
        //         // Sulawesi Tengah
        //         "hc-key": "id-st",
        //         "value": 2.63
        //     },
        //     {
        //         // Gorontalo
        //         "hc-key": "id-go",
        //         "value": 1.04
        //     },
        //     {
        //         // Sulawesi Barat
        //         "hc-key": "id-sr",
        //         "value": 1.16
        //     },
            
        //     {
        //         // Sulawesi Selatan
        //         "hc-key": "id-se",
        //         "value": 8.03
        //     },
        //     {
        //         "hc-key": "id-sg",
        //         "value": 22
        //     },
        //     {
        //         // Maluku Utara
        //         "hc-key": "id-la",
        //         "value": 1.03
        //     },
        //     {
        //         // Maluku
        //         "hc-key": "id-ma",
        //         "value": 1.53
        //     },
        //     {
        //         // Papua Barat
        //         "hc-key": "id-ib",
        //         "value": 0.76
        //     }, 
        //     {
        //         // Papua Barat
        //         "hc-key": "id-pa",
        //         "value": 2.85
        //     }
        // ];
        var data = [
            {
                "hc-key": "id",
                "value": 12.38,
                "hasta": 21
            },{
                "hc-key": "af",
                "value": 32.38,
                "hasta":99
            }
        ];
    // Initiate the chart
    var chart = new Highcharts.Map('container', {  
        legend: {
            enabled: false
        },
        title : {
            text : 'Jumlah Penduduk Indonesia Tahun 2010'
        },
        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'top'
            }
        },
        series : [{
            data : data,
            mapData: Highcharts.maps['custom/world'],
            joinBy: 'hc-key',
            name: 'Jumlah Penduduk',
            states: {
                hover: {
                    color: '#BADA55'
                }
            },
            dataLabels: {
                enabled: false,
                format: '{point.name}'
            },
			tooltip: {
                formatter: function(){
                    var s = this.key + '<br/>';
                    s += 'Value:' + this.point.value + '<br/>';
                    s += 'Hasta:' + this.point.hasta;
                    return s;
                }
            }
        }]
    });
    </script>
    </body>
</html>

