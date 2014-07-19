<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>



<?php
require './interface.php';
require './connect.php';

$API->write("/ip/ipsec/policy/getall");
$hasil = $API->read();

//echo "<pre>";
//print_r($hasil);
//echo "</pre>";

?>

        <div class="container">
            
            <br/>
            
        <table class="table table-bordered" color="red">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Src.Address</th>
                        <th>Src.Port</th>
                        <th>Dst.Address</th>
                        <th>Dst.Port</th>
                        <th>Protocol</th>
                        <th>Action</th>
                        <th>Level</th>
                        <th>Tunnel</th>                        
                    </tr>
                </thead>
                
            <tbody>
                <?php foreach ($hasil as $has) { ?>
                    <tr>
                        <td><?php echo $has['.id'] ?></td>
                        <td><?php echo $has['src-address'] ?></td>
                        <td><?php echo $has['src-port'] ?></td>
                        <td><?php echo $has['dst-address'] ?></td>
                        <td><?php echo $has['dst-port'] ?></td>
                        <td><?php echo $has['protocol'] ?></td>
                        <td><?php echo $has['action'] ?></td>
                        <td><?php echo $has['level'] ?></td>
                        <td><?php echo $has['tunnel'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $has['.id'] ?>" class="btn btn-info">
                                <i class="glyphicon glyphicon-cog"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $has['.id'] ?>">
                                <i class="glyphicon glyphicon-trash"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
           </table>
            <br /> <br/>
            <a class="btn btn-info" href="tambah.php">Tambah</a>
        </div>



    

