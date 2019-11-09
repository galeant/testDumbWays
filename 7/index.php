<?php

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT cr.*, br.name as brand_name FROM cars cr left join brand br on cr.brand_id = br.id");
$data_brand = mysqli_query($mysqli, "SELECT * from brand");
$data_brand   = $data_brand->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <button type="button" class="btn btn-primary mt-1 ml-1" data-toggle="modal" data-target="#myModal">Tambah</button>
  <div class="row mb-1" >
      <?php while($data = mysqli_fetch_array($result)) {  ?>
        <div class="col-md-3 mt-1 mr-1 ml-1">
          <div class="card" style="width: 18rem;">
          <img src="<?php echo $data['image_path'] ?>" class="card-img-top" alt="<?php echo $data['name'] ?>">
          <div class="card-body">
            <p><?php echo $data['name'] ?></p>
            
            <!-- <p class="card-text"><?php echo $data['description'] ?></p> -->
            <a href="javascript:void(0)" class="btn btn-primary mt-1 view_button" data-toggle="modal" data-target="#myModal1" data-id="<?php echo $data['id'] ?>" data-name="<?php echo $data['name'] ?>" data-gambar="<?php echo $data['image_path'] ?>" data-warna="<?php echo $data['color'] ?>" data-brand="<?php echo $data['brand_id'] ?>" data-deskripsi="<?php echo $data['description'] ?>" data-stok="<?php echo $data['stock'] ?>">Detail</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
    
  <!-- Modal create -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Mobil</label>
            <input class="form-control" id="new_mobil_name" placeholder="input nama mobil"/>
          </div>
          <div class="form-group">
            <label>Gambar Mobil</label>
            <input class="form-control" id="new_gambar_name" placeholder="input url gambar mobil"/>
          </div>
          <div class="form-group">
            <label>Warna Mobil</label>
            <input class="form-control" id="new_warna_name" placeholder="input warna mobil"/>
          </div>
          <div class="form-group">
            <label>Brand Mobil</label>
            <select class="form-control" id="new_brand_name">
              <?php foreach($data_brand as $data) {  ?>
                  <option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Deskripsi Mobil</label>
            <input class="form-control" id="new_desc_name" placeholder="input deskripsi mobil"/>
          </div>
          <div class="form-group">
            <label>Stok</label>
            <input class="form-control" id="new_stok" placeholder="input stok"/>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="new">Add</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- modal edit -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Detail Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Mobil</label>
            <input class="form-control" id="detail_mobil" />
          </div>
          <div class="form-group">
            <label>Gambar Mobil</label>
            <input class="form-control" id="detail_gambar" />
          </div>
          <div class="form-group">
            <label>Warna Mobil</label>
            <input class="form-control" id="detail_warna"/>
          </div>
          <div class="form-group">
            <label>Brand Mobil</label>
            <select class="form-control" id="detail_brand">
              <?php foreach($data_brand as $data_update) {  ?>
                  <option value="<?php echo $data_update['id'] ?>"><?php echo $data_update['name'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Deskripsi Mobil</label>
            <input class="form-control" id="detail_desc" />
          </div>
          <div class="form-group">
            <label>Stok</label>
            <input class="form-control" id="detail_stok" />
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="update_button">Update</button>
          <button type="button" class="btn btn-danger" id="delete_button">Delete</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(document).on("click",".view_button",function(){
      var id = $(this).data('id');
      var nama = $(this).data('name');
      var gambar = $(this).data('gambar');
      var warna = $(this).data('warna');
      var brand = $(this).data('brand');
      var desc = $(this).data('deskripsi');
      var stok = $(this).data('stok');
    
      $("#update_button").attr('data-id',id);
      $("#delete_button").attr('data-id',id);

      $("#detail_mobil").val(nama)
      $("#detail_gambar").val(gambar)
      $("#detail_warna").val(warna)
      $("#detail_brand").find("option[value='"+brand+"']").attr("selected","selected");
      $("#detail_desc").val(desc)
      $("#detail_stok").val(stok)
    })

    $('#myModal1').on('hidden.bs.modal', function () {
      $("#detail_brand > option").removeAttr("selected");
    })

    $(document).on("click","#new",function(){
      var nama = $("#new_mobil_name").val();
      var gambar = $("#new_gambar_name").val();
      var warna = $("#new_warna_name").val();
      var brand = $("#new_brand_name").val();
      var desc = $("#new_desc_name").val();
      var stok = $("#new_stok").val();
      $.ajax({
        method: "POST",
        url: "simpan.php",
        dataType: 'json',
        data: { 
          name: nama,
          image_path: gambar,
          color: warna,
          brand_id: brand,
          desc: desc,
          stok: stok
        }
      }).done(function( res ) {
        if(res.code === 200){
          location.reload();
        }else{
          alert(res.message)
        }
        
      });
    })

    $(document).on("click","#update_button",function(){
      var id = $(this).data("id");
      var nama = $("#detail_mobil").val();
      var gambar = $("#detail_gambar").val();
      var warna = $("#detail_warna").val();
      var brand = $("#detail_brand").val();
      var desc = $("#detail_desc").val();
      var stok = $("#detail_stok").val();

      $.ajax({
        method: "POST",
        url: "update.php",
        dataType: 'json',
        data: { 
          id: id,
          name: nama,
          image_path: gambar,
          color: warna,
          brand_id: brand,
          desc: desc,
          stok: stok
        }
      }).done(function( res ) {
        if(res.code === 200){
          location.reload();
        }else{
          alert(res.message)
        }
        
      });
    })

    $(document).on("click","#delete_button",function(){
      var id = $(this).data("id");
      
      $.ajax({
        method: "POST",
        url: "delete.php",
        dataType: 'json',
        data: { 
          id: id
        }
      }).done(function( res ) {
        if(res.code === 200){
          location.reload();
        }else{
          alert(res.message)
        }
        
      });
    })
  })
</script>
</body>
</html>
