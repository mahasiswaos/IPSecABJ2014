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
<br>
   <div class="col-xs-6 col-xs-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading" align="center" ><b>Menambahkan IPSEC POLICY</b></div>
                    <div class="panel-body" align="center">
                        <form  class="form-horizontal" method="POST" action="t_proses.php" align="center">
                                <div class="form-group" align="center">
                                    <label class="col-sm-3">Src.Address</label>
                                         <div class="col-sm-8"> 
                                             <input type="text" name="src-address" class="form-control" placeholder="ex. 192.168.56.20" id="focusedinput" align="center">
                                         </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3">Src.port</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="src-port" class="form-control" placeholder="ex. 1">
                                        </div>                                
                                </div>

                                <div class="form-group">
                                <label class="col-sm-3">Dst.Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="dst-address" class="form-control" placeholder="ex. 192.168.10.20">
                                    </div>
                                </div>

                                <div class="form-group">
                                <label class="col-sm-3">Dst.port</label>
                                      <div class="col-sm-8">
                                          <input type="text" name="dst-port" class="form-control" placeholder="ex. 1">
                                      </div>
                                </div>

                                <div class="form-group">
                                <label class="col-sm-3">Protocol</label>
                                        <div class="col-sm-5">
                                            <select name="protocol" class="form-control">
                                                <option>pilih</option>
                                                <option value="255(all)">all</option>
                                                <option value="egp">egp</option>
                                                <option value="ggp">ggp</option>
                                                <option value="icmp">icmp</option>
                                                <option value="igmp">igmp</option>
                                                <option value="ip-encap">ip-encap</option>
                                                <option value="ip-sec">ip-sec</option>
                                                <option value="tcp">tcp</option>
                                                <option value="udp">udp</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="form-group">
                                <label class="col-sm-3">Action</label>
                                        <div class="col-sm-5">    
                                            <select name="action" class="form-control">
                                                <option>pilih</option>
                                                <option value="discard">Discard</option>
                                                <option value="encrypt">Encrypt</option>
                                                <option value="none">None</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="form-group">
                                <label class="col-sm-3">Level</label>
                                        <div class="col-sm-5">
                                            <select name="level" class="form-control">
                                                <option>pilih</option>
                                                <option value="require">require</option>
                                                <option value="unique">unique</option>
                                                <option value="use">use</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="form-group">
                                <label class="col-sm-3 container">Tunnel</label>
                                    <div class="col-sm-5">
                                        <input type="checkbox" name="tunnel" class="checkbox-inline">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="panel panel-default" align="center">
                                        <div class="panel-body">
                                            
                                                <button class="btn btn-info" type="submit" name="submit">
                                                    <div class="col-sm-1">
                                                    <i class="glyphicon glyphicon-floppy-saved"></i>
                                                    Simpan
                                                    </div>
                                                </button>
                                            
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
    </div>
   </div>
                </div>

<?php
        
        require './connect.php';

//hanya akan dieksekusi jika tombol 
//submit (simpan) di klik
    if (isset($_POST['submit'])) {
        //menambah ip address
        $srcadd = $_POST['src-address'];
        $srcp = $_POST['src-port'];
        $dstadd = $_POST['dst-address'];
        $dstp = $_POST['dst-port'];
        $prot = $_POST['protocol'];
        $act = $_POST['action'];
        $lev = $_POST['level'];
        
    if (isset($_POST['tunnel'])) {
        $tun = $_POST['tunnel'];
    }
    if (empty($tun)) {
        $tun = "no";
    } else {
        $tun = "yes";
    }   
        
        
        $API->write("/ip/ipsec/policy/add", false);
        $API->write("=src-address=" . $srcadd,false);
        $API->write("=src-port=". $srcp, false);
        $API->write("=dst-address=" . $dstadd, false);
        $API->write("=dst-port=" . $dstp,false);
        $API->write("=protocol=" . $prot, false);
        $API->write("=action=" . $act, false);
        $API->write("=level=" . $lev,false);
        $API->write("=tunnel=" . $tun);
        $tmpl = $API->read();
    }
?>