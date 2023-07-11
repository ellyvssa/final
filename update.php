<?php
include "config.php";
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama_pekerja = $_POST['nama_pekerja'];
        $no_kp = $_POST['no_kp'];
        $no_hp = $_POST['no_hp'];
        $jantina = $_POST['jantina'];
        
       
        $sql = "UPDATE `info_pekerja` SET `nama_pekerja`='$nama_pekerja',`no_kp`='$no_kp',`no_hp`='$no_hp',`jantina`='$jantina' WHERE `id`='$id'";


        $result = ($sql);


        if ($result == TRUE) {


             echo "<script>alert('Data change sucsessfully');
       window.location='view.php'</script>"
;


        }else{


            echo "Error:" . $sql . "<br>" . $conn->error;


        }


    }


if (isset($_GET['id'])) {


    $id = $_GET['id'];


    $sql = "SELECT * FROM `info_pekerja` WHERE `id`='$id'";


    $result = $conn->query($sql);


    if ($result->num_rows > 0) {        


        while ($row = $result->fetch_assoc()) {


            $nama_pekerja = $row['nama_pekerja'];


            $no_kp = $row['no_kp'];


            $no_hp = $row['no_hp'];


            $jantina  = $row['jantina'];


        }


    ?>


        <h2>UPDATE MAKLUMAT PEKERJA </h2>


        <form action="" method="post">


          <fieldset>


            <legend>Personal information:</legend>


            NAMA:<br>


            <input type="text" name="nama_pekerja" value="<?php echo $nama_pekerja; ?>">


            <input type="hidden" name="user_id" value="<?php echo $id; ?>">


            <br>


            NO KP:<br>


            <input type="text" name="no_kp" value="<?php echo $no_kp; ?>">


            <br>


            NO HP:<br>


            <input type="text" name="no_hp" value="<?php echo $no_hp; ?>">


            <br>

            Jantina:<br>


            <input type="radio" name="jantina" value="lelaki" <?php if($jantina == 'lelaki'){ echo "checked";} ?> >Lelaki


            <input type="radio" name="jantina" value="perempuan" <?php if($jantina == 'perempuan'){ echo "checked";} ?>>Perempuan


            <br><br>


            <input type="submit" value="Update" name="update">


          </fieldset>


        </form>


        </body>


        </html>


    <?php


    } else{


        header('Location: view.php');


    }


}


?>
