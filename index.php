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


<?php

include 'connect.php';

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}






if(isset($_POST['post']))
{
    
$name=$_POST['name'];   
$email=$_POST['email'];
$message=$_POST['message'];




$command="INSERT INTO comment(email,message) 
            VALUES ('$email','$message')";



$edit=mysqli_query($conn,$command);  


if($edit){
mysqli_close($conn);

echo '<script>alert("Thanks for sending your message we will get back to you soon.");window.location = "index.php";</script>';

exit;

}

}


?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>Home-VMS</title><link rel="icon" href="assets/img/lo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
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
<style>
	
	

.chromeframe {
    margin: 0.2em 0;
    background: #ccc;
    color: #000;
    padding: 0.2em 0;
}



#loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
	background:#ffff;
}
#loader {
    display: block;
    position: relative;
    left: 50%;
    top: 50%;
    width: 150px;
    height: 150px;
    margin: -75px 0 0 -75px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #a00054;

    -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
    animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */

    z-index: 1001;
}

    #loader:before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: rgb(0,0,0);

        -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    #loader:after {
        content: "";
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #a00054;

        -webkit-animation: spin 2.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
          animation: spin 2.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    @-webkit-keyframes spin {
        0%   { 
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }
    @keyframes spin {
        0%   { 
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }

    #loader-wrapper .loader-section {
        position: fixed;
        top: 0;
        width: 51%;
        height: 100%;
        background:#ffff;;
        z-index: 1000;
        -webkit-transform: translateX(0);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(0);  /* IE 9 */
        transform: translateX(0);  /* Firefox 16+, IE 10+, Opera */
    }

    #loader-wrapper .loader-section.section-left {
        left: 0;
    }

    #loader-wrapper .loader-section.section-right {
        right: 0;
    }

    /* Loaded */
    .loaded #loader-wrapper .loader-section.section-left {
        -webkit-transform: translateX(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: translateX(-100%);  /* IE 9 */
                transform: translateX(-100%);  /* Firefox 16+, IE 10+, Opera */

        -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);  
                transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    }

    .loaded #loader-wrapper .loader-section.section-right {
        -webkit-transform: translateX(100%);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: translateX(100%);  /* IE 9 */
                transform: translateX(100%);  /* Firefox 16+, IE 10+, Opera */

-webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);  
        transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    }
    
    .loaded #loader {
        opacity: 0;
        -webkit-transition: all 0.3s ease-out;  
                transition: all 0.3s ease-out;
    }
    .loaded #loader-wrapper {
        visibility: hidden;

        -webkit-transform: translateY(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: translateY(-100%);  /* IE 9 */
                transform: translateY(-100%);  /* Firefox 16+, IE 10+, Opera */

        -webkit-transition: all 0.3s 1s ease-out;  
                transition: all 0.3s 1s ease-out;
    }
   
 

	.back-link a {
		color: #4ca340;
		text-decoration: none; 
		border-bottom: 1px #4ca340 solid;
	}
	.back-link a:hover,
	.back-link a:focus {
		color: #408536; 
		text-decoration: none;
		border-bottom: 1px #408536 solid;
	}
	h1 {
		height: 100%;
		/* The html and body elements cannot have any padding or margin. */
		margin: 0;
		font-size: 14px;
		font-family: 'Open Sans', sans-serif;
		font-size: 32px;
		margin-bottom: 3px;
	}
	.entry-header {
		text-align: left;
		margin: 0 auto 50px auto;
		width: 80%;
        max-width: 978px;
		position: relative;
		z-index: 10001;
	}
	#demo-content {
		padding-top: 100px;
	}
	
	
	
	</style>
<body>


	<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
    <section>
        <div class="jumbotron" style="margin:0px;padding:0px;">
            <p class="text-center" style="margin: 0px;font-size: 14px;font-family: Raleway, sans-serif;background: #a00054;color: var(--color-white);font-weight: 4;"><i class="fa fa-phone-square"></i>&nbsp;&nbsp;<strong>+2772 778 0512 Or </strong>&nbsp;<i class="fas fa-envelope-square"></i><strong>&nbsp; kabelomighty@gmail.com</strong>&nbsp;</p>
        </div>
    </section>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: rgba(255,255,255,0);font-family: Alef, sans-serif;">
        <div class="container"><a class="navbar-brand" href="#" style="font-weight: 400;font-family: Alatsi, sans-serif;font-size: 25px;"><span>
                    <picture><img src="assets/img/logo.png" style="height: 75px;"></picture>
                </span></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: #ffffff;border-color: rgba(136,136,136,0);"><span class="sr-only">Toggle navigation</span><i class="icon ion-android-menu" style="font-size: 24px;color: #a00054;"></i></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="font-weight: 00;font-size: 15px;font-family: Raleway, sans-serif;">
                <ul class="navbar-nav flex-grow-1 flex-shrink-1 flex-fill justify-content-center mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#" style="color: var(--color-black);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about" style="color: var(--color-black);">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" style="color: var(--color-black);">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#social" style="color: var(--color-black);">Follow us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#result" style="color: var(--color-black);">Election Statistics</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news" style="color: var(--color-black);">News</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="highlight-phone" style="background: rgb(255,255,255);">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h3 class="text-center" style="color: #a00054;padding-top: 0.25em;padding-bottom: 0.25em;font-weight: normal;font-family: Raleway, sans-serif;">VOTING MANAGEMENT SYSTEM</h3>
                        <p style="font-size: 15px;font-family: Raleway, sans-serif;color: #a00054;">Is here to campaigns voting and tabulating results. A robust system provides greater security and confidence.<br></p>
                    </div>
                </div>
                <div class="col-sm-4" style="text-align: left;">
                    <picture><img src="assets/img/favpng_real-estate-background.png" style="height: 234px;filter: hue-rotate(105deg);"></picture>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter-subscribe" style="font-family: Alef, sans-serif;background: #a00054;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(255,255,255);font-weight: normal;font-family: Raleway, sans-serif;">Check your IEC Status Here</h2>
                <p class="text-center" style="color: rgb(255,255,255);font-size: 15px;font-family: Raleway, sans-serif;">What are you waiting for, check your registration status by simply using a click button below.</p>
                <p class="text-center">&nbsp;<button class="btn btn-sm" type="button" onclick="window.open('https://www.elections.org.za/pw/OnlineForms/Check-My-Special-Vote-Application-Status', 'asdas', 'toolbars=0,width=400,height=320,left=200,top=200,scrollbars=1,resizable=1');" value="Open the window" style="background: var(--color-black);color: #ffffff;border-radius: 0px;font-family: Raleway, sans-serif;">Click Here</button></p>
            </div>
        </div>
    </section>
    <div class="container" id="about" style="margin-top: 50px;">
        <h2 class="text-center" style="color: #a00054;font-weight: normal;font-family: Raleway, sans-serif;font-size: 25px;">About V<span style="color: #a00054;font-family: Raleway, sans-serif;">M</span>S</h2>
        <div class="row" style="padding-bottom: 20px;">
            <div class="col-md-8"><img class="img-fluid" src="assets/img/seo3.png" alt="image" style="border-radius: 0px;height: 298.9px;filter: hue-rotate(76deg) saturate(72%);">
                <p style="text-align: left;font-family: Raleway, sans-serif;font-size: 15px;margin-top: 12px;">Voting management systems offer an all-encompassing solution to seemingly onerous elections. From&nbsp;nominations&nbsp;to guaranteeing that ballots are safely delivered and managing a smooth election, these tools literally&nbsp;do it all.<br></p>
            </div>
            <div class="col-md-4">
                <h3 class="my-3" style="font-family: Raleway, sans-serif;font-size: 25px;color: #a00054;font-weight: 4;">What is VMS?</h3>
                <p style="text-align: left;font-family: Raleway, sans-serif;font-size: 15px;">Voting management systems are responsible for managing your entire election, from nominations and campaigns to voting and tabulating results. A robust system provides greater security and confidence.<br></p>
                <h3 class="my-3" style="font-size: 25px;font-family: Raleway, sans-serif;color: #a00054;">Mission</h3>
                <p style="text-align: left;font-family: Raleway, sans-serif;font-size: 15px;">To restore the country's dignity ,restore country status and bring change.<br></p>
            </div>
        </div>
    </div>
    <section class="newsletter-subscribe" style="height: 269.969px;font-family: Alef, sans-serif;background: #a00054;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(255,255,255);font-weight: normal;font-family: Raleway, sans-serif;">Check results here</h2>
                <p class="text-center" style="color: rgb(255,255,255);font-size: 15px;font-family: Raleway, sans-serif;">You can check voting results by simple clicking button below.<br></p>
                <p class="text-center">&nbsp;<a class="btn btn-sm" type="button" href="#result" style="background: var(--color-black);color: #ffffff;border-radius: 0px;font-family: Raleway, sans-serif;">Results</a></p>
            </div>
        </div>
    </section>
    <div class="container" id="news" style="font-family: Raleway, sans-serif;padding-top: 26px;">
        <h2 class="my-4" style="font-family: Raleway, sans-serif;font-size: 25px;color: #a00054;"><i style="color: #a00054;" class="fa fa-newspaper-o"></i>&nbsp;News</h2>
        <div class="row">
        <?PHP
              
             

               

                              

              $query="SELECT * from newsfeed,staff";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
             
              
              if ($rows>0) {
                while ($rows=mysqli_fetch_array($result)) {
                ?>
                
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card h-100"><a href="#"><img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode ($rows['image']);?>" style="border-radius: 0px;"></a>
                    <div class="card-body">
                        <h4 class="card-title" style="font-size: 15px;font-family: Raleway, sans-serif;"><?php echo $rows['heading'] ?></h4>
                        <h6 class="text-muted card-subtitle mb-2" style="font-size: 13px;font-family: Raleway, sans-serif;"><i class="fa fa-user" style="color: #a00054;"></i>&nbsp;<?php echo $rows['first_name'].' '.$rows['last_name'] ?></h6><a class="card-link" href="read.php?a=<?php echo $rows['news_id']?>" style="font-family: Raleway, sans-serif;color: #a00054;font-size: 13px;">Read more</a>
                    </div>
                </div>
            </div>
            
            <?php
                  
                }
            }
                ?>


        </div>
    </div>
    <div id="wrapper" style="margin-top: 40px;background: #a00054;">
        <div class="container">
            <h2 style="font-family: Raleway, sans-serif;font-size: 25px;color: var(--color-white);">Countdown</h2>
            <div id="clockdiv">
                <div class="clock-wrapper" style="background: var(--color-white);border-radius: 0px;"><span class="days" style="background: #a00054;"> </span>
                    <div class="smalltext">
                        <p style="color: #a00054;font-size: 15px;font-family: Raleway, sans-serif;">Days </p>
                    </div>
                </div>
                <div class="clock-wrapper" style="background: var(--color-white);border-radius: 0px;"><span class="hours" style="background: #a00054;"> </span>
                    <div class="smalltext">
                        <p style="color: #a00054;font-family: Raleway, sans-serif;font-size: 15px;">Hours </p>
                    </div>
                </div>
                <div class="clock-wrapper" style="background: var(--color-white);border-radius: 0px;"><span class="minutes" style="background: #a00054;"> </span>
                    <div class="smalltext">
                        <p style="color: #a00054;font-family: Raleway, sans-serif;font-size: 15px;">Minutes </p>
                    </div>
                </div>
                <div class="clock-wrapper" style="background: var(--color-white);border-radius: 0px;"><span class="seconds" style="background: #a00054;"> </span>
                    <div class="smalltext">
                        <p style="color: #a00054;font-family: Raleway, sans-serif;font-size: 15px;">Seconds </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card"></div>
    <section id="result" class="bg-info text-white" style="background: rgb(46,55,57);">
        <div class="container text-center">
            <div class="row pt-5">
                <div class="col-md-8 offset-md-2">
                    <h2 style="color: #a00054;font-size: 25px;font-family: Raleway, sans-serif;">Did you know?</h2>
                    <p class="m-0 lead" style="color: #a00054;font-family: Raleway, sans-serif;font-size: 15px;">Here is what to know about the votes.&nbsp;</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-sm-6 col-lg-3 pt-5">
                    <p class="m-0"><i class="fa fa-pie-chart fa-3x" aria-hidden="true" style="color: #a00054;"></i></p>
                    <p class="m-0 display-4"> <span class="nbanimate" style="color: #a00054;font-size: 30px;">325<br></span></p>
                    <h2 style="color: #a00054;font-family: Raleway, sans-serif;font-size: 15px;">Political Parties</h2>
                </div>
                <div class="col-sm-6 col-lg-3 pt-5">
                    <p class="m-0"><i class="fab fa-medapps fa-3x" aria-hidden="true" style="color: #a00054;"></i></p>
                    <p class="m-0 display-4">&nbsp;<span class="nbanimate nbreplay" style="color: #a00054;font-size: 30px;">278</span></p>
                    <h2 style="color: #a00054;font-family: Raleway, sans-serif;font-size: 15px;">Municipalities</h2>
                </div>
                <div class="col-sm-6 col-lg-3 pt-5">
                    <p class="m-0"><i class="fa fa-bar-chart-o fa-3x" aria-hidden="true" style="color: #a00054;"></i></p>
                    <p class="m-0 display-4"> <span class="nbanimate" style="color: #a00054;font-size: 30px;">23 151<br></span></p>
                    <h2 style="color: #a00054;font-family: Raleway, sans-serif;font-size: 15px;">Voting Stations</h2>
                </div>
                <div class="col-sm-6 col-lg-3 pt-5">
                    <p class="m-0"><i class="fa fa-group fa-3x" aria-hidden="true" style="color: #a00054;"></i></p>
                    <p class="m-0 display-4"> <span class="nbanimate" style="color: #a00054;font-size: 30px;">&gt; 400 000</span></p>
                    <h2 style="color: #a00054;font-family: Raleway, sans-serif;font-size: 18px;">Registered for voting</h2>
                </div>
            </div>
        </div>
    </section>
    <?PHP
              
             

               

                              

              $query="SELECT
              party.party_code AS CODE,
              party.party_name AS NAME,
              party.logo AS LG,
            
              sum(tblvote.total) AS VOTES
          FROM
              tblvote,party
          WHERE tblvote.approved='1' AND
              party.party_id = tblvote.party_id
            GROUP BY tblvote.party_id";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
             $x=1;
              $total=0;
              
              $maxi=array();
              $party=array();
              if ($rows>0) {
                while ($rows=mysqli_fetch_array($result)) {

                    $maxi[]=$rows['VOTES'];
                    $total=$total+$rows['VOTES'];
                    //party names
                     $party[]=$rows['CODE'];
                                    
                                                                 
                 
                }
                 $x++;
                
            }
                ?>
    <marquee  style="color: var(--color-white);font-size: 19px;font-family: Raleway, sans-serif;background: #a00054;">Leading party&nbsp;<i class="icon ion-arrow-right-b" style="color: rgb(84,215,4);"></i>&nbsp;
    
    <?php 

                $large=max($maxi);


                 $select="SELECT
                 party.party_code AS CODE,
                 party.party_name AS NAME,
                 sum(tblvote.total) AS VOTES
                 FROM
                 tblvote,party
                 WHERE tblvote.approved='1' AND
                 party.party_id = tblvote.party_id         
                 GROUP BY tblvote.party_id
                 HAVING SUM(tblvote.total)=$large";


                $resu=mysqli_query($conn,$select) or die(mysqli_error($conn));
                $data=mysqli_fetch_array($resu);
                 
                 $perc=($large/$total)*100;
                echo $data['CODE'].' with '.number_format($perc,1).'%';?>
    &nbsp;<i class="icon ion-arrow-left-b" style="color: rgb(84,215,4);"></i></marquee>
   
   
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="font-family: Raleway, sans-serif;font-size: 25px;padding-top: 37px;color: #a00054;">Statistics of votes</h2>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 39px;">
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header py-2" style="background: #a00054;">
                        <p class="lead text-info m-0" style="color: var(--color-white);font-size: 15px;"><strong>Graphical display of total votes </strong></p>
                    </div>
                    <?php

 if (!$conn) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT party.party_code AS CODE,
      
              party.logo AS LG,
            
              sum(tblvote.total) AS VOTES
          FROM
              tblvote,party
          WHERE tblvote.approved='1' AND
              party.party_id = tblvote.party_id
            GROUP BY tblvote.party_id";
         $result = mysqli_query($conn,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['CODE']  ;
            $sales[] = $row['VOTES'];
        }
 
 
 }
 
 
?>
                    <div class="card-body" style="font-family: Raleway, sans-serif;font-size: 14px;">
                        <div style="font-size: 14px;"><canvas id="chartjs_bar" ></canvas></div>
                    </div>
                    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                                <script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Alef',
                            fontSize: 12,
                        }
                    },
 
 
                }
                });
    </script>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header py-2" style="background: #a00054;">
                        <p class="lead text-info m-0" style="color: var(--color-white);font-size: 15px;"><strong>Graphical display of total votes</strong></p>
                    </div>
                    <?php   
		$fetchqry = "SELECT party.party_code AS CODE,
      
        party.logo AS LG,
      
        sum(tblvote.total) AS VOTES
    FROM
        tblvote,party
    WHERE tblvote.approved='1' AND
        party.party_id = tblvote.party_id
      GROUP BY tblvote.party_id";
		$result1=mysqli_query($conn,$fetchqry);
		
	
?>
                    <div class="card-body">
                      
                        <div id="piechart"></div>
                    </div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
 <script type="text/javascript">
 // Load google charts
 google.charts.load('current', {'packages':['corechart']});
 google.charts.setOnLoadCallback(drawChart);
  
 // Draw the chart and set the chart values
 function drawChart() {
   var data = google.visualization.arrayToDataTable([
   ['Hobbies', 'Time in Hours'], <?php
         $result1=mysqli_query($conn,$fetchqry);
   while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
   echo "['".$row1['CODE']."', ".$row1['VOTES']."],";
    } ?>  ]);
   // Optional; add a title and set the width and height of the chart
   var options = {'title':'', 
                  'width':'auto', 
                  'height':'auto',
                  // pieHole: 0.2,
                   };
  
   // Display the chart inside the <div> element with id="piechart"
   var chart = new google.visualization.PieChart(document.getElementById('piechart'));
   chart.draw(data, options);
 }
 </script>
                </div>
            </div>
        </div>
    </div>
    <section id="social"  class="newsletter-subscribe" style="font-family: Alef, sans-serif;background: #a00054;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(255,255,255);font-weight: normal;font-family: Raleway, sans-serif;">How is the votes at your area?</h2>
                <p class="text-center" style="color: rgb(255,255,255);font-size: 15px;font-family: Raleway, sans-serif;">Leave comments below.</p>
            </div>
        </div>
    </section>
    <div class="container" style="padding-top: 25px;">
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <div class="card">
                    <div class="card-header" style="background: #a00054;">
                        <h3 style="font-size: 15px;color: var(--color-white);">Comments</h3>
                    </div>
                    <div class="card-body border-white" style="border-color: var(--color-white);border-top-color: var(--color-white);border-right-color: var(--color-white);border-bottom-color: var(--color-white);border-left-color: var(--color-white);">
                        <ul class="list-group">
                           
                        <?PHP
              
             

               

                              

              $qu="SELECT * from community_comment ORDER BY time ASC";
              $re=mysqli_query($conn,$qu);
              
              $ro=mysqli_num_rows($re);
              
             
              
              if ($ro>0) {
                while ($ro=mysqli_fetch_array($re)) {
                ?>
                        <li class="list-group-item" style="margin-bottom:6px;">
                                <div class="media">
                                    <div></div>
                                    <div class="media-body">
                                        <div class="media" style="overflow:visible;">
                                            <div><img class="mr-3" style="width: 25px; height:25px;" src="assets/img/avatar.png"></div>
                                            <div class="media-body" style="overflow:visible;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p style="font-size: 14px;"><a href="#" style="color: #a00054;"><?php echo $ro['name'] ?></a> 
                                                       <?php echo $ro['message']?> <br>
                                                         <small class="text-muted"><?php echo $ro['time']; ?></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


     
                            <?php
                  
                }
            }
                ?>

                            
                        </ul>
                        <p style="text-align: left;"><a class="btn btn-sm" type="link"  href="comment.php" style="font-size: 13px;border-radius: px;background: #a00054;color: rgb(255,255,255);">add comment</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <h2 style="padding-top: 10px;font-size: 25px;text-align: left;color: #a00054;">Follow us</h2>
                <ul class="list-unstyled" style="text-align: left;">
                    <li><a href="#" style="color: #a00054;"><i class="fa fa-facebook-square" style="color: rgb(17,104,191);"></i>&nbsp;facebook</a></li>
                    <li><a href="#" style="color: #a00054;"><i class="fa fa-twitter-square" style="color: rgb(30,223,235);"></i>&nbsp;twitter</a></li>
                    <li><a href="#" style="color: #a00054;"><i class="fab fa-whatsapp-square" style="color: rgb(105,237,72);"></i>&nbsp;whatsapp</a></li>
                    <li><a href="#" style="color: #a00054;"><i class="fa fa-youtube-square" style="color: rgb(218,0,0);"></i>&nbsp;youtube</a></li>
                </ul>
            </div>
        </div>
    </div>
	<br><br><br>
    <div class="container"></div>
    <section class="newsletter-subscribe" style="font-family: Alef, sans-serif;background: #a00054;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(255,255,255);font-weight: normal;font-family: Raleway, sans-serif;">For more information?</h2>
                <p class="text-center" style="color: rgb(255,255,255);font-size: 15px;font-family: Raleway, sans-serif;">Please click the link&nbsp;&nbsp;<a href="https://www.elections.org.za/pw/" target="blank" style="color: var(--color-white);">IEC website</a></p>
            </div>
        </div>
    </section>
    <div class="container" id="contact">
        <div class="row">
            <div class="col-md-6">
                <h2 style="margin-top: 47px;font-size: 25px;font-weight: 4;color: #a00054;">Contact Us</h2>
                <div>
                    <p style="font-size: 15px;text-align: center;">We are always available to respond or give you feedback.</p>
                    <p style="font-size: 15px;text-align: center;"><i style="color: #a00054;" class="fas fa-map-marked-alt"></i>&nbsp; 88 Marshall Street,2nd Floor Samancor House, Marshalltown<br>,Johannesburg ,2107<br></p>
                    <p style="font-size: 15px;text-align: center;"><i style="color: #a00054;" class="fa fa-envelope-o"></i>&nbsp;Info@vms.org.za</p>
                    <p style="font-size: 15px;text-align: center;"><i style="color: #a00054;" class="fa fa-phone"></i>&nbsp;+27 68 159 6956<br></p>
                </div>
            </div>
            <div class="col-md-6">
                <section class="contact-clean" style="background: rgb(255,255,255);">
                    <form class="shadow-none" method="post">
                        <h2 class="text-center" style="font-size: 25px;font-weight: 4;color: #a00054;">For Enquiries</h2>
                        <div class="form-group"><input class="form-control form-control-sm" type="text" name="name" placeholder="Name" style="border-width: 0px;border-color: rgb(255,255,255);border-radius: 0px;" required></div>
                        <div class="form-group"><input class="form-control form-control-sm is-invalid" type="email" name="email" placeholder="Email" style="border-width: 0px;border-color: rgb(255,255,255);border-radius: 0px;" required></div>
                        <textarea class="form-control form-control-sm" name="message" placeholder="Message" rows="5" style="border-width: 0px;border-color: var(--color-white);border-radius: 0px;" required></textarea>
                        <div class="form-group" style="margin-bottom: -7px;margin-top: 15px;"><button class="btn btn-sm" type="submit" name="post" style="background: #a00054;font-weight: 4;border-radius: 0px;color: var(--color-white);">send </button></div>
                    </form>
                </section>
            </div>
        </div>
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
    </footer><a class="shadow-lg" id="scroll-to-top" title="Scroll to top" href="#" style="margin-bottom: 10px;background: rgba(255,255,255,0.59);border-top-right-radius: 0px;border-top-left-radius: 0px;"><i class="fas fa-angle-up" style="color: #a00054;"></i></a>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
</html>