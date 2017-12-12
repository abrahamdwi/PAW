<?php 
    session_start();
    include "../../koneksi.php"
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>upload</title>
</head>
<body>

    <div class="fixed-header">
        <div class="container">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="#">BE COLLECTORS</a>
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="as_user.php">Home</a></li>
                    <li><a href="upload_barang_antik.php">upload</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#l">My chart</a></li>
                    <li><a href="../../index.php">logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <section class="col-md-12 content" id="home">
            <div class="col-lg-12 col-md-12 content-item content-item-1 background">
                
                <h1 style="text-align: center">Data Anda </h1>
                   <!--  <thead>
                        <tr>

                            <li width="150">Nama Lengkap</li>
                            <li width="100">Tanggal Lahir</li>
                            <li width="150">Alamat</li>
                            <li width="150">No. Tlp/HP </li>
                            <li width="100">Username</li>
                        </tr>
                    </thead> -->
                     <tbody>
                            <?php 
                                $query = mysqli_query($conn,"SELECT * FROM user where email = '".$_GET['email']."'");
                                $no = 1;
                                $row = mysqli_fetch_array($query) 
                                    ?>
                                    <tr>
                                      
                                        <td width="150">Nama Lengkap : </td>
                                        <td><?php echo $row['nama']?></td>

                                         <li width="100">Tanggal Lahir : </li>
                                        <li><?php echo $row['tanggal_lahir']?></li>

                                         <li width="150">Alamat : </li>
                                        <td><?php echo $row['alamat']?></td>

                                        <li width="150">No. Tlp/HP : </li>
                                        <td><?php echo $row['tlp']?></td>
                                        
                                        <li width="100">Username : </li> 
                                        <td><?php echo $row['username']?></td>
                                        <!-- <td><a href="#" class="btn btn-danger btn-sm" role="button"  data-toggle="modal" data-target="#upload_barang<?php echo $row['id_barang']; ?>">Click here</a></td>
            
                                        <td>
                                          
                                            <button type="submit" class="btn dark-blue-bordered-btn">Buy</button>
                                            <button type="submit" class="btn dark-blue-btn">More info</button>

                                        </td>
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
 -->
                            <?php  ?> 
                         </tbody>   



                <!-- <form action="" method="post" enctype="multipart/form-data">

                    <div class="col-md-6">
                        <label for="nama_barang">Nama Barang :</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required >
                        <label for="tgl_barang">Tanggal Barang :</label>
                        <input type="date" name="tgl_barang" class="form-control" placeholder="Tanggal Barang" required>  
                        <label for="harga_brg">Harga Barang :</label>
                        <input type="text" name="harga_brg" class="form-control" placeholder="Harga Barang" required>
                    
                        <div class="form-group">
                            <label for="brg_deskripsi">Deskripsi :</label>
                            <textarea name="brg_deskripsi" placeholder="text here" class="form-control" rows="5"></textarea>
                        </div> 
                        <!-- <input style="height: 250px" type="text" name="Keterangan" class="form-control" placeholder="Text here..." required>
                    </div>
                        
                    <div class="col-md-6">
                        <label for="file_img">Upload Foto :</label>
                        <input type="file" name="file_img" class="form-control" placeholder="file_img" required >
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6"></div>
                        <div class="col-md-2">
                            <input style="color: red" type="submit" name="save" value="save" >    
                        </div>
                        <div class="col-md-4"></div>                       
                    </div>

                </form> --> 

      <!--           <?php 
                    if (isset($_POST['save'])) {
                        
                        $nama_barang = $_POST['nama_barang'];
                        $tgl_barang = $_POST['tgl_barang'];
                        $harga_brg = $_POST['harga_brg'];
             
                        $brg_deskripsi = $_POST['brg_deskripsi'];

                        
                        $nama_file = $_FILES['file_img']['name'];
                        $source = $_FILES['file_img']['tmp_name'];
                        $folder = './img_user/';

                        move_uploaded_file($source, $folder.$nama_file);
                        $insert = mysqli_query($conn,"INSERT INTO upload_barang VALUES(
                        NULL,
                        '$nama_barang',
                        '$tgl_barang',
                        '$harga_brg',
                        '$brg_deskripsi',
                        '$nama_file'    
                        )");

                        if ($insert) {  
                            echo "sip";
                        }else  {
                            echo "gagal";
                        }

                    }
                 ?>    
 -->

              
                
                <!--  <div class="col-md-12" style="border: solid black; height: 250px; font-size: 12px ; margin-top:20px">
                     
                 </div> 
                 <div class="col-md-12" style="border: solid black; height: 250px; font-size: 12px ; margin-top:20px">
                     
                 </div>    -->
            </div>    
       </section>

    </div>
    <section></section>
    

</body>
</html>