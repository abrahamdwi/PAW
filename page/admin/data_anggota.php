


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>as ADMIN</title>
</head>
<body>

    <div class="fixed-header" style="color: red;">
        <div class="container">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="#">BECOLLECTORS</a>
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="#home">Dashboards</a></li>
                    <li><a href="#">Data Anggota</a></li>
                    <li><a href="#clients">Data Barang</a></li>
                    <li><a class="external" href="https://www.facebook.com/templatemo" target="_blank">----</a></li>
                    <li><a href="#contact">logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <section class="col-md-12 content" id="home">
            <div class="col-lg-12 col-md-12 content-item content-item-1 background">
                <h1 style="text-align: center">Selamat Datang Admin Kolektor Barang Antik </h1>
                    
            </div>    
       </section>


</body>
</html>

























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
                                          
                                            <button type="submit" class="btn dark-blue-bordered-btn">Buy</button>
                                            <button type="submit" class="btn dark-blue-btn">More info</button>

                                        </td>
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>

                            <?php } ?> 