<?php 
    include_once("config.php");

    $name = $_POST['name'];
    $brand_id = $_POST['brand_id'];
    $image_path = $_POST['image_path'];
    $color = $_POST['color'];
    $description = $_POST['desc'];
    $create_time = date("Y-m-d H:i:s");
    $update_time = date("Y-m-d H:i:s");
    $stok = (int)$_POST['stok'];

    $sql = "INSERT INTO cars(name,brand_id,image_path,color,description,create_time, update_time, stock) VALUES('$name','$brand_id','$image_path','$color','$description','$create_time','$update_time','$stok')";
    
    $query = mysqli_query($mysqli, $sql);
    
    if($query){
        echo json_encode([
            'code' => 200,
            'message' => 'berhasil menyimpan'
        ]);
    }
?>