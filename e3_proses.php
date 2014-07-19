<?php
require './interface.php';
?>


<?php
require './connect.php';

$id = $_POST['id'];
$nama = $_POST['name'];
$split = $_POST['split'];
$send = $_POST['send'];



$API->write("/ip/ipsec/mode-config/set", false);
$API->write("=.id=" . $id, false);
$API->write("=name=" . $nama, false);
$API->write("=split-include=" . $split,false);

if (isset($_POST['send'])) {
        $send = $_POST['send'];
    }
    If (isset($send)) {
        $send = "yes";
    } else {
        $send = "no";
    }

$API->write("=send-dns=" . $send);
$var = $API->read();
?>


<br/>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            Informasi Pengubahan User IPsec
        </div>
        <div class="panel-body">
            Ip dengan ID <strong><?php echo $id ?></strong> 
            telah di ubah pada Mikrotik.
            <br/>
            <br/>
            <a class="btn btn-info" href="tampil3.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>
