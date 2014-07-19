<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

<?php
require './interface.php';
require './connect.php';
//
$id = $_GET['id'];
//
$API->write("/ip/ipsec/peer/remove", false);
$API->write("=.id=" . $id);
$del = $API->read();
?>


<br/>
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Informasi Penghapusan IP Security
        </div>
        <div class="panel-body">
            IP Security  dengan ID <strong><?php echo $id ?></strong> 
            telah dihapus pada Mikrotik.
            <br/>
            <br/>
            <a class="btn btn-info" href="view.php">
                <i class="glyphicon glyphicon-backward"></i>
                Kembali
            </a>
        </div>
    </div>
</div>
