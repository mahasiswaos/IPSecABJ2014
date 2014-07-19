<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

<div class="container">


    <?php
    require './interface.php';
    require './connect.php';

    $id = $_GET['id'];

    $API->write("/ip/ipsec/peer/getall", false);
    $API->write("?.id=" . $id);
    $var = $API->read();
    ?>
    <form  class="form-horizontal" method="POST" action="edit_proses.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="form-group">
            <label>IP Address</label>
            <input type="text" name="address" class="form-control"
                   value="<?php echo $var[0]['address'] ?>">
            </div>
         <div class="form-group">   
            <label>Local Address</label>
            <input type="text" name="local-address" class="form-control"
                   value="<?php echo $var[0]['local-address'] ?>">
            </div>
            <div class="form-group">
            <label>Waktu</label>
            <input type="text" name="lifetime" class="form-control"
                   value="<?php echo $var[0]['lifetime'] ?>">
            </div>
            
            <div class="form-group">
            <label>Lifebyte</label>
            <input type="text" name="lifebytes" class="form-control" value="<?php echo $var[0]['lifebytes'] ?>">
        </div>



        <div class="form-group">
            <button class="btn btn-default" 
                    type="submit" name="submit">
                <i class="glyphicon glyphicon-floppy-saved"></i>
                Ubah
            </button>
        </div>
    </form>