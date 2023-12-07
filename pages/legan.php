<?php
     include '/xampp/htdocs/project31/Connections/bis.php';
     include '/xampp/htdocs/project31/admin/auth.php';
     include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/aside.php';
     include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/color.php';
   

 ?>

<?php
     $datee= "SELECT DISTINCT `lagna_no`FROM `p31_observers`"; 
     $datee1=mysqli_query($bis, $datee) or die(mysqli_error($bis));

     $odatee= "SELECT DISTINCT `date`FROM `p31_observers`"; 
     $odatee1=mysqli_query($bis, $odatee) or die(mysqli_error($bis));

     $period= "SELECT DISTINCT `period`FROM `p31_observers`"; 
     $period1=mysqli_query($bis, $period) or die(mysqli_error($bis));

    
     $name= "SELECT DISTINCT `name_en`FROM `p31_observers`"; 
     $name1=mysqli_query($bis, $name) or die(mysqli_error($bis));

     $namee= "SELECT DISTINCT `lagna_no`FROM `p31_students_legan` ORDER BY lagna_no ASC"; 
     $namee1=mysqli_query($bis, $namee) or die(mysqli_error($bis));     

    
    ?>


<!DOCTYPE html>
 
<html>
    <head>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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
    </head>
    <body  class="g-sidenav-show  bg-gray-100">


 

 
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">LEGAN</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">LEGAN</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="/admin_dashboard/" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <button  class="btn btn-primary "  >LogOut</button>
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
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            
                      
    </nav>
    <!-- End Navbar -->
  










<?php
                        $observer2='';
                        if(isset($_POST['sort1'])){
                            $date=$_POST['lagna_no'];
                            $dateee=$_POST['date'];
                            $period3=$_POST['period'];
                             $observer1="SELECT  `lagna_no` , `name_en`, `date` , `period`  FROM `p31_observers`WHERE `lagna_no`=$date AND `date`='$dateee' AND `period`= '$period3' ";
                             $observer2=mysqli_query( $bis,$observer1);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in">LEGAN REPORTS</label><br>
      
    <form  style="width: 60%; margin:auto; background-color:#D1D9DF;" method="post" action="legan.php" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center"> 
    <label for="in">CHOOSE LAGNA NUMBER</label><br>
               <select style="text-align: center; color: black;" name='lagna_no' class='form-select' aria-label='Default select example'>
               <?php

foreach  ($datee1 as $datee2){  
?>       

<option value="<?php echo $datee2['lagna_no'];?>"><?php echo $datee2['lagna_no'];?> </option>
<?php
}
?>

                </select> 
                <label for="in">CHOOSE DATE</label><br>
                <select style="text-align: center; color: black;" name='date' class='form-select' aria-label='Default select example'>
               <?php

foreach  ($odatee1 as $odatee3){  
?>       

<option value="<?php echo $odatee3['date'];?>"><?php echo $odatee3['date'];?> </option>
<?php
}
?>
                </select> 
                <label for="in">CHOOSE THE PERIOD</label><br>
                <select style="text-align: center; color: black;" name='period' class='form-select' aria-label='Default select example'>
               <?php

foreach  ($period1 as $period2){  
?>       

<option value="<?php echo $period2['period'];?>"><?php echo $period2['period'];?> </option>
<?php
}
?>
                </select> 
                <button name="sort1" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> LEGAN Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_en</th>
                     
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">lagna_no</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PERIOD</th>
                      

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

if($observer2){
 foreach($observer2 as $observer3)
{
?>
<tr>

<td class="border  " align="center"> <?php echo $observer3['name_en']; ?></td>

<td class="border  " align="center"> <?php echo $observer3['lagna_no']; ?></td>
<td class="border  " align="center"> <?php echo $observer3['date']; ?></td>
<td class="border  " align="center"> <?php echo $observer3['period']; ?></td>

 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


<!----------------OBSERVERS------------------>

      <?php
                        $observer4='';
                        if(isset($_POST['sort2'])){
                            $name=$_POST['name_en'];
                             $observer5="SELECT  *  FROM `p31_observers` WHERE `name_en` = '$name' ";
                             $observer4=mysqli_query( $bis,$observer5);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in">OBSERVERS REPORTS</label><br>
      
    <form  style="width: 60%; margin:auto; background-color:#D1D9DF;" method="post" action="legan.php" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center"> 
    <label for="in">CHOOSE OBSERVER NAME</label><br>
               <select style="text-align: center; color: black;" name='name_en' class='form-select' aria-label='Default select example'>
               <?php

foreach  ($name1 as $name2){  
?>       

<option value="<?php echo $name2['name_en'];?>"><?php echo $name2['name_en'];?> </option>
<?php
}
?>

                </select> 
           
                <button name="sort2" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> OBSERVER Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_en</th>
                     
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">lagna_no</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PERIOD</th>
                      

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

if($observer4){
 foreach($observer4 as $observer5)
{
?>
<tr>

<td class="border  " align="center"> <?php echo $observer5['name_en']; ?></td>

<td class="border  " align="center"> <?php echo $observer5['lagna_no']; ?></td>
<td class="border  " align="center"> <?php echo $observer5['date']; ?></td>
<td class="border  " align="center"> <?php echo $observer5['period']; ?></td>

 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      
      <?php
                        $student4='';
                        if(isset($_POST['sort3'])){
                            $name=$_POST['attendance'];

                             $student5="SELECT p31_students_legan.StudentCode , acceptedstudentdata.EngName , p31_students_legan.lagna_no ,p31_students_legan.date ,p31_students_legan.attendance  FROM 
                             p31_students_legan,acceptedstudentdata WHERE p31_students_legan.StudentCode = acceptedstudentdata.StudentCode 
                             AND p31_students_legan.attendance='0'AND `lagna_no` = '$name' ";
                             
                             $student4=mysqli_query( $bis,$student5);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in">ABSENT STUDENTS REPORTS</label><br>
      
    <form  style="width: 60%; margin:auto; background-color:#D1D9DF;" method="post" action="legan.php" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center"> 
    <label for="in">CHOOSE LAGNA NUMBER</label><br>
               <select style="text-align: center; color: black;" name='attendance' class='form-select' aria-label='Default select example'>
          
               <?php

foreach  ($namee1 as $namee2){  
?>       

<option value="<?php echo $namee2['lagna_no'];?>"><?php echo $namee2['lagna_no'];?> </option>
<?php
}
?>

                </select> 
           
                <button name="sort3" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> STUDENTS Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_en</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">lagna_no</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ATTENDANCE</th>
                      

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

if($student4){
 foreach($student4 as $student1)
 
{
?>
<tr>

<td class="border  " align="center"> <?php echo $student1['EngName']; ?></td>
<td class="border  " align="center"> <?php echo $student1['StudentCode']; ?></td>
<td class="border  " align="center"> <?php echo $student1['lagna_no']; ?></td>
<td class="border  " align="center"> <?php echo $student1['date']; ?></td>
<td class="border  " align="center"> <?php echo $student1['attendance']; ?></td>

 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>



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






