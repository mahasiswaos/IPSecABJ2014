<<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>


<?php
require './connect.php';
//
$id = $_GET['id'];
//
$API->write("/ip/ipsec/user/remove", false);
$API->write("=.id=" . $id);
$del = $API->read();



?>

<br/>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            Informasi penghapusan User IPsec
        </div>
        <div class="panel-body">
            user dengan ID <strong><?php echo $id ?></strong> 
            telah di HAPUS pada Mikrotik.
            <br/>
            <br/>
            <a class="btn btn-info" href="tampil2.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>

