<?php include "layout/header.php" ?>
    
    <div class="container">
        <section class="col-md-12 content" id="home">
           <div class="col-lg-6 col-md-6 content-item">
               <img src="images/kamera.jpg" alt="Image" class="tm-image">
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
               <h2 class="main-title text-center dark-blue-text">Syarat dan Ketentuan</h2>
               <p>1. Jika ingin melihat barang antik atau ingin membeli harus menjadi <span class="light-blue-text">anggota</span>  terlebih dahulu</p>
               <p>2. Daftar atau signup terlebih dahulu, kemudian login</p> 
               <p>3. Anggota dapat menjual dan membeli barang antik</p>
               <p>4. terdapat berbagai macam jenis barang antik</p>

               <a href="signup.php" <button type="button" class="btn btn-mid dark-blue-bordered-btn" </button>Signup</a>

               <a href="login.php" <button type="button" class="btn btn-mid dark-blue-btn"</button>Login</a>
           </div>
       </section>

       <section class="col-md-12 content padding" id="">
        <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
           <img src="images/mixpoto.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
           <h2 class="section-title">Ada barang antik apa saja?</h2>
           <p class="section-text">di dalam web ini terdapat berbagai jenis barang antik yang anda dapat temukan dan langka, dari berbagai pelosok didunia, seperti : </p>
           <ul class="dark-blue-text">
               <li>+ PRANGKO </li>
               <li>+ DIECAST</li>
               <li>+ PIRINGAN HITAM</li>
               <li>+ BUKU LANGKA</li>
               <li>+ KAMERA</li>
               <li>+ DAN LAINNYA</li>

           </ul>
           <p>Ayo join sekarang juga dan temukan barang antik dan langka yang ingin kamu cari disini. </p>
           <p>=================================================== </p>
       </div>

   </section>


   <section class="col-md-12 content" id="">
       <div class="col-lg-6 col-md-6 content-item">
           <img src="images/8.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 content-item background flexbox">
           <h2 class="section-title">Our Galeri</h2>
           <p>Didalam galeri ini terdapat berbagai macam contoh barang antik yang dimiliki oleh kolektor dari berbagai tempat. </p>
           <p>Barang tersebut.... bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
           
           <div>    
               <button type="button" class="btn yellow-btn normal-btn">Galeri</button>
                 
           </div>             
       </div>
   </section>


   <section class="col-md-12 content" id="contact">
       <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
           <img src="images/tlp.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
           <h2 class="section-title">Contact Us</h2>
           <p class="margin-b-25">ingin tau info lebih lanjut silahkan dapat menghubungi kami, melalui dibawah ini :.</p>

           <!--<div class="row"> -->
           <form method="post" name="contact-form" class="contact-form">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <input name="nama_" type="text" class="form-control" id="name" placeholder="Your Name" required>
                </div>    
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-l-3">
                <div class="form-group contact-field">
                    <input name="email_" type="email" class="form-control" id="email" placeholder="Your Email" required>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <input name="subjek" type="text" class="form-control" id="subject" placeholder="Your Subject" required>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <textarea name="pesan" rows="5" class="form-control" id="message" placeholder="Write your message" required></textarea>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group margin-b-0">
                    <input type="submit" name="submit" value="submit" >  
                    <!-- <button type="submit" id="form-submit" class="btn no-bg btn-contact">Submit</button> -->
                </div>    
            </div>
        </form>


       <?php 
          if(isset($_POST['submit'])){
            include "koneksi.php";
            $insert = mysqli_query($conn," INSERT INTO contact_us VALUES
              (NULL,
               '".$_POST['nama_']."',
               
               '".$_POST['email_']."',
               '".$_POST['subjek']."',
               '".$_POST['pesan']."')");
              if ($insert) {
                echo " Pesan telah disampaikan! Terimakasih";
              }else{
                echo "Gagal mengirim pesan";
              }
          }
       ?>

        <!--</div> -->
        <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>

    </div>

    </section>

<?php include "layout/footer.php"; ?>

</div>

<div class="text-center footer">
	<div class="container">
		developers Abraham & AdiN
    </div>
</div>


<!-- Check scroll position and add/remove background to navbar
function checkScrollPosition() {
    if($(window).scrollTop() > 10) {
      $(".fixed-header").addClass("scroll");
  } else {        
      $(".fixed-header").removeClass("scroll");
  }
}

$(document).ready(function () {   
    // Single page nav
    $('.fixed-header').singlePageNav({
        offset: 59,
        filter: ':not(.external)',
        updateHash: true        
    });

    checkScrollPosition();

    // nav bar
    $('.navbar-toggle').click(function(){
        $('.main-menu').toggleClass('show');
    });

    $('.main-menu a').click(function(){
        $('.main-menu').removeClass('show');
    });
});
*/


$(window).on("scroll", function() {
    checkScrollPosition();    
}); -->


</script>
</body>
</html>