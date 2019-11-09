<?php 
    include_once("config.php");

    $id = $_POST['id'];
    $sql = "delete from cars where id =".$id."";
    $query = mysqli_query($mysqli, $sql);

    if($query){
        echo json_encode([
            'code' => 200,
            'message' => 'berhasil di hapus'
        ]);
    }
?>