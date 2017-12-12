<?php 
    session_start();
    include "../../koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>as User</title>
</head>
<body>

    <div class="fixed-header">
        <div class="container">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="#">BE COLLECTORS</a>
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="upload_barang_antik.php">upload</a></li>
                    <li><a href="myprofile.php">My profile</a></li>
                    <li><a href="#l">My chart</a></li>
                    
                    <li><a href="../../index.php">logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <section class="col-md-12 content" id="home">
            <div class="col-lg-12 col-md-12 content-item content-item-1 background">
                <h1 style="text-align: center"> HALLO <?php echo $_SESSION['nama'] ?></h1>
                
                <h1 style="text-align: center">WELCOME TO BECOLLECTORS.... </h1>
                <div class="col-md-12">




                    <!-- tabel -->
                    <table class="table table-bordered table-striped">

                         <thead>
                            <tr>
                                <th width="10">NO</th>
                                <th width="150">Foto Barang</th>
                                <th width="100">Nama barang</th>
                                <th width="150">Tahun Barang</th>
                                <th width="150">Harga </th>
                                <th width="100">EDIT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = mysqli_query($conn,"SELECT * FROM upload_barang");
                                $no = 1;
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><img src="img_user/<?php echo $row['file_img']  ?>" width="200px" height="200px" >  </td>
                                        <td><?php echo $row['nama_barang']?></td>
                                        <td><?php echo $row['tgl_barang']?></td>
                                        <td><?php echo $row['harga_brg']?></td>
                                        <td><a href="#" class="btn btn-danger btn-sm" role="button"  data-toggle="modal" data-target="#upload_barang<?php echo $row['id_barang']; ?>">Click here</a></td>
            
                                        <td>
                                          
                                            <!-- <button type="submit" class="btn dark-blue-bordered-btn">Buy</button> -->
                                            <button type="submit" class="btn dark-blue-btn">More info</button>

                                        </td>
                                      
                            <?php } ?> 
                         </tbody>   
                    </table>    
                 </div>   
                 
            </div>    
       </section>

    </div>
    <section></section>
    

</body>
</html>