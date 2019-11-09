<!DOCTYPE html>
<html>
<head>
<title>MEMBUAT GRAFIK MAP DENGAN PLUGIN HIGHCHART</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://code.highcharts.com/maps/highmaps.js"></script>
<script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="http://code.highcharts.com/mapdata/countries/id/id-all.js"></script>
<style type="text/css">
.container { margin: auto; padding: 5px; width: 800px; border: 2px solid #DBDBDB; }
</style>
</head>
<body>
<div class="container">
<div class="grafik" style="width:100%; height:400px;"></div>
</div>
<?php
 $array_kode_iso = array(
  array('iso'=>'ID-aa','name'=>'Aceh', 'code'=>11),
  array('iso'=>'ID-SU','name'=>'Sumatera Utara', 'code'=>12),
  array('iso'=>'ID-SB','name'=>'Sumatera Barat', 'code'=>13),
  array('iso'=>'ID-RI','name'=>'Riau', 'code'=>14),
  array('iso'=>'ID-JA','name'=>'Jambi', 'code'=>15),
  array('iso'=>'ID-SL','name'=>'Sumatera Selatan', 'code'=>16),
  array('iso'=>'ID-BE','name'=>'Bengkulu', 'code'=>17),
  array('iso'=>'ID-1024','name'=>'Lampung', 'code'=>18),
  array('iso'=>'ID-BB','name'=>'Kepulauan Bangka Belitung', 'code'=>19),
  array('iso'=>'ID-KR','name'=>'Kepulauan Riau', 'code'=>21),
  array('iso'=>'ID-JK','name'=>'Daerah Khusus Ibukota Jakarta', 'code'=>31),
  array('iso'=>'ID-JR','name'=>'Jawa Barat', 'code'=>32),
  array('iso'=>'ID-JT','name'=>'Jawa Tengah', 'code'=>33),
  array('iso'=>'ID-YO','name'=>'Daerah Istimewa Yogyakarta', 'code'=>34),
  array('iso'=>'ID-JI','name'=>'Jawa Timur', 'code'=>35),
  array('iso'=>'ID-BT','name'=>'Banten', 'code'=>36),
  array('iso'=>'ID-BA','name'=>'Bali', 'code'=>51),
  array('iso'=>'ID-NB','name'=>'Nusa Tenggara Barat', 'code'=>52),
  array('iso'=>'ID-NT','name'=>'Nusa Tenggara Timur', 'code'=>53),
  array('iso'=>'ID-KB','name'=>'Kalimantan Barat', 'code'=>61),
  array('iso'=>'ID-KT','name'=>'Kalimantan Tengah', 'code'=>62),
  array('iso'=>'ID-KS','name'=>'Kalimantan Selatan', 'code'=>63),
  array('iso'=>'ID-KI','name'=>'Kalimantan Timur', 'code'=>64),
  array('iso'=>'ID-KI','name'=>'Kalimantan Utara', 'code'=>65),
  array('iso'=>'ID-SW','name'=>'Sulawesi Utara', 'code'=>71),
  array('iso'=>'ID-ST','name'=>'Sulawesi Tengah', 'code'=>72),
  array('iso'=>'ID-SE','name'=>'Sulawesi Selatan', 'code'=>73),
  array('iso'=>'ID-SG','name'=>'Sulawesi Tenggara', 'code'=>74),
  array('iso'=>'ID-GO','name'=>'Gorontalo', 'code'=>75),
  array('iso'=>'ID-SR','name'=>'Sulawesi Barat', 'code'=>76),
  array('iso'=>'ID-MA','name'=>'Maluku', 'code'=>81),
  array('iso'=>'ID-LA','name'=>'Maluku Utara', 'code'=>82),
  array('iso'=>'ID-IB','name'=>'Papua Barat', 'code'=>91),
  array('iso'=>'ID-PA','name'=>'Papua', 'code'=>94)
 ); 

 $array_datas = array();
 foreach($array_kode_iso as $key=>$val){
  array_push($array_datas, array('hc-key'=>strtolower($val['iso']), 'name'=>$val['name'], 'value'=>rand(1,100)));
 }
?>
<script type="text/javascript">
$('.grafik').highcharts('Map', {
 credits: {
  enabled: false
 }, 
 title: {
  text: 'CONTOH RANDOM VALUES'
 },
 subtitle: {
  text: 'TAHUN 2015'
 },
 mapNavigation: {
  enabled: true,
 },
 colorAxis: {
  minColor: '#FFFFFF',
  maxColor: '#FF0000'
 },
 series: [{
  data: <?php echo json_encode($array_datas); ?>,
  mapData: Highcharts.maps['countries/id/id-all'],
  joinBy: 'hc-key',
  animation: true,
  states: {
   hover: {
    color: '#4679BD'
   }
  },
  dataLabels: {
   enabled: false,
   format: '{point.name}'
  }
 }]
});
</script>
</body>
</html>
