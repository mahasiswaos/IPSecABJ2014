<?php
require './interface.php';
?>


<div class="container">
    <div class="col-xs-8 col-xs-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading" align="center"><b>Proses Pengubahan Ip DNS Static</b></div>
            <div class="panel-body">

                <?php
                require './connect.php';

                $id = $_GET['id'];

                $API->write("/ip/ipsec/user/getall", false);
                $API->write("?.id=" . $id);
                $var = $API->read();
                ?>

                <form  class="form-horizontal" method="POST" action="e2_proses.php">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <div class="form-group">
                        <label class="col-sm-3">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" class="form-control" value="<?php echo $var[0]['name'] ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Password</label>
                        <div class="col-sm-6">
                            <input type="text" name="password" class="form-control" value="<?php echo $var[0]['password'] ?>" >
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