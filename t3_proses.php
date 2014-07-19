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
    $prefix = $_POST['prefix'];
    $split = $_POST['split'];

    if (isset($_POST['send'])) {
        $send = $_POST['send'];
    }
    if (empty($send)) {
        $send = "no";
    } else {
        $send = "yes";
    }
    


    $API->write("/ip/ipsec/mode-config/add", false);    
    $API->write("=name=" . $name, false);
    $API->write("=split-include=" . $split,false);
    $API->write("=send-dns=" . $send);
    
      
    $var = $API->read();
}

//header("location:view.php");
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
?>

<br>
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            Informasi pengisian mode-config pada IPsec 
        </div>
        <div class="panel-body">
            pengisian mode-config pada mikrotik telah berhasil di lakukan
            <br/>
            <br/>
            <a class="btn btn-primary" href="tampil3.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>
