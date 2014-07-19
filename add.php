<?php
require './interface.php';
    
    
    
    ?>


<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

<div class="container">
    <form  class="form-horizontal" method="POST" action="add_proses.php">
        <div class="form-group">
            <label>IP Address</label>
            <input type="text" name="address" class="form-control"
                   placeholder="ex. 192.168.50.2">
        </div>

        <form  class="form-horizontal" method="POST" action="add_proses.php">
            <div class="form-group">
                <label>Local Address</label>
                <input type="text" name="local-address" class="form-control"
                       placeholder="ex. 192.168.50.3">
</div>
                <form  class="form-horizontal" method="POST" action="add_proses.php">
                    <div class="form-group">
                        <label>Times</label>
                        <input type="text" name="lifetime" class="form-control"
                               placeholder="ex. 1d00:20:30">
                    </div>

                    <form  class="form-horizontal" method="POST" action="add_proses.php">
                        <div class="form-group">
                            <label>LifeByte</label>
                            <input type="text" name="lifebytes" class="form-control"
                                   placeholder="ex. 0">
                        </div>


                     

                        <div class="form-group">
                            <button class="btn btn-default" 
                                    type="submit" name="submit">
                                <i class="glyphicon glyphicon-floppy-saved"></i>
                                Simpan
                            </button>
                        </div>
                    </form>

               </div>   
                