<!DOCTYPE html>
<html>
<?php
    include 'connect.php';
    //cart Check
   
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     
      if(!isset($_SESSION)) 
      { 
          session_start(); 
          $email=$_SESSION['email'];
          $id=$_SESSION['staff_id'];
      }

      $qry="SELECT * from staff where email='$email' and position='Admin'";

      $res=mysqli_query($conn,$qry);
    
      $data=mysqli_fetch_array($res);

   



    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
</head>

<body id="page-top" style="font-family: Alata, sans-serif;font-weight: 60;">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="opacity: 1;">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><a href="dashboard.php" style="font-weight: 6;color: rgb(153,20,156);">Back To Account</a>  
                    <ul class="navbar-nav flex-nowrap ml-auto">
                        
                           
                            <li class="nav-item dropdown no-arrow mx-1"></li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                           
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-family: Alata, sans-serif;font-weight: 60;font-size: 13.8px;"><?php echo $data['last_name'].' '. $data['first_name'];?></span><img class="border rounded-circle img-profile" src="assets/img/password-key-pngrepo-com.png"></a>
                                    
                                       
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid" style="opacity: 1;">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0" style="font-family: Alata, sans-serif;color: rgb(153,20,156);">Admin</h3>
                    </div>
                    <div class="row">
                        <div class="col">
                            <section class="mt-4">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card shadow">
                                                <div class="card-header py-2"><a class="btn btn-sm" role="button" style="background: rgb(153,20,156);color: rgb(255,255,255);font-weight: 60;" href="addnews.php?edt=<?php echo $data['staff_id'] ?>"><i class="fa fa-plus-square"></i>&nbsp;Upload News</a></div>
                                                <div class="card-body" style="font-size: 12px;font-weight: 10;">
                                                    <div class="table-responsive table mb-0 pt-3 pr-2">
                                                        <table class="table table-striped table-sm my-0 mydatatable">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Heading</th>
                                                                    <th>Content</th>
                                                                
                                                                    <th>Action&nbsp;<i class="fa fa-cogs"></i></th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <?PHP
              
             

               

                              

              $query="SELECT * from newsfeed where staff_id='$id'";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
             
              
              if ($rows>0) {
                
                ?>
                                                            <tbody>
                                                            <?php
                                                            while ($rows=mysqli_fetch_array($result)) {
                                                          ?>
                  
                                                                <tr>
                                                                    <td><?php echo $rows['news_id']; ?></td>
                                                             
                                                                    <td><?php echo $rows['heading']; ?></td>
                                                                    <td><?php echo $rows['content']; ?></td>
                                                                    <td>
                                                                        <p><a href="edit.php?edt=<?php echo $rows['news_id']?>" style="color: rgb(48,28,129);font-size: 14px;">Edit</a>&nbsp;<a href="del.php?edt=<?php echo $rows['news_id']  ?>" style="color: rgb(48,28,129);font-size: 14px;">Delete</a> </p>
                                                                    </td>
                                                                    
                                                                </tr>
                                                               
                                                                <?php
                  
                }
                ?>
                                                            </tbody>
                                                        </table>
                                                        <?php
                                                }else{
                                                  ?>
                                                  
                                                  <?php
                                                } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
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
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="assets/js/DataTable---Fully-BSS-Editable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>