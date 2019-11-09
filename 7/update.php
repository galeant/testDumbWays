<?php 
    include_once("config.php");

    $id = $_POST['id'];
    $name = $_POST['name'];
    $brand_id = $_POST['brand_id'];
    $image_path = $_POST['image_path'];
    $color = $_POST['color'];
    $description = $_POST['desc'];
    $update_time = date("Y-m-d H:i:s");
    $stok = (int)$_POST['stok'];
    
    $sql = "update cars set name = '".$name."',brand_id = '".$brand_id."',image_path = '".$image_path."',color = '".$color."',brand_id = '".$description."',update_time = '".$update_time."',stock = ".$stok." where id = ".$id."";
    // var_dump($sql);die();
    $query = mysqli_query($mysqli, $sql);

    if($query){
        echo json_encode([
            'code' => 200,
            'message' => 'berhasil di update'
        ]);
    }
?>