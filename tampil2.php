<link href="assets/css/bootstrap.css" 
      rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-theme.css" 
      rel="stylesheet" type="text/css">

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>



<?php
require './interface.php';
require './connect.php';

$API->write("/ip/ipsec/user/getall");
$hasil = $API->read();

?>

        <div class="container">
            
            <br/>
            
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>                        
                        <th>UserName</th>                                               
                        <th>Password</th>                                                                  
                    </tr>
                </thead>
                
            <tbody>
                <?php foreach ($hasil as $has) { ?>
                    <tr>
                        <td><?php echo $has['.id'] ?></td>                        
                        <td><?php echo $has['name'] ?></td>                        
                        <td><?php echo $has['password'] ?></td>
                                                
                        <td>
                            <a href="edit2.php?id=<?php echo $has['.id'] ?>" class="btn btn-info">
                                <i class="glyphicon glyphicon-cog"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger" href="hapus2.php?id=<?php echo $has['.id'] ?>">
                                <i class="glyphicon glyphicon-trash"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
           </table>
            <br /> <br/>
            <a class="btn btn-info" href="tambah2.php">Tambah</a>
        </div>


