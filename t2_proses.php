<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>


<?php
require './connect.php';


if (isset($_POST['submit'])) {
    //menambah ip address
    
    $name = $_POST['name'];
    $password = $_POST['password'];

    


    $API->write("/ip/ipsec/user/add", false);    
    $API->write("=name=" . $name, false);
    $API->write("=password=" . $password);
      
    $var = $API->read();
}


?>

<br>
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            Informasi pengisian User Pada IPsec
        </div>
        <div class="panel-body">
            pengisian user telah berhasil di lakukan
            <br/>
            <br/>
            <a class="btn btn-primary" href="tampil2.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>
