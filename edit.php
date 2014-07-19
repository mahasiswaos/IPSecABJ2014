<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>



<?php
    
    require './connect.php';

    $id = $_GET['id'];

    $API->write("/ip/ipsec/policy/getall", false);
    $API->write("?.id=" . $id);
    $var = $API->read();

?>
<br>
<br>
<div class="col-xs-6 col-xs-offset-3">
    <div class="panel panel-success">
        <div class="panel-heading" align="center"><b>Menambahkan IPSEC POLICY</b></div>
            <div class="panel-body" align="center">
                <form  class="form-horizontal" method="POST" action="e_proses.php">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>

                    <div class="form-group">
                        <label class="col-sm-3">Src.Address</label>
                            <div class="col-sm-8">
                                <input type="text" name="src-address" class="form-control" value="<?php echo $var[0]['src-address'] ?>">
                            </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-3">Src.port</label>
                            <div class="col-sm-8">
                                <input type="text" name="src-port" class="form-control" value="<?php echo $var[0]['src-port'] ?>">
                            </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-3">Dst.Address</label>
                            <div class="col-sm-8">
                                <input type="text" name="dst-address" class="form-control" value="<?php echo $var[0]['dst-address'] ?>">
                            </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-3">Dst.port</label>
                            <div class="col-sm-8">
                                <input type="text" name="dst-port" class="form-control" value="<?php echo $var[0]['dst-port'] ?>">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Protocol</label>
                        <?php $pro = $var[0]['protocol']; ?>
                            <div class="col-sm-5">
                                <select name="protocol" class="form-control">
                                    <option>pilih</option>
                                    <option value="all" <?php if ($pro == "all") echo "selected"; ?>>All</option>
                                    <option value="egp"<?php if ($pro == "egp") echo "selected"; ?>>Egp</option>
                                    <option value="ggp"<?php if ($pro == "gpp") echo "selected"; ?>>ggp</option>
                                    <option value="icmp"<?php if ($pro == "icmp") echo "selected"; ?>>icmp</option>
                                    <option value="igmp"<?php if ($pro == "igmp") echo "selected"; ?>>igmp</option>
                                    <option value="ip-encap"<?php if ($pro == "ip-encap") echo "selected"; ?>>ip-encap</option>
                                    <option value="ipsec"<?php if ($pro == "ipsec") echo "selected"; ?>>ipsec</option>
                                    <option value="tcp"<?php if ($pro == "tcp") echo "selected"; ?>>tcp</option>
                                    <option value="udp"<?php if ($pro == "udp") echo "selected"; ?>>udp</option>
                                </select>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Action</label>
                        <?php $act = $var[0]['action']; ?>
                            <div class="col-sm-5">
                                    <select name="action" class="form-control">
                                        <option value="discard"<?php if ($act == "require") echo "selected"; ?>>Discard</option>
                                        <option value="encrypt"<?php if ($act == "unique") echo "selected"; ?>>Encrypt</option>
                                        <option value="none"<?php if ($act == "use") echo "selected"; ?>>None</option>
                                    </select>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Level</label>
                        <?php $lev = $var[0]['level']; ?>
                            <div class="col-sm-5">
                                    <select name="level" class="form-control">
                                        <option value="require"<?php if ($lev == "require") echo "selected"; ?>>Require</option>
                                        <option value="unique"<?php if ($lev == "unique") echo "selected"; ?>>unique</option>
                                        <option value="use"<?php if ($lev == "use") echo "selected"; ?>>Use</option>
                                    </select>
                            </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">Allow</label>
                        <div class="col-sm-5">
                            <input type="checkbox" name="tunnel" class="checkbox-inline"

                                   <?php
                                   $tun = $var[0]['tunnel'];
                                   if ($tun == "true") {
                                       echo "checked";
                                   } else {
                                       echo "";
                                   }
                                   ?>>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-default" 
                                type="submit" name="submit">
                            <i class="glyphicon glyphicon-floppy-saved"></i>
                            Ubah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>