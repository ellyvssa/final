<?php
include 'config.php';
if (isset($_POST['add'])){
    $ic=$_POST['ic'];
    $nama=$_POST['nama']; 
    $hp=$_POST['hp'];
    $jantina=$_POST['jantina'];


    $sql="insert into pekerja (ic,nama,hp,jantina)
    values('$ic','$nama','$hp', '$jantina' )";
    $result=mysqli_query($conn,$sql);
    if($result){
       echo "<script>alert('Data inserted sucsessfully');
       window.location='view.php'</script>"
;
    }else{
        die(mysqli_error($conn));
    }
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>document</title>
  </head>


  <body>
    <div class= "container my-5">
    <form method="post">
    <div class="form-group">  
    <label>IC</label>
    <input type="text" class="form-control"
    placeholder="Enter your IC" name="ic" autocomplete="off">
  </div>  
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control"
    placeholder="Enter your name" name="nama">
  </div>
  <div class="form-group">
    <label>HP</label>
    <input type="text" class="form-control"
    placeholder="Enter your HP" name="hp">
  </div><br>
  <div class="form-group">
    <label>Jantina</label>
    <select class="form-select" aria-label="Default select example" name="jantina">
  <option selected>--Sila Pilih--</option>
  <option value="1">Lelaki</option>
  <option value="2">Perempuan</option>
 
</select>
    
</select>
  </div><br>

  <button type="submit" class="btn btn-primary" name="add">Add</button>
  
</form>


    </div>


  </body>
</html>

