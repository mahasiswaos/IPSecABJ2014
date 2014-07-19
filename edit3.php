<?php
require './interface.php';
?>


<div class="container">
    <div class="col-xs-8 col-xs-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading" align="center"><b>Proses Pengubahan Mode config</b></div>
            <div class="panel-body">

                <?php
                require './connect.php';

                $id = $_GET['id'];

                $API->write("/ip/ipsec/mode-config/getall", false);
                $API->write("?.id=" . $id);
                $var = $API->read();
                ?>

                <form  class="form-horizontal" method="POST" action="e3_proses.php">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <div class="form-group">
                        <label class="col-sm-3">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" class="form-control" value="<?php echo $var[0]['name'] ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Split Include</label>
                        <div class="col-sm-6">
                            <input type="text" name="split" class="form-control" value="<?php echo $var[0]['split'] ?>" >
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="col-sm-3">Send DNS</label>
                        <div class="col-sm-6">
                            <input type="checkbox" name="send" class="checkbox-inline"

                                   <?php
                                   $send = $var[0]['send'];
                                   if ($send == "true") {
                                       echo "checked";
                                   } else {
                                       echo "";
                                   }
                                   ?>>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="panel panel-default" align="right">
                            <div class="panel panel-body">
                                <button class="btn btn-info" 
                                        type="submit" name="submit">
                                    <i class="glyphicon glyphicon-floppy-saved"></i>
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

