<?php 
include "config.php"; 
if (isset($_GET['no_kp'])) {
    $no_kp = $_GET['no_kp'];
    $sql = "DELETE FROM `info_pekerja WHERE `nama_pekerja`='$nama_pekerja',`no_kp`='$no_kp',`no_hp`='$no_hp',`jantina`='$jantina' ";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        echo "<script>alert('Data deleted sucsessfully')
       window.location='view.php'</script>";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 
?>