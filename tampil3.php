<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>



<?php
require './interface.php';
require './connect.php';

$API->write("/ip/ipsec/mode-config/getall");
$hasil = $API->read();

?>

        <div class="container">
            
            <br/>
            
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>                        
                        <th>Name</th>
                        <th>Split Include</th>
                        <th>Send DNS</th>
                    </tr>
                </thead>
                
            <tbody>
                <?php foreach ($hasil as $has) { ?>
                    <tr>
                        <td><?php echo $has['.id'] ?></td>                        
                        <td><?php echo $has['name'] ?></td>               
                        <td><?php echo $has['split-include'] ?></td>                        
                        <td><?php echo $has['send-dns'] ?></td>
                        
                        <td>
                            <a href="edit3.php?id=<?php echo $has['.id'] ?>" class="btn btn-info">
                                <i class="glyphicon glyphicon-cog"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger" href="hapus3.php?id=<?php echo $has['.id'] ?>">
                                <i class="glyphicon glyphicon-trash"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
           </table>
            <br /> <br/>
            <a class="btn btn-info" href="tambah3.php">Tambah</a>
        </div>




