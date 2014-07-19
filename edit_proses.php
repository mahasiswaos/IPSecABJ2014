<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

<?php
require './interface.php';
require './connect.php';

$id = $_POST['id'];
$addr = $_POST['address'];
$local = $_POST['local-address'];
$time = $_POST['lifetime'];
$byte = $_POST['lifebytes'];

$API->write("/ip/ipsec/peer/set", false);
$API->write("=.id=" . $id, false);
$API->write("=address=" . $addr, false);
$API->write("=local-address=" . $local, false);
$API->write("=lifetime=" . $time, false);
$API->write("=lifebytes=" . $byte);
$var = $API->read();
?>

<br/>
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Informasi Pengubahan IP Security
        </div>
        <div class="panel-body">
            IP Security dengan ID <strong><?php echo $id ?></strong> 
            telah di ubah pada Mikrotik.
            <br/>
            <br/>
            <a class="btn btn-info" href="view.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>
