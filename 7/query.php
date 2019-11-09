<?php 

// query untuk select all car
$list_car = "SELECT cr.*, br.name as brand_name FROM cars cr left join brand br on cr.brand_id = br.id";

// query untuk select 1 mobil dengan pembelinya dengan acuan car_id = 1
$list_car_with_cus = "select cr.*, cus.name as cus_name, cus.email as cus_email, cus.address as cus_address from cars cr join customer cus on cr.customer_id = cus.id where cr.id = 1";

// query untuk menampilkan data mobil per brand
$mobil_per_brand = [
    'Step1' => 'select * from brand',
    'Step2'=> 'select * from cars where brand_id = $brand_id'//(di dapat darai looping data brand)
];

?>