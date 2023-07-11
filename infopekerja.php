<?php
include "config.php";
  if (isset($_POST['submit'])) {
  
    $nama_pekerja = $_POST['nama_pekerja'];
    $no_kp = $_POST['no_kp'];
    $no_hp = $_POST['no_hp'];
    $jantina = $_POST['jantina'];


    $sql = "INSERT INTO info_pekerja (id, nama_pekerja, no_kp, no_hp, jantina)
    values ('$id','$nama_pekerja','$no_kp','$no_hp','$jantina')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
     echo "<script>alert('Data inserted sucsessfully');
       window.location='view.php'</script>"
;
    }else{
      echo "Error:". $sql . "<br>". $conn->error;


    }
    $conn->close();


  }
?>


<!DOCTYPE html>
<html>
<body>
    <h2>MAKLUMAT PEKERJA</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Personal information:</legend>
            IC:<br>
            <input type="text" name="no_kp">
            <br>
            NAMA:<br>
            <input type="text" name="nama_pekerja">
            <br>
            HP:<br>
            <input type="text" name="no_hp">
            <br>
            JANTINA:<br>
            <input type="radio" name="jantina" value="lelaki">LELAKI
            <input type="radio" name="jantina" value="perempuan">PEREMPUAN
            <br><br>
            <input type="submit" name="submit" value="submit">


        </fieldset>


    </form>


</body>


</html>
