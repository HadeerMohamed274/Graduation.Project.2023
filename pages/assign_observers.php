<?php
     include '/xampp/htdocs/project31/Connections/bis.php';
     include '/xampp/htdocs/project31/admin/auth.php';
     include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/aside.php';
   

 ?>
 


 

 
<?php

if(isset($_POST['unassign'])){
  $unassign=$_POST['unassign'];

  $unassign1=" UPDATE `p31_observer_legan` SET `lagna_no`= NULL WHERE `id`=$unassign";
  $unassign2=mysqli_query($bis , $unassign1) or die(mysqli_error($bis));

}

$code=$_GET['lagna'];
$Course=$_GET['code'];
$date=$_GET['date'];
$query_currentSemester = "SELECT curentsemester.Year, curentsemester.Sem FROM curentsemester ";
$currentSemester = mysqli_query($bis,$query_currentSemester) or die(mysqli_error($bis));
$row_currentSemester = mysqli_fetch_assoc($currentSemester);
$totalRows_currentSemester = mysqli_num_rows($currentSemester);

$sem = $row_currentSemester['Sem'];
$year = $row_currentSemester['Year'];

$getData= "SELECT * FROM `p31_observers` WHERE `date`!='$date'"; 
         $observers=mysqli_query($bis, $getData) or die(mysqli_error($bis));
        $getData1=mysqli_fetch_array($observers);


    
 
if(isset($_POST['save']))  { 

$observer=$_POST['observer'] ;  
// $courseCode=$_POST['code'];
$edit= "UPDATE `p31_observers` SET `lagna_no`='$code' ,`date`='$date'  WHERE `name_en`='$observer'";
$dit=mysqli_query($bis, $edit) or die(mysqli_error($bis));
$update= "INSERT INTO `p31_observer_legan`(`name`, `course_code`,`lagna_no`,`date`) VALUES ('$observer' , '$Course' ,'$code','$date')";
$update1=mysqli_query($bis, $update) or die(mysqli_error($bis));}
 
if(isset($_POST['observer2'])){
$observer2=$_POST['observer2'] ;  
  
$edit1= "UPDATE `p31_observers` SET `lagna_no`='$code' ,`date`='$date'  WHERE `name_en`='$observer2'";
$dit1=mysqli_query($bis, $edit1) or die(mysqli_error($bis));
$update2= "INSERT INTO `p31_observer_legan`(`name`, `course_code`,`lagna_no`,`date`) VALUES ('$observer' , '$Course' ,'$code','$date')";
$update3=mysqli_query($bis, $update2) or die(mysqli_error($bis));}

if(isset($_POST['observer3'])){
$observer3=$_POST['observer3'] ;  
  
$edit2= "UPDATE `p31_observers` SET `lagna_no`='$code' ,`date`='$date'  WHERE `name_en`='$observer3'";
$dit2=mysqli_query($bis, $edit2) or die(mysqli_error($bis));
$update4= "INSERT INTO `p31_observer_legan`(`name`, `course_code`,`lagna_no`,`date`) VALUES ('$observer' , '$Course' ,'$code','$date')";
$update5=mysqli_query($bis,$update4 ) or die(mysqli_error($bis));}

if(isset($_POST['observer4'])){
$observer4=$_POST['observer4'] ;  
$edit3= "UPDATE `p31_observers` SET `lagna_no`='$code' ,`date`='$date'  WHERE `name_en`='$observer4'";
$dit3=mysqli_query($bis, $edit3) or die(mysqli_error($bis));
$update6= "INSERT INTO `p31_observer_legan`(`name`, `course_code`,`lagna_no`,`date`) VALUES ('$observer' , '$Course' ,'$code','$date')";
$update7=mysqli_query($bis, $update6) or die(mysqli_error($bis));}

if(isset($_POST['observer5'])){
$observer5=$_POST['observer5'] ;  
  
$edit4= "UPDATE `p31_observers` SET `lagna_no`='$code' ,`date`='$date'  WHERE `name_en`='$observer5'";
$dit4=mysqli_query($bis, $edit4) or die(mysqli_error($bis));
$update8= "INSERT INTO `p31_observer_legan`(`name`, `course_code`,`lagna_no`,`date`) VALUES ('$observer' , '$Course' ,'$code','$date')";
$update9=mysqli_query($bis, $update8) or die(mysqli_error($bis));
}

if(isset($_POST['observer6'])){
$observer6=$_POST['observer6'] ;  
$edit5= "UPDATE `p31_observers` SET `lagna_no`='$code' ,`date`='$date'  WHERE `name_en`='$observer6'";
$dit5=mysqli_query($bis, $edit5) or die(mysqli_error($bis));

$update10= "INSERT INTO `p31_observer_legan`(`name`, `course_code`,`lagna_no`,`date`) VALUES ('$observer' , '$Course' ,'$code','$date')";
$update11=mysqli_query($bis, $update10) or die(mysqli_error($bis));}

if(isset($_POST['observer7'])){

$observer7=$_POST['observer7'] ;  
  
$edit7= "UPDATE `p31_observers` SET `lagna_no`='$code' ,`date`='$date'  WHERE `name_en`='$observer7'";
$dit7=mysqli_query($bis, $edit7) or die(mysqli_error($bis));
$update12= "INSERT INTO `p31_observer_legan`(`name`, `course_code`,`lagna_no`,`date`) VALUES ('$observer' , '$Course' ,'$code','$date')";
$update13=mysqli_query($bis, $update12) or die(mysqli_error($bis));

};

  
  
 
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Assign Observers</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Assign Observers</h6>
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

   


    <form id="myForm" style="width: 60%; margin:auto; background-color:#D1D9DF;" action="assign_observers.php?lagna=<?php echo $code?>&code=<?php echo $Course ?>&date=<?php echo $date ?>" method="post" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center">
    <?php
         $getData= "SELECT * FROM `p31_observers` WHERE `date`!='$date'"; 
         $observers=mysqli_query($bis, $getData) or die(mysqli_error($bis));
        $getData1=mysqli_fetch_array($observers);
      ?>
     <div > 
        <label for="in">Select Number of observer</label><br>
    <select style="text-align: center; color: black;" name='number' class='form-select' aria-label='Default select example'>
    <option value="1" > 1</option>
       <option value="2" > 2</option>
       <option value="3" > 3</option>
       <option value="4" > 4</option>
       <option value="5" > 5</option>
       <option value="6" > 6</option>
       <option value="7" > 7</option>
       
    </select>
</div>
<!-- <label for="code">Course Code</label>
 <input type="text" name="code" value="<?php echo $_GET['code'];?>" > -->
      <div  class=' p-2'>
      
      <?php
  if(isset($_POST['add'])){
 
  $num=$_POST['number'];
// the first
  if($num=='1'){
    ?>
      <select style="text-align: center;" name='observer' class='form-select' aria-label='Default select example'>
     
    <?php
      foreach  ($observers as $observer){  
    ?>       
  
  <option value="<?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
  <?php
      }
  ?>
</select><br>
<?php
   }

// the second
        elseif($num=='2'){?>
          <select style="text-align: center;" name='observer' class='form-select' aria-label='Default select example'>
        
        <?php
          foreach  ($observers as $observer){  
        ?>       

      <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
      <?php
          }
      ?>
      </select><br>
      <select style="text-align: center;" name='observer2' class='form-select' aria-label='Default select example'>
        
        <?php
          foreach  ($observers as $observer){  
        ?>       

      <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
      <?php
          }
      ?>
      </select><br>
      <?php
      }

      // the third
              elseif($num=='3'){
                ?>
                <select style="text-align: center;" name='observer' class='form-select' aria-label='Default select example'>
              
              <?php
                foreach  ($observers as $observer){  
              ?>       

            <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
            <?php
                }
            ?>
            </select><br>

            <select style="text-align: center;" name='observer2' class='form-select' aria-label='Default select example'>
              
              <?php
                foreach  ($observers as $observer){  
              ?>       

            <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
            <?php
                }
            ?>
            </select><br>

            <select style="text-align: center;" name='observer3' class='form-select' aria-label='Default select example'>
              
              <?php
                foreach  ($observers as $observer){  
              ?>       

            <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
            <?php
                }
            ?>
            </select><br>
            <?php
            }

            // the fourth
                      else if($num=='4'){
                        ?>
                        <select style="text-align: center;" name='observer' class='form-select' aria-label='Default select example'>
                      
                      <?php
                        foreach  ($observers as $observer){  
                      ?>       

                    <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                    <?php
                        }
                    ?>
                    </select><br>

                    <select style="text-align: center;" name='observer2' class='form-select' aria-label='Default select example'>
                      
                      <?php
                        foreach  ($observers as $observer){  
                      ?>       

                    <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                    <?php
                        }
                    ?>
                    </select><br>

                    <select style="text-align: center;" name='observer3' class='form-select' aria-label='Default select example'>
                      
                      <?php
                        foreach  ($observers as $observer){  
                      ?>       

                    <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                    <?php
                        }
                    ?>
                    </select><br>
                    <select style="text-align: center;" name='observer4' class='form-select' aria-label='Default select example'>
                      
                      <?php
                        foreach  ($observers as $observer){  
                      ?>       

                    <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                    <?php
                        }
                    ?>
                    </select><br>
                    <?php
                    }

                   // the fifth
                              else if($num=='5'){
                                ?>
                                <select style="text-align: center;" name='observer' class='form-select' aria-label='Default select example'>
                              
                              <?php
                                foreach  ($observers as $observer){  
                              ?>       

                            <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                            <?php
                                }
                            ?>
                            </select><br>

                            <select style="text-align: center;" name='observer2' class='form-select' aria-label='Default select example'>
                              
                              <?php
                                foreach  ($observers as $observer){  
                              ?>       

                            <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                            <?php
                                }
                            ?>
                            </select><br>

                            <select style="text-align: center;" name='observer3' class='form-select' aria-label='Default select example'>
                              
                              <?php
                                foreach  ($observers as $observer){  
                              ?>       

                            <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                            <?php
                                }
                            ?>
                            </select><br>
                            <select style="text-align: center;" name='observer4' class='form-select' aria-label='Default select example'>
                              
                              <?php
                                foreach  ($observers as $observer){  
                              ?>       

                            <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                            <?php
                                }
                            ?>
                            </select><br>

                            <select style="text-align: center;" name='observer5' class='form-select' aria-label='Default select example'>
                              
                              <?php
                                foreach  ($observers as $observer){  
                              ?>       

                            <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                            <?php
                                }
                            ?>
                            </select><br>
                            <?php
                            }

                                  // the sixth
                                   else if($num=='6'){
                                    ?>
                                    <select style="text-align: center;" name='observer' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='observer2' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='observer3' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>
                                <select style="text-align: center;" name='observer4' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='observer5' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='observer6' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>
                                <?php
                                }

                                
                                  // the seventh
                                 else if($num=='7'){
                                    ?>
                                    <select style="text-align: center;" name='observer' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>"> <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='observer2' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>"> <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='observer3' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>"> <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>
                                <select style="text-align: center;" name='observer4' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>"> <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='observer5' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='observer6' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>" > <?php echo $observer['name_en'];?> </option>
                                <?php
                                    };
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='observer7' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($observers as $observer){  
                                  ?>       

                                <option value=" <?php echo $observer['name_en'];?>" > <?php echo $staff['name_en'];?> </option>
                                <?php
                                    };
                                ?>
                                </select>
                                <br>

                                <?php
                                };

                                


  }  ;

?>
<button  class="btn btn-dark m-2" name="add" type="submit">Select</button>
<button name='save' class="btn btn-dark m-2" type="submit">Save</button>
  </div>


</form>

   

<br>
<br>
<?php
$coursee="SELECT  `CourseName` FROM `courses` WHERE CourseCode ='$Course'";
$coursees=mysqli_query( $bis,$coursee);
while ($row = mysqli_fetch_assoc($coursees)) {
   
?>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
           <Center>  <h5> Observers In lagna_no<?php echo "($code) in ";   echo $row['CourseName'];}; ?> </h5> </Center>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name_en</th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Course Code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">date</th>
                      
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">UNASSIGN</th>

                       
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
$x=1;
 $observer="SELECT * FROM p31_observer_legan WHERE lagna_no ='$code'AND `course_code`='$Course'";
 $observers=mysqli_query( $bis,$observer);
 foreach($observers as $observer)
{
?>
<tr>
<td class="border  "align="center"> <?php echo $observer['id']; ?></td>
<td class="border  " align="center"> <?php echo $observer['name']; ?></td>
<td class="border  " align="center"> <?php echo $observer['course_code']; ?></td>
<td class="border  " align="center"> <?php echo $observer['date']; ?></td>
 <input  hidden type="text" id="num" value=" <?php echo $code; ?>">

 <td> 
  <form action="assign_observers.php?lagna=<?php echo $code?>&code=<?php echo $Course ?>&date=<?php echo $date ?>" method="post">
<button value="<?php echo $observer['id'];?>" name="unassign" type="submit" class="btn btn-dark">UNASSIGN</button>
</form>
</td>
 
</tr>
                    <?php }; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form class="btn btn-behance"  style="position:absolute ; right: 50px;" onclick="window.location.href='/project31/admin_dashboard/adminDash/pages/assign_observers.php?lagna=<?php echo  $code+1 ?? 0 ?>&code=<?php echo $Course ?>&date=<?php echo $date; ?>'">Next Lagna</form> 
      <form class="btn btn-dark" style="position:absolute ; left: 50px;" onclick="window.location.href='/project31/admin_dashboard/adminDash/pages/assign_observers.php?lagna=<?php echo  $code-1 ?? 0 ?>&code=<?php echo $Course ?>&date=<?php echo $date; ?>'">previous Lagna</form> 
    

<!--   Core JS Files   -->
 
    
</script>
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




