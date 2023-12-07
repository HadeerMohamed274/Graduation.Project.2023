<?php
    include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/aside.php';
    include '/xampp/htdocs/project31/Connections/bis.php';
     include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/color.php';

     $getData= "SELECT * FROM  p31_doctor_exam"; 
     $doctors=mysqli_query($bis, $getData) or die(mysqli_error($bis));
    $getData1=mysqli_fetch_array($doctors);

    
    if(isset($_POST['save'])) {
      $checkboxes = $_POST['checkbox'];
      foreach($checkboxes as $checkbox) {
          $query = "UPDATE p31_doctor_exam SET attendance=0 WHERE id=$checkbox";
          mysqli_query($bis, $query);
      }
  }
 
    

      
      

    if(isset($_POST['success'])){
      $success=$_POST['success'];
        
      $query = "UPDATE p31_doctor_exam SET attendance=1 WHERE id=$success";
      mysqli_query($bis, $query);
    }  

        
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/bis.jpg">
  <title>
    Graduation Project 31
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <link rel="stylesheet" href="/admin_dashboard/adminDash/assets/css/all.min.css">
  <script src="https://kit.fontawesome.com/d941f7cd74.js" crossorigin="anonymous"></script>
  <script src="/admin_dashboard/adminDash/assets/js/all.min.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" rel="stylesheet"/>

  <style>
    .content{
        text-align: right;
        margin-right: 50px;
    }
    .mfp-hide{
        display: none; 
    }
    .button{
        padding: 10px 20px;
        border-color: blue;
        font-size: 1.2rem;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
        display: inline-block;
    }
    .button{
        border: 5px solid darkblue;
        color: black;
        text-transform: uppercase;
        transition: all 0.5s ease-in-out;
        border-radius: 50px;

    }
    .button .fa{
        margin-left: 5px;
    }
    .button:hover , .button:focus{
        background: transparent;
        text-decoration: none;
        color: blue;
        font-weight: bold;
        outline: none;
    }
    .video-container{
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 99999;
      background-color: black;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      pointer-events: none;
      transition: all 0.3s;
    }

    .video-container .close{
      position: absolute;
      top: 10%;
      right: 25px;
      font-size: 20px;
      cursor: pointer;
    }
    .video-container video{
      width: 90%;
      max-width: 800px;
      transform: scale(0);
      box-shadow: 0 20px 20px black;
      outline: none;
      transition: all 0.3s;
    }
    .video-container.show{
      pointer-events: all;
      opacity: 1;
    }
    .video-container.show video{
      transform: scale(1);
    }
  </style>
  <script>
    $('#videolink').magnificPopup({
      type:'inline',
      midClick:true

    })
  </script>
  
</head>

<body class="g-sidenav-show  bg-gray-100">
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Doctors Absence Page</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Doctors Absence</h6>
        </nav>
       
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="/admin_dashboard/" class="nav-link text-body font-weight-bold px-0">
                
                <button  class="btn btn-dark "  >LogOut</button>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                
              </a>
            </li>
            
                      
    </nav>
    <!-- End Navbar -->

    <!-- Guide -->
    <div class="content">
      <a href="#" class="button">Need Help..?<i class="fa fa-play-circle" aria-hidden="true"></i></a>
      <div class="video-container" style="max-width: 25%; margin:0 auto;">
        <span class="close">&#10006;</span>
        <video width="560" height="310" src="Session5Part1.mp4" controls></video>
      </div>
    </div>
    
<div class="row">
       
       <div style="width: 80%;" class="container-fluid py-4 mt-5">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>doctor Attendance Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <form method="post" action="doctor_absence.php">
                <table class="table align-items-center mt-3">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Building_no</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Attendance</th>
 
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                         $getData= "SELECT * FROM  p31_doctor_exam WHERE attendance=1" ; 
                         $doctors=mysqli_query($bis, $getData) or die(mysqli_error($bis));
                        $getData1=mysqli_fetch_array($doctors);
                        foreach($doctors as $doctor){
                          $x=1
                   ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets//img/<?php echo $doctor['image'];?>" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $doctor['name_en']; ?></h6>
                          </div>
                        </div>
                      </td>
                      
                       
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $doctor['building_no']; ?></span>
                      </td> 
                      <?php
                       
                  ?>
                         
                      <td class="align-middle text-center">
                   
                      <input type="checkbox" name="checkbox[]" value="<?php echo $doctor['id']; ?>" >
            
                  
                  
                      </td>
               
                   
                    </tr>
                    
                     <?php
                   $x++;
                  }; 
                       
                     ?>
                  </tbody>
                  
                </table>
                 

                <center> <button type="submit" name="save" class="btn btn-dark btn-block">save</button></center> 
          
                              

              </div>
            </div>
          </div>
        </div>
      </div>

      <div><button class="btn btn-info" style="color: white; text-align:center; margin-left:150px;"> <a href="excel/doctorsabsencedownload.php">Download As Excel Sheet</a></button></div>
      <div style=" width: 80%;" class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
           <center> <div class="card-header pb-0">
              <h6>Absent doctor</h6>
            </div> <center>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">building_no</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Retrieve</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                         $getData= "SELECT * FROM  p31_doctor_exam WHERE attendance=0"; 
                         $doctors=mysqli_query($bis, $getData) or die(mysqli_error($bis));
                        $getData1=mysqli_fetch_array($doctors);
                        foreach($doctors as $doctor){
                   ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets//img/<?php echo $doctor['image'];?>" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $doctor['name_en']; ?></h6>
                       
                          </div>
                        </div>
                      </td>
                      
                    
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $doctor['building_no']; ?></span>
                      </td>

                      <td class="align-middle text-center">
                       <?php
                        
                           if($doctor['attendance']==0){
                       ?>
                      <a href="doctor_absence.php"><button value="<?php echo $doctor['id']; ?>" name="success" type="submit" class="btn btn-dark">Retrieve</button></a> 
                          
                    
                
                    
                      </td>
                    </tr>
                     <?php
                          };
                        }
                     ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  
        <!-- Excel Script -->
        <script>
      const button = document.querySelector('.button');
      const videocontainer = document.querySelector('.video-container');
      const close = document.querySelector('.close');

      button.addEventListener('click',()=>{
        videocontainer.classList.add('show');
      })
      close.addEventListener('click',()=>{
        videocontainer.classList.remove('show');
      })
    </script>

      <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>