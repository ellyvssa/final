<?php
include 'config.php';
if (isset($_POST['add'])){
    $nama=$_POST['nama'];
    $password=$_POST['password']; 
    $ic=$_POST['ic'];
    $jantina=$_POST['jantina'];


    $sql="insert into logmasuk (nama,password,ic,jantina)
    values('$nama','$password','$ic', '$jantina' )";
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
    <label>NAMA</label>
    <input type="text" class="form-control"
    placeholder="Enter your Name" name="nama" autocomplete="off">
  </div>  
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control"
    placeholder="Enter your password" name="password">
  </div>
  <div class="form-group">
    <label>IC</label>
    <input type="text" class="form-control"
    placeholder="Enter your IC" name="ic">
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

