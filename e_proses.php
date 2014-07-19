<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>




<?php

require './connect.php';
$id = $_POST['id'];
$diss = $_POST['disable'];
$srcadd = $_POST['src-address'];
$srcp = $_POST['src-port'];
$dstadd = $_POST['dst-address'];
$dstp = $_POST['dst-port'];
$prot = $_POST['protocol'];
$act = $_POST['action'];
$lev = $_POST['level'];
$tun = $_POST['tunnel'];


$API->write("/ip/ipsec/policy/set", false);
$API->write("=.id=" . $id, false);
$API->write("=disable=" . $dis, false);
        $API->write("=src-address=" . $srcadd,false);
        $API->write("=src-port=". $srcp, false);
        $API->write("=dst-address=" . $dstadd, false);
        $API->write("=dst-port=" . $dstp,false);
        $API->write("=protocol=" . $prot, false);
        $API->write("=action=" . $act, false);
        $API->write("=level=" . $lev,false);
        $API->write("=tunnel=" . $tun);
$var = $API->read();
?>

<br/>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            Informasi Pengubahan IPsec
        </div>
        <div class="panel-body">
            IPsec pada mikrotik telah berhasil di rubah, terima kasih
            <br/>
            <br/>
            <a class="btn btn-info" href="tampil.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>
