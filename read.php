<!DOCTYPE html>
<html lang="en">
<?php
    include 'connect.php';
 
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     


    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Stories</title><link rel="icon" href="assets/img/lo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Countdown-BS4-.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Table-Fixed-Header.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Callout-Info.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-DataTables.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Spinner-Best-Preloader-jquery.css">
    <link rel="stylesheet" href="assets/css/Community-ChatComments.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Contact-form-simple.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/countdown-timer-1.css">
    <link rel="stylesheet" href="assets/css/countdown-timer.css">
    <link rel="stylesheet" href="assets/css/Countdown.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form-1.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/index-top-info-1.css">
    <link rel="stylesheet" href="assets/css/index-top-info.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form-1.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/MUSA_no-more-tables-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_no-more-tables.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/News-Cards-4-Columns-v2.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Contact-Information-bar-line-with-e-mail-link-1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Scroll-To-Top-1.css">
    <link rel="stylesheet" href="assets/css/simple-footer.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Swipe-Slide-1-1.css">
    <link rel="stylesheet" href="assets/css/Swipe-Slide-1.css">
    <link rel="stylesheet" href="assets/css/THANOS_website_series_part_div_preloader.css">
    <link rel="stylesheet" href="assets/css/untitled-1.css">
    <link rel="stylesheet" href="assets/css/untitled-2.css">
    <link rel="stylesheet" href="assets/css/untitled-3.css">
    <link rel="stylesheet" href="assets/css/untitled-4.css">
    <link rel="stylesheet" href="assets/css/untitled-5.css">
    <link rel="stylesheet" href="assets/css/untitled-6.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<?PHP
              
            $id=$_GET['a'];

               

                              

              $query="SELECT * from newsfeed,staff where  newsfeed.news_id='$id'";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
              
              
              if ($rows>0) {
                
                ?>
<body>
    <section>
        <div class="jumbotron" style="margin:0px;padding:0px;">
            <p class="text-center" style="margin: 0px;font-size: 14px;font-family: Raleway, sans-serif;background: #a00054;color: var(--color-white);font-weight: 4;"><i class="fa fa-phone-square"></i>&nbsp;&nbsp;<strong>+2772 778 0512 Or </strong>&nbsp;<i class="fas fa-envelope-square"></i><strong>&nbsp; kabelomighty@gmail.com</strong>&nbsp;</p>
        </div>
    </section>
   <p style="padding-top: 22px;"><a class="btn btn-sm"  href="index.php"style="background: #a00054;color: var(--color-white);border-radius: 0px;">Home</a></p>
    <?php
                    while ($rows=mysqli_fetch_array($result)) {
                  ?>
    <div class="container" style="padding-top: 25px;font-family: Raleway, sans-serif;">
        <div class="row">
            <div class="col-md-8" style="font-family: Raleway, sans-serif;">
                <section class="article-clean">
                    <div class="container">
                        <div class="row" style="font-family: raleway, sans-serif;">
                            <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                                <div class="intro">
                                    <h1 class="text-center" style="font-size: 31px;font-family:  Raleway,, sans-serif;"><?php echo $rows['heading']?></h1>
                                    <p class="text-center"><span class="by">by</span> <a href="#" style="font-family: Raleway, sans-serif;"><?php echo $rows['first_name'].' '.$rows['last_name']?></a><span class="date" style="font-family: Raleway, sans-serif;"><?php echo date("M",strtotime($rows['date']))?> <?php echo date("d",strtotime($rows['date']))?>, <?php echo date("Y",strtotime($rows['date']))?> </span></p><img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode ($rows['image']);?>">
                                </div>
                                <div class="text">
                                    <p style="font-size: 15px;font-family: Raleway, sans-serif;"><?php echo $rows['content'] ?></p>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php
                  
                }
                ?>

<?php
              }else{
                ?>
                
                <?php
              } ?>
            <div class="col-md-4">
            <?PHP
              
           
  
                 
  
                                
  
                $query1="SELECT * from newsfeed where news_id <> '$id'";
                $result1=mysqli_query($conn,$query1);
                
                $rows1=mysqli_num_rows($result1);
                
                
                
                if ($rows1>0) {
                  
                  ?>
                <div class="row">
                    <div class="col">
                        <h1 style="margin-top: 43px;font-family: Raleway, sans-serif;font-size: 20px;border-bottom: 1.75px solid var(--pink);">Related Top Stories</h1>
                    </div>
                    <div class="col-lg-4" style="min-width: 100%;margin-bottom: 17px;">
                        <div class="list-group" style="border-color: rgb(255,255,255);font-family: Barlow, sans-serif;font-size: 15px;">
                        <?php
                        $x=1;
                    while ($rows1=mysqli_fetch_array($result1)) {
                  ?>
                        <a class="list-group-item "  href="read.php?a=<?php echo $rows1['news_id']?>" style="border-top-right-radius: 0px;border-top-left-radius: 0px;border-top-color: rgba(220,220,220,0);border-right-color: rgba(255,255,255,0);border-bottom-color: rgba(0,0,0,0);border-left-color: rgba(255,255,255,0);text-align: left;font-family: Raleway, sans-serif;"><span class="border rounded-0 shadow-none" style="background: #288DC9;color: rgb(241,241,241);">&nbsp;<?php echo $x;?>&nbsp;</span>&nbsp;<span style="text-decoration: underline;"><?php echo $rows1['heading']?></span></a>
                        <?php
                  $x++;
                }
                ?>

<?php 
              }else{
                ?>
                
                <?php
              } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 style="margin-top: 43px;font-family: Raleway, sans-serif;font-size: 20px;border-bottom: 1.75px solid var(--pink);">Our Social Links</h1>
                    </div>
                    <div class="col-lg-4" style="min-width: 100%;margin-bottom: 17px;">
                        <div class="list-group" style="border-color: rgb(255,255,255);font-family: Barlow, sans-serif;font-size: 15px;"><a class="list-group-item list-group-item-action" data-toggle="list" href="#list-home" style="border-top-right-radius: 0px;border-top-left-radius: 0px;border-top-color: rgba(220,220,220,0);border-right-color: rgba(255,255,255,0);border-bottom-color: rgba(0,0,0,0);border-left-color: rgba(255,255,255,0);text-align: left;font-family: Raleway, sans-serif;"><i class="fab fa-youtube-square" style="color: rgb(249,57,57);"></i>&nbsp;Youtube</a><a class="list-group-item list-group-item-action" data-toggle="list" href="#list-profile" style="border-color: rgba(73,80,87,0);border-top-color: rgb(73,80,87);border-bottom-color: rgba(73,80,87,0);text-align: left;font-family: Raleway, sans-serif;"><i class="fab fa-twitter-square" style="color: rgb(57,226,249);"></i>&nbsp;Twitter</a><a class="list-group-item list-group-item-action" data-toggle="list" href="#list-messages" style="border-color: rgba(73,80,87,0);border-top-color: rgb(73,80,87);border-bottom-color: rgba(227,227,227,0);text-align: left;font-family: Raleway, sans-serif;"><i class="fab fa-facebook-square" style="color: rgb(57,99,249);"></i>Facebook</a><a class="list-group-item list-group-item-action" data-toggle="list" href="#list-settings" style="border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;border-color: rgba(73,80,87,0);border-top-color: rgba(73, 80, 87, 0);text-align: left;font-family: Raleway, sans-serif;"><i class="fab fa-whatsapp-square" style="color: rgb(57,249,76);"></i>&nbsp;Whatsapp</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
    <div class="container">
        <div class="row"></div>
    </div>
    <footer class="footer-basic" style="background: #a00054;margin-top: 0px;">
        <ul class="list-inline" style="color: rgb(255,255,255);font-size: 14px;font-family: Raleway, sans-serif;font-weight: 4;">
            <li class="list-inline-item"><a href="#" style="opacity: 1;">Home</a></li>
            <li class="list-inline-item"><a href="#" style="opacity: 1;">Results</a></li>
            <li class="list-inline-item"><a href="#" style="opacity: 1;">Covid19</a></li>
            <li class="list-inline-item"><a href="#" style="opacity: 1;">Reviews</a></li>
            <li class="list-inline-item"><a href="#" style="opacity: 1;">Check Status</a></li>
        </ul>
        <p class="copyright" style="color: rgb(255,255,255);font-family: Raleway, sans-serif;font-weight: 4;">Voting&nbsp;<span style="font-weight: 40;font-family: Alatsi, sans-serif;color: rgb(255,255,255);">Managing</span> System © 2021</p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="assets/js/Bootstrap-DataTables.js"></script>
    <script src="assets/js/DataTable---Fully-BSS-Editable.js"></script>
    <script src="assets/js/-Animated-numbers-section-BS4-.js"></script>
    <script src="assets/js/-Countdown-BS4-.js"></script>
    <script src="assets/js/Bootstrap-Spinner-Best-Preloader-jquery.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="assets/js/countdown-timer.js"></script>
    <script src="assets/js/Countdown.js"></script>
    <script src="assets/js/HTML-Table-to-Excel-V2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/Swipe-Slide-1.js"></script>
    <script src="assets/js/THANOS_website_series_part_div_preloader.js"></script>
</body>

</html>