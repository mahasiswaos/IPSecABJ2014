<?php
require './interface.php';
?>
    

<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<br>
<br>
<div class="col-xs-6 col-xs-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading" align="center"><b>Menambahkan User</b></div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="t3_proses.php">
                
                <div class="form-group">
                    <label class="col-sm-3">Nama</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" class="form-control" id="focusedInput">
                    </div>
                </div>               
                
                <div class="form-group">
                    <label class="col-sm-3" co>Split Include</label>
                    <div class="col-sm-6 container">
                        <input type="text" name="split" class="form-control" id="focusedInput">
                    </div>
                </div>   
                
                <div class="form-group">
                    <label class="col-sm-3 container">Send DNS</label>
                    <div class="col-sm-6">
                        <input type="checkbox" name="send" class="checkbox-inline">
                    </div>
                </div>
                
                
                
                <br>
                <div class="form-group">
                    <div class="panel panel-default" align="center">
                        <div class="panel-body">
                            <button class="btn btn-info" 
                                    type="submit" name="submit">
                                <i class="glyphicon glyphicon-floppy-saved"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>