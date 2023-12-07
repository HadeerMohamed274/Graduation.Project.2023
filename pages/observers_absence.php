<?php
    include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/aside.php';
    include '/xampp/htdocs/project31/Connections/bis.php';
    include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/color.php';

      $getData= "SELECT * FROM  p31_observers"; 
      $observers=mysqli_query($bis, $getData) or die(mysqli_error($bis));
      $getData1=mysqli_fetch_array($observers);

    
      $lagna=''; 
    
      if(isset($_POST['lagna_no'])){
          $lagna=$_POST['lagna_no'];
        } 
          
      
          if(isset($_POST['save'])) {
                    
           $lagn= $_POST['lagna'];
            $checkboxes = $_POST['checkbox'];
       
            foreach($checkboxes as $checkbox) {
                $query = "UPDATE `p31_observer_legan` SET `attendance`=0 WHERE id =$checkbox AND lagna_no=$lagn  ";
                mysqli_query($bis, $query);
            }
        }
       
 
    

      
      

    if(isset($_POST['success'])){
      $success=$_POST['success'];
        
      $query = "UPDATE p31_observer_legan SET attendance=1 WHERE id=$success";
      mysqli_query($bis, $query);
    }  

        
 ?>


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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Observers Absence Page</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Observers Absence</h6>
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
       
       <div style=" width: 80%;" class="container-fluid py-4 mt-5">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6> observer Attendance Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <!-- Search with lagna_no -->
              <center><form action="observers_absence.php" method="post">

            <input type="number" name="lagna_no" class="form-control mb-3"  style="width:50%;" placeholder="Search with lagna_no">
            <div > 
                <label for="in">Select Course</label><br>
                  <select style="text-align: center; width:50%; " name='course' class='form-select' aria-label='Default select example'>
               <?php
                   $getData= "SELECT * FROM  courses"; 
                   $courses=mysqli_query($bis, $getData) or die(mysqli_error($bis));
                   $courses1=mysqli_fetch_array($courses);
                   foreach($courses as $course){
               ?>   
                  <option style="color:black;" value="<?php echo $course['CourseCode'] ?>" > <?php echo $course['CourseName'] ?></option>  
                  <?php
                   }
                  ?>                  
                  </select>
              </div>
                  <button class="btn btn-dark" style="margin-top: 8px;" name="search">Search</button>
                  </form></center>   
              <form method="post" action="observers_absence.php">
                <table class="table align-items-center mt-3">
                  <thead>
                    <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lagna Number</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Attendance</th>
 
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                   if($lagna){
                       $coursem= $_POST['course'];
                         $getData= "SELECT * FROM  p31_observer_legan WHERE lagna_no=$lagna AND`attendance`=1 AND `course_code`='$coursem' "   ; 
                         $observer=mysqli_query($bis, $getData) or die(mysqli_error($bis));
                        $getData1=mysqli_fetch_array($observer);
                        foreach($observer as $observers){
                          $x=1
                   ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                         
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $observers['id']; ?></h6>
                          </div>
                        </div>
                      </td>
                      
                       
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $observers['name']; ?></span>
                      </td> 
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $observers['lagna_no']; ?></span>
                        <input type="text" value="<?php echo $observers['lagna_no']; ?>" hidden name="lagna">
                      </td> 
                   
                         
                      <td class="align-middle text-center">
                   
                      <input type="checkbox" name="checkbox[]" value="<?php echo $observers['id']; ?>" >                  
                      </td>
               
                   
                    </tr>
                    
                     <?php
                   $x++;
                  }; }else{};
                       
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
              <h6>Absent observer</h6>
            </div> <center>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Notes</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Add Note</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Retrieve</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                         $getData= "SELECT * FROM  p31_observer_legan WHERE attendance=0"; 
                         $observers=mysqli_query($bis, $getData) or die(mysqli_error($bis));
                        $getData1=mysqli_fetch_array($observers);
                        foreach($observers as $observer){
                   ?>
               
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $observer['name']; ?></h6>
                
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $observer['notes']; ?></span>
                      </td>

                      <td class="align-middle text-center">
                        <?php 
                        if($observer['notes']==NULL){
                        ?>
                      <a href="observersNotes.php?notes=<?php echo $observer['id'] ?> " class="btn btn-dark" >Add Note</a> 
                          <?php }else{?>
                            <a href="observersNotes.php?notes=<?php echo $observer['id'] ?>" class="btn btn-primary">Edit Note</a>
                      <?php }; ?> </td>
                      <td class="align-middle text-center">
                       <?php
                        
                           if($observer['attendance']==0){
                       ?>
                      <a href="observer_absence.php"><button value="<?php echo $observer['id']; ?>" name="success" type="submit" class="btn btn-dark">Retrieve</button></a> 
                          
                      <?php
                           
                           }else
                       ?>
                      </td>
                    </tr>
                     <?php
                        };
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