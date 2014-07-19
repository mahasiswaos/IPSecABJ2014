<?php
session_start();
$kode_mk=$_GET['kode_mk'];
unset ($_SESSION['kode_asdos']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistem Basis Data 2013</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
		background: url(../assets/bg.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
      }
	.layout {
        max-width: 420px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: transparent;
        border: 1px solid gray;
        -webkit-border-radius: 15px;
           -moz-border-radius: 15px;
                border-radius: 15px;
        -webkit-box-shadow: 0 21px 12px rgba(0,0,0,.05);
           -moz-box-shadow: 0 21px 12px rgba(0,0,0,.05);
                box-shadow: 0 15px 12px rgba(0,0,0,.05);
				}
      .form-signin {
        max-width: 420px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: transparent;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"],
	  .form-signin input[type="file"]	  {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 5px 9px;
      }

    </style>
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
   <link rel="shortcut icon" href="../assets/ico/favicon.png">
   
   <!-- Included JS Files (Compressed) -->
  <script src="../assets/js/reveal/jquery.js"></script>
  <script src="../assets/js/reveal/foundation.min.js"></script>
  
<!-- Initialize JS Plugins -->
  <script src="../assets/js/reveal/app.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Sistem Basis Data 2013</a>
          <div class="nav-collapse collapse">
          <p class="navbar-text pull-right">
              <?php
                if (!isset($_SESSION['username'])){
                echo "&nbsp;";
                } else {
                echo "Selamat Datang :&nbsp;&nbsp;<strong><b><i class='icon-user icon-white'></i> ".$_SESSION['username']."</b></strong>";}
              ?>
              &nbsp;&nbsp;|&nbsp;&nbsp;
                <?php if (!isset($_SESSION['username'])){
                echo "<a href='../index.php'><strong><b><i class='icon-remove icon-white'></i> Keluar</b></strong></a>";
                } else {
                echo "<a href='logout_asdos.php' style='text-decoration:none;'><strong><b><i class='icon-off icon-white'></i> Logout</b></strong></a>";}
                ?>
            </p>
            <ul class="nav">
              <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="report.php"><i class="icon-edit icon-white"></i> Lihat File Anda</a></li>
              <li><a href="#" data-reveal-id="login"><i class="icon-info-sign icon-white"></i> Login Asdos</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    <center>
      <h1>Selamat Datang</h1>
      <p>Portal Web localhost ini sebagai wadah mahasiswa di dalam mengupload tugas-tugas selama praktikum <font size="4px"><strong>Sistem Basis Data</strong></font>.</p>
	</center> 
        <div class="layout">
        <table>
        <tr>
        <td width="65%"><h3>Upload File Anda</h3></td>
        <td width="35%">
        <object width="100%" height="50">
                <param name="quality" value="best" />
                <param name="menu" value="true" />
                <embed src="../assets/free-flash-clock.swf" width="100%" height="50" wmode="transparent" type=application/x-shockwave-flash></embed>
        </object>
        <?php 
        date_default_timezone_set("Asia/Singapore");
        $day=date("l");
        $time=date("H:i");
        echo "<center><strong>$day,$time</strong></center>";
        ?>
        </td>
        </tr>
        </table>
        	<form name='form1' action='simpan-upload-sbd.php' method='post' enctype='multipart/form-data'>
            <table class='table'>
            <tr>
                <td width="55%">File</td>
                <td>:</td>
                <td width="45%"><input type='file' name='file' id='file' required /></td>
                <input type="hidden" name="MAX_SIZE_FILE" value="1000000"/>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name='nama' id='nama' placeholder="Nama" required /></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name='nim' id='nim' placeholder="NIM" required /></td>
            </tr>
            <tr>
    			<td>Kelompok</td>
    			<td>:</td>
    			<td>
                    <select name="kelompok" required />
                    <option value=""><center>-Kelompok Praktikum-</center></option>
                    <?php
                    include "../koneksi.php";
                    $query="select kode_mk,kode_asdos,kelompok,hari,jam from t_asistensi 
                            where kode_mk='$kode_mk' order by kelompok";
                    $exec=mysql_query($query);
                    while ($baris=mysql_fetch_array($exec)){
                        $kode_mk=$baris['kode_mk'];
                        $kode_asdos=$baris['kode_asdos'];
                        $klp=$baris['kelompok'];
                        $hari=$baris['hari'];
                        $jam=$baris['jam'];
                    echo "<option value='$klp'>$klp&nbsp;&nbsp;-->&nbsp;&nbsp;$hari jam $jam</option>";
                    }
                    ?>
                    <input type="hidden" name="kode_mk" value="<?php echo $kode_mk;?>"/>
                    </select>
                </td>
			</tr>
            <tr>
    			<td>Asisten</td>
    			<td>:</td>
    			<td>
                    <select name="kode_asdos" required />
                    <option value=""><center>-Asisten Sesuai Kelompok-</center></option>
                    <?php
                    include "../koneksi.php";
                    $query="select t_asistensi.kode_mk,t_asistensi.kode_asdos,t_mhs.nama_asdos,t_asistensi.kelompok
                            from t_asistensi,t_mhs 
                            where t_asistensi.kode_asdos=t_mhs.kode_asdos and t_asistensi.kode_mk='$kode_mk'
                            order by t_asistensi.kelompok";
                    $exec=mysql_query($query);
                    while ($baris=mysql_fetch_array($exec)){
                        $kode_mk=$baris['kode_mk'];
                        $kode_asdos=$baris['kode_asdos'];
                        $nama_asdos=$baris['nama_asdos'];
                        $kelompok=$baris['kelompok'];
                    echo "<option value='$kode_asdos'>$nama_asdos -->&nbsp;$kelompok</option>";
                    }
                    ?>
                    </select>
                </td>
			</tr>
            <tr>
                <td colspan='3'>
                <center>
                <input type='submit' name='save' value='Upload !' class="btn btn-large btn-primary btn-block"/>
                </center>
                </td>
            </tr>
        	<tr>
                <td colspan='3'>
                <center>
                <a href="file-materi.php?kode_mk=MK001">
                <input type='button' name='download' value='Download Materi !' class="btn btn-large btn-block"/>
                </a>
                </center>
                </td>
            </tr>
        	</table>
            </form>   
		<center>&copy;copyright Hanya Milik Allah SWT</center>
        </div>
    </div> <!-- /container -->
	<center>"Banyak kegagalan dalam hidup ini dikarenakan orang-orang tidak menyadari<br/>betapa dekatnya mereka dengan keberhasilan saat mereka menyerah."<i><strong>&nbsp;&nbsp;(Thomas Alva Edison)</strong></i></center>
		
	<div class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/portal_aplikasi"><i class="icon-thumbs-up icon-white"></i> Portal Aplikasi Asisten Lab</a>
        </div>
      </div>
    </div>
    
    <!-- ini Modal-->
    <div id="login" class="reveal-modal small">
    <h4>Login User</h4>
	Silahkan Login menggunakan Username dan Password Anda.
    <br/>
	<br/>
	<!-- Contentnya-->
            <form class="form-horizontal" method="POST" action="login_asdos.php">
            <div class="control-group">
            <label class="control-label" for="inputUsername">Username</label>
            <div class="controls">
            <input type="text" id="inputUsername" name="username" placeholder="Username" required />
            </div>
            </div>
            <div class="control-group">
            <label class="control-label" for="inputPassword">Password</label>
            <div class="controls">
            <input type="password" id="inputPassword" name="password" placeholder="Password" required />
            </div>
            </div>
            <div class="control-group">
            <div class="controls">
            <button type="submit" class="btn" name="login"><i class="login-user"></i> Sign in Asdos</button>
            </div>
            </div>
            <?php $_SESSION['kode_mk']=$kode_mk;?>
            </form> 
          <!--/Content-->
	<a class="close-reveal-modal">x</a>
  </div>
  <!-- /ini Modal-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>