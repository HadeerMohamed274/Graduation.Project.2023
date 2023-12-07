<?php
    include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/aside.php';
    include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/color.php';
    include '/xampp/htdocs/project31/Connections/bis.php';

    $count= "SELECT name_en , COUNT(`attendance`) AS count FROM p31_staff WHERE `attendance` ='1' GROUP by `name_en`";
    $result=mysqli_query($bis, $count) or die(mysqli_error($bis));
   
   
    
     
     

    $datee= "SELECT DISTINCT `date` FROM `p31_observers`"; 
    $datee1=mysqli_query($bis, $datee) or die(mysqli_error($bis));

    $sdatee= "SELECT DISTINCT `date` FROM `p31_staff`"; 
    $sdatee1=mysqli_query($bis, $sdatee) or die(mysqli_error($bis));


    $ddatee= "SELECT DISTINCT `date` FROM `p31_doctor_exam`"; 
    $ddatee1=mysqli_query($bis, $ddatee) or die(mysqli_error($bis));

    $stdatee= "SELECT DISTINCT `date` FROM `p31_students_legan`"; 
    $stdatee1=mysqli_query($bis, $stdatee) or die(mysqli_error($bis));

    $datee= "SELECT DISTINCT `lagna_no`FROM `p31_observers`"; 
     $datee12=mysqli_query($bis, $datee) or die(mysqli_error($bis));

     $odatee= "SELECT DISTINCT `date`FROM `p31_observers`"; 
     $odatee1=mysqli_query($bis, $odatee) or die(mysqli_error($bis));

     $period= "SELECT DISTINCT `period`FROM `p31_observers`"; 
     $period1=mysqli_query($bis, $period) or die(mysqli_error($bis));

    
     $name= "SELECT DISTINCT `name_en`FROM `p31_observers`"; 
     $name1=mysqli_query($bis, $name) or die(mysqli_error($bis));

     $namee= "SELECT DISTINCT `lagna_no`FROM `p31_students_legan` ORDER BY lagna_no ASC"; 
     $namee1=mysqli_query($bis, $namee) or die(mysqli_error($bis));     


    // Retrieve data from database
 
$sql = "SELECT * FROM p31_observers";
$result = mysqli_query($bis, $sql);

 
$count = 0;
$total = mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result)) {
  if ($row['attendance'] ==0) {
    $count++;
  }
} 
$percent = round(($count / $total) * 100);


// staff
$sql1 = "SELECT * FROM p31_staff";
$result1 = mysqli_query($bis, $sql1);
$count1 = 0;
$total1 = mysqli_num_rows($result1);
while ($row1 = mysqli_fetch_assoc($result1)) {
  if ($row1['attendance'] ==0) {
    $count1++;
  }
}
$percent1 = round(($count1 / $total1) * 100);

// doctors
$sql2 = "SELECT * FROM p31_doctor_exam";
$result2 = mysqli_query($bis, $sql2);
$count2 = 0;
$total2 = mysqli_num_rows($result2);
while ($row2 = mysqli_fetch_assoc($result2)) {
  if ($row2['attendance'] ==0) {
    $count2++;
  }
}
$percent2 = round(($count2 / $total2) * 100);


// Student
$sql3 = "SELECT * FROM p31_students_legan";
$result3 = mysqli_query($bis, $sql3);
$count3 = 0;
$total3 = mysqli_num_rows($result3);
while ($row3 = mysqli_fetch_assoc($result3)) {
  if ($row3['attendance'] ==0) {
    $count3++;
  }
}
$percent3 = round(($count3 / $total3) * 100);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/bis.jpg">
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
  <script src="https://kit.fontawesome.com/d941f7cd74.js" crossorigin="anonymous"></script>

    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <?php
      echo $percent3;
  ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
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
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard">Online Builder</a>
                        </li>
                        
                      
                         <a name="logout" href="/project31/admin/login.php"  > <button  class="btn btn-primary "  >LogOut</button> </a>
                    
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
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i></a>

                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
              
            </div>
        </nav>


      
        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <center> <h4>Attandance Chart</h4></center>
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Companies</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Attandace</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                   
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"> Observers Attandance</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                                        <img src="../assets/img/team-1.jpg" alt="team1">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="marie  ">
                                                        <img src="../assets/img/marie.jpg" alt="team2">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                                                        <img src="../assets/img/team-3.jpg" alt="team3">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ahmed">
                                                        <img src="../assets/img/team-4.jpg" alt="team4">
                                                    </a>
                                                </div>
                                            </td>
 
                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <div class="progress-info">
                                                        <div class="progress-percentage">
                                                            <span class="text-xs font-weight-bold"><?php echo $percent; ?>%</span>
                                                        </div>
                                                    </div>
                                                       <div class="progress">
                                                            <div class="progress-bar bg-gradient-info " role="progressbar" style="width: <?php echo $percent; ?>%; height:10px;" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percent; ?>%</div>
                                                     </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                   
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"> Sttaf Attandance</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                                        <img src="../assets/img/team-1.jpg" alt="team1">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hossam Mustafa">
                                                        <img src="../assets/img/hossam1.jpg" alt="team2">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                                                        <img src="../assets/img/team-3.jpg" alt="team3">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hossam">
                                                        <img src="../assets/img/hossam.jpg" alt="team4">
                                                    </a>
                                                </div>
                                            </td>
 
                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <div class="progress-info">
                                                        <div class="progress-percentage">
                                                            <span class="text-xs font-weight-bold"><?php echo $percent1; ?>%</span>
                                                        </div>
                                                    </div>
                                                       <div class="progress">
                                                            <div class="progress-bar bg-gradient-primary " role="progressbar" style="width: <?php echo $percent1; ?>%; height:10px;" aria-valuenow="<?php echo $percent1; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percent1; ?>%</div>
                                                     </div>
                                                </div>
                                            </td>
                                        </tr>
                                        


                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                   
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"> Doctors Attandance</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                                        <img src="../assets/img/team-1.jpg" alt="team1">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hossam Mustafa">
                                                        <img src="../assets/img/team-4.jpg" alt="team2">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                                                        <img src="../assets/img/team-3.jpg" alt="team3">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="engy">
                                                        <img src="../assets/img/marie.jpg" alt="team4">
                                                    </a>
                                                </div>
                                            </td>
 
                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <div class="progress-info">
                                                        <div class="progress-percentage">
                                                            <span class="text-xs font-weight-bold"><?php echo $percent2; ?>%</span>
                                                        </div>
                                                    </div>
                                                       <div class="progress">
                                                            <div class="progress-bar bg-gradient-success " role="progressbar" style="width: <?php echo $percent2; ?>%; height:10px;" aria-valuenow="<?php echo $percent2; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percent2; ?>%</div>
                                                     </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        
                                       
                                      
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                   
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"> Student Attandance</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                                        <img src="../assets/img/team-1.jpg" alt="team1">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hossam Mustafa">
                                                        <img src="../assets/img/team-4.jpg" alt="team2">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                                                        <img src="../assets/img/team-3.jpg" alt="team3">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="engy">
                                                        <img src="../assets/img/marie.jpg" alt="team4">
                                                    </a>
                                                </div>
                                            </td>
 
                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <div class="progress-info">
                                                        <div class="progress-percentage">
                                                            <span class="text-xs font-weight-bold"><?php echo $percent3; ?>%</span>
                                                        </div>
                                                    </div>
                                                       <div class="progress">
                                                            <div class="progress-bar bg-gradient-dark " role="progressbar" style="width: <?php echo $percent3; ?>%; height:10px;" aria-valuenow="<?php echo $percent3; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percent3; ?>%</div>
                                                     </div>
                                                </div>
                                            </td>
                                        </tr>  

                                    </tbody>
                                </table>
                            </div>
                        </div>
 



                        <?php
                        $observers='';
                        if(isset($_POST['sort'])){
                            $attan=$_POST['attan'];
                             $observer="SELECT * FROM p31_observers  WHERE attendance=$attan ";
                             $observers=mysqli_query( $bis,$observer);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in">Sort by attandance</label><br>
    <form  style="width: 60%; margin:auto; background-color:#D1D9DF;" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center" method="post" action="dashboard.php"> 
   <label for="in">CHOOSE ATTENDANCE OR ABSCENCE</label><br>
               <select style="text-align: center; color: black;" name='attan' class='form-select' aria-label='Default select example'>
                <option value="1" >attendee</option>
                <option value="0" > Absent</option>
                </select> 
                <button name="sort" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> Observers Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_en</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_ar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nid</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">attendance</th>
                      

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
$x=1;
if($observers){
 foreach($observers as $observer)
{
?>
<tr>
<td class="border  "align="center"> <?php echo $observer['code']; ?></td>
<td class="border  " align="center"> <?php echo $observer['name_en']; ?></td>
<td class="border  " align="center"> <?php echo $observer['name_ar']; ?></td>
<td class="border  " align="center"> <?php echo $observer['nid']; ?></td>
<td class="border  " align="center"> <?php echo $observer['phone']; ?></td>
<td class="border  " align="center"> <?php echo $observer['attendance']; ?></td>
 
 

 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>




   </div>



      

                        <?php
                        $observer2='';
                        if(isset($_POST['sort1'])){
                            $date=$_POST['date'];
                             $observer1="SELECT * FROM `p31_observers` WHERE date = '$date' ";
                             $observer2=mysqli_query( $bis,$observer1);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in">Sort observers repots by date</label><br>
    <form style="width: 60%; margin:auto; background-color:#D1D9DF;" method="post" action="dashboard.php" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center"> 
    <label for="in">CHOOSE DATE</label><br>
               <select style="text-align: center; color: black;" name='date' class='form-select' aria-label='Default select example'>
               <?php

foreach  ($datee1 as $datee2){  
?>       

<option value="<?php echo $datee2['date'];?>"><?php echo $datee2['date'];?> </option>
<?php
}
?>
                </select> 
                <button name="sort1" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> Date Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_en</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_ar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nid</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">attendance</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">date</th>
                      

                       
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
<td class="border  "align="center"> <?php echo $observer3['code']; ?></td>
<td class="border  " align="center"> <?php echo $observer3['name_en']; ?></td>
<td class="border  " align="center"> <?php echo $observer3['name_ar']; ?></td>
<td class="border  " align="center"> <?php echo $observer3['nid']; ?></td>
<td class="border  " align="center"> <?php echo $observer3['phone']; ?></td>
<td class="border  " align="center"> <?php echo $observer3['attendance']; ?></td>
<td class="border  " align="center"> <?php echo $observer3['date']; ?></td>
 

 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>



      </div>

      <?php


//-----------------------STAFF



                        $staffs='';
                        if(isset($_POST['ssort'])){
                            $sattan=$_POST['sattan'];
                             $staff="SELECT * FROM p31_staff WHERE attendance=$sattan ";
                             $staffs=mysqli_query( $bis,$staff);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in"> STAFF Sort by attandance</label><br>
    <form style="width: 60%; margin:auto; background-color:#D1D9DF;" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center" method="post" action="dashboard.php"> 
    <label for="in">CHOOSE STAFF ATTENDANCE OR ABSENCE</label><br>
               <select style="text-align: center; color: black;" name='sattan' class='form-select' aria-label='Default select example'>
                <option value="1" >attendee</option>
                <option value="0" > Absent</option>
                </select> 
                <button name="ssort" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> STAFF Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_en</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_ar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nid</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">attendance</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">floor</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">building_no</th>

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
$x=1;
if($staffs){
 foreach($staffs as $staff)
{
?>
<tr>
<td class="border  "align="center"> <?php echo $staff['code']; ?></td>
<td class="border  " align="center"> <?php echo $staff['name_en']; ?></td>
<td class="border  " align="center"> <?php echo $staff['name_ar']; ?></td>
<td class="border  " align="center"> <?php echo $staff['nid']; ?></td>
<td class="border  " align="center"> <?php echo $staff['phone']; ?></td>
<td class="border  " align="center"> <?php echo $staff['attendance']; ?></td>
<td class="border  " align="center"> <?php echo $staff['floor']; ?></td>
<td class="border  " align="center"> <?php echo $staff['building_no']; ?></td>

 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>

      <?php
                        $staff2='';
                        if(isset($_POST['ssort1'])){
                            $sdate=$_POST['sdate'];
                             $staff1="SELECT * FROM `p31_staff` WHERE date = '$sdate' ";
                             $staff2=mysqli_query( $bis,$staff1);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in">Sort STAFF repots by date</label><br>
    <form style="width: 60%; margin:auto; background-color:#D1D9DF;" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center" method="post" action="dashboard.php"> 
    <label for="in">CHOOSE DATE</label><br>
               <select style="text-align: center; color: black;" name='sdate' class='form-select' aria-label='Default select example'>
               <?php

foreach  ($sdatee1 as $sdatee2){  
?>       

<option value="<?php echo $sdatee2['date'];?>"><?php echo $sdatee2['date'];?> </option>
<?php
}
?>
                </select> 
                <button name="ssort1" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> Date STAFF Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_en</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_ar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nid</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">attendance</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">floor</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">building_no</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">date</th>
                      

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

if($staff2){
 foreach($staff2 as $staff3)
{
?>
<tr>
<td class="border  "align="center"> <?php echo $staff3['code']; ?></td>
<td class="border  " align="center"> <?php echo $staff3['name_en']; ?></td>
<td class="border  " align="center"> <?php echo $staff3['name_ar']; ?></td>
<td class="border  " align="center"> <?php echo $staff3['nid']; ?></td>
<td class="border  " align="center"> <?php echo $staff3['phone']; ?></td>
<td class="border  " align="center"> <?php echo $staff3['attendance']; ?></td>
<td class="border  " align="center"> <?php echo $staff3['floor']; ?></td>
<td class="border  " align="center"> <?php echo $staff3['building_no']; ?></td>
<td class="border  " align="center"> <?php echo $staff3['date']; ?></td>
 

 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      </div>

      <?php


//-----------------------DOCTORS



                        $doctors='';
                        if(isset($_POST['dsort'])){
                            $dattan=$_POST['dattan'];
                             $doctor="SELECT * FROM p31_doctor_exam WHERE attendance=$dattan ";
                             $doctors=mysqli_query( $bis,$doctor);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in"> DOCTORS Sort by attandance</label><br>
    <form style="width: 60%; margin:auto; background-color:#D1D9DF;" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center" method="post" action="dashboard.php"> 
    <label for="in">CHOOSE DOCTORS ATTENDANCE OR ABSENCE</label><br>
               <select style="text-align: center; color: black;" name='dattan' class='form-select' aria-label='Default select example'>
                <option value="1" >attendee</option>
                <option value="0" > Absent</option>
                </select> 
                <button name="dsort" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> DOCTORS Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_en</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">building_no</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">attendance</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">date</th>

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
$x=1;
if($doctors){
 foreach($doctors as $doctor)
{
?>
<tr>
<td class="border  "align="center"> <?php echo $doctor['id']; ?></td>
<td class="border  " align="center"> <?php echo $doctor['name_en']; ?></td>
<td class="border  " align="center"> <?php echo $doctor['building_no']; ?></td>
<td class="border  " align="center"> <?php echo $doctor['attendance']; ?></td>
<td class="border  " align="center"> <?php echo $doctor['date']; ?></td>



 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>

      <?php
                        $doctor2='';
                        if(isset($_POST['dsort1'])){
                            $ddate=$_POST['ddate'];
                             $doctor1="SELECT * FROM `p31_doctor_exam` WHERE date = '$ddate' ";
                             $doctor2=mysqli_query( $bis,$doctor1);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in">Sort DOCTORS repots by date</label><br>
    <form style="width: 60%; margin:auto; background-color:#D1D9DF;" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center" method="post" action="dashboard.php"> 
    <label for="in">CHOOSE DATE</label><br>
               <select style="text-align: center; color: black;" name='ddate' class='form-select' aria-label='Default select example'>
               <?php

foreach  ($ddatee1 as $ddatee2){  
?>       

<option value="<?php echo $ddatee2['date'];?>"><?php echo $ddatee2['date'];?> </option>
<?php
}
?>
                </select> 
                <button name="dsort1" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> Date DOCTORS Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_en</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">building_no</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">attendance</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">date</th>
                      

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

if($doctor2){
 foreach($doctor2 as $doctor3)
{
?>
<tr>
<td class="border  "align="center"> <?php echo $doctor3['id']; ?></td>
<td class="border  " align="center"> <?php echo $doctor3['name_en']; ?></td>
<td class="border  " align="center"> <?php echo $doctor3['building_no']; ?></td>
<td class="border  " align="center"> <?php echo $doctor3['attendance']; ?></td>
<td class="border  " align="center"> <?php echo $doctor3['date']; ?></td>
 

 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>

      <?php


//-----------------------STUDENTS



                        $students='';
                        if(isset($_POST['stsort'])){
                            $stattan=$_POST['stattan'];
                             $student="SELECT * FROM p31_students_legan WHERE attendance=$stattan ";
                             $students=mysqli_query( $bis,$student);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in"> STUDENTS Sort by attandance</label><br>
    <form style="width: 60%; margin:auto; background-color:#D1D9DF;" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center" method="post" action="dashboard.php"> 
    <label for="in">CHOOSE STUDENTS ATTENDANCE OR ABSENCE</label><br>
               <select style="text-align: center; color: black;" name='stattan' class='form-select' aria-label='Default select example'>
                <option value="1" >attendee</option>
                <option value="0" > Absent</option>
                </select> 
                <button name="stsort" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> DOCTORS Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CODE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">COURSE CODE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">GROUP_ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LAGNA NO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ATTENDANCE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATE</th>

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
           
$x=1;
if($students){
 foreach($students as $student)
{
?>
<tr>
<td class="border  "align="center"> <?php echo $student['StudentCode']; ?></td>
<td class="border  " align="center"> <?php echo $student['CourseCode']; ?></td>
<td class="border  " align="center"> <?php echo $student['group_id']; ?></td>
<td class="border  " align="center"> <?php echo $student['lagna_no']; ?></td>
<td class="border  " align="center"> <?php echo $student['attendance']; ?></td>
<td class="border  " align="center"> <?php echo $student['date']; ?></td>



 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>

      <?php
                        $student2='';
                        if(isset($_POST['stsort1'])){
                            $stdate=$_POST['stdate'];
                             $student1="SELECT * FROM `p31_students_legan` WHERE date = '$stdate' ";
                             $student2=mysqli_query( $bis,$student1);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in">Sort STUDENTS repots by date</label><br>
    <form style="width: 60%; margin:auto; background-color:#D1D9DF;" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center" method="post" action="dashboard.php"> 
    <label for="in">CHOOSE DATE</label><br>
               <select style="text-align: center; color: black;" name='stdate' class='form-select' aria-label='Default select example'>
               <?php

foreach  ($stdatee1 as $stdatee2){  
?>       

<option value="<?php echo $stdatee2['date'];?>"><?php echo $stdatee2['date'];?> </option>
<?php
}
?>
                </select> 
                <button name="stsort1" type="submit" class="btn btn-dark">Sort</button>
     </form> 
</div></center>
           <Center>  <h5> Date STUDENTS Reports</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CODE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">COURSE CODE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">GROUP_ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LAGNA NO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ATTENDANCE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATE</th>
                      

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

if($student2){
 foreach($student2 as $student3)
{
?>
<tr>
<td class="border  "align="center"> <?php echo $student3['StudentCode']; ?></td>
<td class="border  " align="center"> <?php echo $student3['CourseCode']; ?></td>
<td class="border  " align="center"> <?php echo $student3['group_id']; ?></td>
<td class="border  " align="center"> <?php echo $student3['lagna_no']; ?></td>
<td class="border  " align="center"> <?php echo $student3['attendance']; ?></td>
<td class="border  " align="center"> <?php echo $student3['date']; ?></td>
 

 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      



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
      
    <form  style="width: 60%; margin:auto; background-color:#D1D9DF;" method="post" action="dashboard.php" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center"> 
    <label for="in">CHOOSE LAGNA NUMBER</label><br>
               <select style="text-align: center; color: black;" name='lagna_no' class='form-select' aria-label='Default select example'>
               <?php

foreach  ($datee12 as $datee2){  
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
      
    <form  style="width: 60%; margin:auto; background-color:#D1D9DF;" method="post" action="dashboard.php" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center"> 
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
      
    <form  style="width: 60%; margin:auto; background-color:#D1D9DF;" method="post" action="dashboard.php" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center"> 
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
      </div>

      
      <?php
                        $obss='';
                        if(isset($_POST['appear'])){
                             
                             $obs="SELECT `name`, COUNT(attendance) as attendance_count FROM p31_observer_legan WHERE`attendance`=1 GROUP BY `name`";;
                             $obss=mysqli_query( $bis,$obs);
                        }
                        ?>
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
   <center> <div > 
        <label for="in">Count of attendance of observer</label><br>
    <form style="width: 60%; margin:auto; background-color:#D1D9DF;" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center" method="post" action="dashboard.php"> 
  
                <button name="appear" type="submit" class="btn btn-dark">Appear</button>
     </form> 
</div></center>
           <Center>  <h5> Count of attendance of observe</h5> </Center>
            </div>   
     <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Count of attendance</th>
                     
                      

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

if($obss){
 foreach($obss as $obsse)
{
?>
<tr>
<td class="border  "align="center"> <?php echo $obsse['name']; ?></td>
<td class="border  " align="center"> <?php echo $obsse['attendance_count']; ?></td>
 
 

 
 
</tr>
                    <?php }}; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      </div>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>