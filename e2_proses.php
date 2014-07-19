<?php
require './interface.php';
?>


<?php
require './connect.php';

$id = $_POST['id'];
$nama = $_POST['name'];
$pass = $_POST['password'];


$API->write("/ip/ipsec/user/set", false);
$API->write("=.id=" . $id, false);
$API->write("=name=" . $nama, false);
$API->write("=password=" . $pass);
$var = $API->read();
?>


<br/>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            Informasi Pengubahan User IPsec
        </div>
        <div class="panel-body">
            user dengan ID <strong><?php echo $id ?></strong> 
            telah di ubah pada Mikrotik.
            <br/>
            <br/>
            <a class="btn btn-info" href="tampil2.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>
