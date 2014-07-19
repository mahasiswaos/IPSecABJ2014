<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>


<!-- menampilkan ip address dari mikrotik-->
<?php
require './interface.php';
require './connect.php';
$API->write("/ip/ipsec/peer/getall");
$hasil = $API->read();
//
//echo "<pre>";
//print_r($hasil);
//echo "</pre>";


?>

<div class="container">
    <br/>
    <a class="btn btn-info" href="add.php">Tambah</a>
    <br/> <br/>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Address</th>
                <th>Local Address</th>
                <th>Waktu</th>
                <th>LifeByte</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $val) { ?>
                <tr>
                    <td><?php echo $val['.id'] ?></td>
                    <td><?php echo $val['address'] ?></td>
                    <td><?php echo $val['local-address'] ?></td>
                    <td><?php echo $val['lifetime'] ?></td>
                    <td><?php echo $val['lifebytes'] ?></td>
                   
                    <td>
                        <a href="editt.php?id=<?php echo $val['.id'] ?>" class="btn btn-info">
                            <i class="glyphicon glyphicon-cog"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $val['.id'] ?>">
                            <i class="glyphicon glyphicon-trash"></i>
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    </div>
</div>
