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
$API->write("/ip/ipsec/policy/remove", false);
$API->write("=.id=" . $id);
$del = $API->read();



?>

<br/>
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Informasi Penghapusan IP Address
        </div>
        <div class="panel-body">
            IPsec policy pada mikrotik telah dihapus .
            <br/>
            <br/>
            <a class="btn btn-info" href="tampil.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>
