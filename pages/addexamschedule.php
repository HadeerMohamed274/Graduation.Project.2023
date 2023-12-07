<?php
    include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/aside.php';
    include '/xampp/htdocs/project31/Connections/bis.php';
    include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/color.php';
   

   
    $query_currentsem = "SELECT * FROM curentsemester";
    $currentsem = mysqli_query($bis, $query_currentsem) or die(mysqli_error($bis));
    $row_currentsem = mysqli_fetch_assoc($currentsem);
    $totalRows_currentsem = mysqli_num_rows($currentsem);
    $sem=$row_currentsem['Sem'];
    $year=$row_currentsem['Year'];
       
 
 if (isset($_POST["save"])) {
 
 
  
   $day=$_POST['day'];
   $courseName=$_POST['course'];
   $date=$_POST['datee'];
   $interval=$_POST['interval'];
   $self=$_POST['selfe'];
   $sQL= 'SET NAMES utf8'; 
   $examtype = $_POST['examtype'];
 
   $qu="SELECT CourseCode from courses where CourseName='$courseName'";
 $quer=mysqli_query($bis, $qu)or die("Error: ".mysqli_error($bis));
 $q=mysqli_fetch_assoc($quer);
 $courseCode=$q['CourseCode'];
   $ins= "INSERT INTO exam_schedule (CourseCode,day,exam_date,period,total_no, is_self,sem, year, examtypes,notes)
   VALUES ('$courseCode','$day','$date','$interval','$totalRows_currentsem','$self','$sem','2023', '$examtype','Hossam' )";
  $query1=mysqli_query($bis, $ins);
      
 };
 
 
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Add Exam Schedule</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Add Exam Schedule</h6>
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

    <?php 
  // select code
$sSQL= 'SET CHARACTER SET utf8'; 
mysqli_query($bis, $sSQL) or die ('Can\'t charset in DataBase'); 
$query="SELECT  * FROM courses";
$query1=mysqli_query($bis, $query) or die(mysqli_error($bis));
$que=mysqli_fetch_array($query1);  ?>




    <form style="width: 60%; margin:auto; background-color:#D1D9DF;" action="addexamschedule.php" method="post" class=" mt-3 rounded align-items-center border border-danger-subtle border-3    text-center">
  
    <div>
        <label>Subject</label>
    </div>
    <div>
    <select name="course"  size="1">

<?php
while($que=mysqli_fetch_array($query1)){
?>
<div>
  <option value="<?php  echo $que['CourseName'];?>"> <?php  echo $que['CourseName'];?> </option>
  <?php }; ?>
</div>
    </select>
</div>


<div>
        <label>Day</label>
    </div>


<span  class=" p-1">
<select name="day" >
  <option>Saturday</option>
  <option>Sunday</option>
  <option>Monday</option>
  <option>Tuesday</option>
  <option>Wednesday</option>
  <option>Thursday</option>
  
</select>
</span>
<br>
<div>
        <label>Date</label> <br> 
        <td width="450" colspan="5" align="right" valign="middle">
<input name="datee" type="date"> </td>
<td width="150" align="center" valign="middle"><span class="style12">
  
  </span></td>
    </div>


<div  class=" p-1">
 <label> Period</label>
 <br>
 <span class="style13">
 <label>First</label>
  <input type="radio" name="interval" value="1" />
  <label> </label>
  
</span></td>
<td width="80" align="center" valign="middle"><span class="style13">
<label>Second</label>
  <input type="radio" name="interval" value="2" />
  <label> </label>
  
</span></td>
<td width="80" align="center" valign="middle"><span class="style13">
<label>third</label>
  <input type="radio" name="interval" value="3" />
  <label> </label>
 
</span></td>
<td width="80" align="center" valign="middle"><span class="style13">
<label>Fourth</label>
  <input type="radio" name="interval" value="4" />
  <label> </label>
  
</span></td>
<td width="80" align="center" valign="middle"><span class="style13">
  <label>
  Fifth
  <input type="radio" name="interval" value="5" />
   </label>
  <label> </label>
</span></td>
<td width="150" align="center" valign="middle">  <span class="style12">
</span>
</div>
<br>
<div>
<span class="style12">
<label>Self-Study</label>
</span></td>
<br>
<div>
  <td width="450" colspan="5" align="right" valign="middle">
    <span class="style13">
    <label>Yes</label>
    <input type="radio" name="selfe" value="1" />
    <label> No</label>
    <input type="radio" name="selfe" value="0" checked="checked" />
  </span>
  </div>
  </div>
  <br>
  <div>
<span class="style12">
<label>Exam Type</label>
</span></td>
<br>
  <td width="450" colspan="5" align="right" valign="middle"><span class="style13">
    <label>Final</label>
    <input type="radio" name="examtype" value="Final" />
    <label> Midterm</label>
    <input type="radio" name="examtype" value="mid"  />
  </span>
  </div>

  <td colspan="6" align="center" valign="middle">
<input type="hidden" name="cd" value="" checked="checked" />
<input type="submit" value="save" name="save" id="save"/>
</td>

<!-- <button name="save" class="btn btn-primary m-2" type="submit">Save</button> -->

</form>

<br>
<br>
<br>

<div><button class="btn btn-info" style="color: white; text-align:center;"> <a href="excel/addexamschdownload.php">Download As Excel Sheet</a></button></div>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Exam Schedule Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">M</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Day</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Period</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Number</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Schedule Code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject Code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Exam Type</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
$x=1;
$sSQL= 'SET CHARACTER SET utf8'; 
mysqli_query($bis, $sSQL) or die ('Can\'t charset in DataBase'); 



$course_query="select * from exam_schedule,courses where courses.CourseCode = exam_schedule.CourseCode and exam_schedule.sem='$sem' and exam_schedule.year='$year' ORDER BY SchID, exam_date ASC";
$course_query1=mysqli_query($bis, $course_query) or die(mysqli_error($bis));
$course_que=mysqli_fetch_array($course_query1);


do{
?>
<tr>
<td class="border  " align="center"> <?php echo $x; ?></td>
<td class="border  "align="center"> <?php echo $course_que['day']; ?></td>
<td class="border  " align="center"> <?php echo $course_que['exam_date']; ?></td>
<td class="border  " align="center"> <?php echo $course_que['period']; ?></td>
<td class="border  " align="center"> <?php echo $course_que['CourseName']; ?> </td>
<td class="border  " align="center"> <?php echo $course_que['total_no']; ?></td>
<td class="border  " align="center"><?php echo $course_que['SchID']; ?></td>
<td class="border  " align="center"><?php echo $course_que['CourseCode']; ?></td>
<td  class="border  "align="center"><?php echo $course_que['examtypes']; ?></td>
</tr>
                    <?php $x++;} while($course_que=mysqli_fetch_array($course_query1)); ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <center> 
 <a class="btn btn-outline-primary mt-2" href="/project31/display_exam_schedule.php"> عرض جدول ا متحان الفاينل</a>
 <a class="btn btn-outline-primary mt-2" href="/project31/display_exam_schedule_mid.php"> عرض جدول ا متحان الميد</a>
</center>

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