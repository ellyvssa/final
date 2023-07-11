<?php
include "config.php";
$sql = "SELECT * FROM info_pekerja";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>MAKLUMAT PEKERJA</h2>
<table class="table">
    <thead>
        <tr>
        <th>NAMA PEKERJA</th>
        <th>NO KP</th>
        <th>NO HP</th>
        <th>JANTINA</th>
        
    </tr>
    </thead>
    <tbody>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    
                    <td><?php echo $row['nama_pekerja']; ?></td>
                    <td><?php echo $row['no_kp']; ?></td>
                    <td><?php echo $row['no_hp']; ?></td>
                    <td><?php echo $row['jantina']; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>
                    ">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['no_kp']; ?>">Delete</a></td>


                    </tr>                      


        <?php       }


            }
        ?>                
    </tbody>
</table>
<a class="btn btn-info" href="infopekerja.php ">ADD</a>

    </div>
</body>
</html>
