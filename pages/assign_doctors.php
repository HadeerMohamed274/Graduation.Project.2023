<?php
     include '/xampp/htdocs/project31/Connections/bis.php';
    
     include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/aside.php';
     include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/color.php';
   

 ?>
 


 
<?php


$query_currentSemester = "SELECT curentsemester.Year, curentsemester.Sem FROM curentsemester ";
$currentSemester = mysqli_query($bis,$query_currentSemester) or die(mysqli_error($bis));
$row_currentSemester = mysqli_fetch_assoc($currentSemester);
$totalRows_currentSemester = mysqli_num_rows($currentSemester);

$sem = $row_currentSemester['Sem'];
$year = $row_currentSemester['Year'];


$legana= "SELECT DISTINCT `building_no` FROM `legan_list`"; 
$legana1=mysqli_query($bis, $legana) or die(mysqli_error($bis));




$doctor_data= "SELECT * FROM `doctors_account` WHERE `doctor_exam`=0"; 
$doctors=mysqli_query($bis, $doctor_data) or die(mysqli_error($bis));
$getData1=mysqli_fetch_array($doctors);

if(isset($_POST['save']))  { 

  $doctor=$_POST['doctor'] ;  
  $building=$_POST['build_num'] ;  
 
 $set="UPDATE `doctors_account` SET `doctor_exam`= 1 WHERE `DoctorName`='$doctor'";
$set1=mysqli_query($bis,$set);

  $update= "INSERT INTO `p31_doctor_exam`(`name_en`, `building_no`) VALUES ('$doctor' ,'$building')";
  $update1=mysqli_query($bis, $update) or die(mysqli_error($bis));
 
            if(isset($_POST['doctor2'])){

            $doctor2=$_POST['doctor2'] ;  
          $building=$_POST['build_num'] ;    
          
          $set2="UPDATE `doctors_account` SET `doctor_exam`=1 WHERE `DoctorName`='$doctor2'";
          $set3=mysqli_query($bis,$set2);

            $update2=  "INSERT INTO `p31_doctor_exam`(`name_en`, `building_no`) VALUES ('$doctor2' ,'$building')";
            $update3=mysqli_query($bis, $update2) or die(mysqli_error($bis));};

  if(isset($_POST['doctor3'])){
  $doctor3=$_POST['doctor3'] ;  
 $building=$_POST['build_num'] ;    
 
$set4="UPDATE `doctors_account` SET `doctor_exam`=1 WHERE `DoctorName`='$doctor3'";
$set5=mysqli_query($bis,$set4);

  $update3= "INSERT INTO `p31_doctor_exam`(`name_en`, `building_no`) VALUES ('$doctor3' ,'$building')"; 
  $update4=mysqli_query($bis, $update3) or die(mysqli_error($bis));};

                if(isset($_POST['doctor4'])){
                $doctor4=$_POST['doctor4'] ;  
              $building=$_POST['build_num'] ;    
              
              $set5="UPDATE `doctors_account` SET `doctor_exam`=1 WHERE `DoctorName`='$doctor4'";
              $set6=mysqli_query($bis,$set5);

                $update4=  "INSERT INTO `p31_doctor_exam`(`name_en`, `building_no`) VALUES ('$doctor4' ,'$building')"; 
                $update5=mysqli_query($bis, $update4) or die(mysqli_error($bis));}
                
  if(isset($_POST['doctor5'])){
  $doctor5=$_POST['doctor5'] ;  
 $building=$_POST['build_num'] ;    
 
$set6="UPDATE `doctors_account` SET `doctor_exam`=1 WHERE `DoctorName`='$doctor5'"
;$set7=mysqli_query($bis,$set6);

  $update5= "INSERT INTO `p31_doctor_exam`(`name_en`, `building_no`) VALUES ('$doctor5' ,'$building')"; 
  $update6=mysqli_query($bis, $update5) or die(mysqli_error($bis));}


              if(isset($_POST['doctor6'])){
              $doctor6=$_POST['doctor6'] ;  
            $building=$_POST['build_num'] ;    
            
            $set8="UPDATE `doctors_account` SET `doctor_exam`=1 WHERE `DoctorName`='$doctor6'"
            ;$set9=mysqli_query($bis,$set8);

              $update6=  "INSERT INTO `p31_doctor_exam`(`name_en`, `building_no`) VALUES ('$doctor6' ,'$building')"; 
              $update7=mysqli_query($bis, $update6) or die(mysqli_error($bis));}

  if(isset($_POST['doctor7'])){

  $doctor7=$_POST['doctor7'] ;  
 $building=$_POST['build_num'] ;    
 
$set10="UPDATE `doctors_account` SET `doctor_exam`=1 WHERE `DoctorName`='$doctor7'"
;$set11=mysqli_query($bis,$set10);

  $update7=  "INSERT INTO `p31_doctor_exam`(`name_en`, `building_no`) VALUES ('$doctor7' ,'$building')"; 
  $update8=mysqli_query($bis, $update7) or die(mysqli_error($bis));}

  };
 
  $select = "SELECT * FROM p31_doctor_exam";
  $s = mysqli_query($bis , $select);
  
  if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $delete = "DELETE FROM p31_doctor_exam WHERE id = $id";
     $d = mysqli_query($bis , $delete);
     
  }
  $nameE = "";
$nameA = "";
$nid = "";
$phone = "";
$deg = "";
$dep = "";
$image = "";
$update = false;
if(isset($_GET['edit'])){
$update = true;
$id = $_GET['edit'];
$select = "SELECT * FROM `p31_doctor_exam` WHERE id = $id";
$s = mysqli_query($bis , $select);
$row = mysqli_fetch_assoc($s);
$building_no=$row['building_no'] ;  
$id=$row['id'] ;  
}


if(isset($_POST['Update'])){
$building_no=$_POST['build_num'] ;  


$update = "UPDATE `p31_doctor_exam` SET building_no = '$building_no' ";
$u = mysqli_query($bis , $update);
}
?>

<!DOCTYPE html>
 
<html>
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
        border: 5px solid blue;
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
    <body  class="g-sidenav-show  bg-gray-100">


 

 
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Assign Doctors Page</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Assign Doctors</h6>
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
      <a href="#" class="button">Need Help..? <i class="fa fa-play-circle" aria-hidden="true"></i></a>
      <div class="video-container" style="max-width: 25%; margin:0 auto;">
        <span class="close">&#10006;</span>
        <video width="560" height="310" src="Session5Part1.mp4" controls></video>
      </div>
    </div>


    <form id="myForm" style="width: 60%; margin:auto; background-color:#D1D9DF;" action="assign_doctors.php" method="post" class=" mt-5 rounded align-items-center border border-danger-subtle border-3  p-1 text-center">
    

<div > 

  
        <label for="building">Building No</label><br>
   

    <div > 
        <label for="in">Select Number of doctors</label><br>
    <select style="text-align: center; color: black;" name='number' class='form-select' aria-label='Default select example'>
    <option value="1" >1</option>
       <option value="2" >2</option>
       <option value="3" >3</option>
       <option value="4" >4</option>
       <option value="5" >5</option>
       <option value="6" >6</option>
       <option value="7" >7</option>
       
    </select>
</div>
 
      <div  class=' p-2'>
      
      <?php
  if(isset($_POST['add'])){
 
  $num=$_POST['number'];
// the first
  if($num=='1'){
    ?>
      <select style="text-align: center;" name='doctor' class='form-select' aria-label='Default select example'>
     
    <?php
   
      foreach  ($doctors as $doctor){  
    ?>       
  
  <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
  <?php
      }
  ?>
</select><br>
<?php
   }

// the second
        elseif($num=='2'){?>
          <select style="text-align: center;" name='doctor' class='form-select' aria-label='Default select example'>
        
        <?php
          foreach  ($doctors as $doctor){  
        ?>       

      <option value="<?php echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
      <?php
          }
      ?>
      </select><br>
      <select style="text-align: center;" name='doctor2' class='form-select' aria-label='Default select example'>
        
        <?php
          foreach  ($doctors as $doctor){  
        ?>       

      <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
      <?php
          }
      ?>
      </select><br>
      <?php
      }

      // the third
              elseif($num=='3'){
                ?>
                <select style="text-align: center;" name='doctor' class='form-select' aria-label='Default select example'>
              
              <?php
                foreach  ($doctors as $doctor){  
              ?>       

            <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
            <?php
                }
            ?>
            </select><br>

            <select style="text-align: center;" name='doctor2' class='form-select' aria-label='Default select example'>
              
              <?php
                foreach  ($doctors as $doctor){  
              ?>       

            <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
            <?php
                }
            ?>
            </select><br>

            <select style="text-align: center;" name='doctor3' class='form-select' aria-label='Default select example'>
              
              <?php
                foreach  ($doctors as $doctor){  
              ?>       

            <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
            <?php
                }
            ?>
            </select><br>
            <?php
            }

            // the fourth
                      else if($num=='4'){
                        ?>
                        <select style="text-align: center;" name='doctor' class='form-select' aria-label='Default select example'>
                      
                      <?php
                        foreach  ($doctors as $doctor){  
                      ?>       

                    <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                    <?php
                        }
                    ?>
                    </select><br>

                    <select style="text-align: center;" name='doctor2' class='form-select' aria-label='Default select example'>
                      
                      <?php
                        foreach  ($doctors as $doctor){  
                      ?>       

                    <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                    <?php
                        }
                    ?>
                    </select><br>

                    <select style="text-align: center;" name='doctor3' class='form-select' aria-label='Default select example'>
                      
                      <?php
                        foreach  ($doctors as $doctor){  
                      ?>       

                    <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                    <?php
                        }
                    ?>
                    </select><br>
                    <select style="text-align: center;" name='doctor4' class='form-select' aria-label='Default select example'>
                      
                      <?php
                        foreach  ($doctors as $doctor){  
                      ?>       

                    <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                    <?php
                        }
                    ?>
                    </select><br>
                    <?php
                    }

                   // the fifth
                              else if($num=='5'){
                                ?>
                                <select style="text-align: center;" name='doctor' class='form-select' aria-label='Default select example'>
                              
                              <?php
                                foreach  ($doctors as $doctor){  
                              ?>       

                            <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                            <?php
                                }
                            ?>
                            </select><br>

                            <select style="text-align: center;" name='doctor2' class='form-select' aria-label='Default select example'>
                              
                              <?php
                                foreach  ($doctors as $doctor){  
                              ?>       

                            <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                            <?php
                                }
                            ?>
                            </select><br>

                            <select style="text-align: center;" name='doctor3' class='form-select' aria-label='Default select example'>
                              
                              <?php
                                foreach  ($doctors as $doctor){  
                              ?>       

                            <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                            <?php
                                }
                            ?>
                            </select><br>
                            <select style="text-align: center;" name='doctor4' class='form-select' aria-label='Default select example'>
                              
                              <?php
                                foreach  ($doctors as $doctor){  
                              ?>       

                            <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                            <?php
                                }
                            ?>
                            </select><br>

                            <select style="text-align: center;" name='doctor5' class='form-select' aria-label='Default select example'>
                              
                              <?php
                                foreach  ($doctors as $doctor){  
                              ?>       

                            <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                            <?php
                                }
                            ?>
                            </select><br>
                            <?php
                            }

                                  // the sixth
                                   else if($num=='6'){
                                    ?>
                                    <select style="text-align: center;" name='doctor' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='doctor2' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='doctor3' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>
                                <select style="text-align: center;" name='doctor4' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='doctor5' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='doctor6' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>
                                <?php
                                }

                                
                                  // the seventh
                                 else if($num=='7'){
                                    ?>
                                    <select style="text-align: center;" name='doctor' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>"> <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='doctor2' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>"> <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='doctor3' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>"> <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>
                                <select style="text-align: center;" name='doctor4' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>"> <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='doctor5' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    }
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='doctor6' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    };
                                ?>
                                </select><br>

                                <select style="text-align: center;" name='doctor7' class='form-select' aria-label='Default select example'>
                                  
                                  <?php
                                    foreach  ($doctors as $doctor){  
                                  ?>       

                                <option value="<?php  echo $doctor['DoctorName'];?>" > <?php echo $doctor['DoctorName'];?> </option>
                                <?php
                                    };
                                ?>
                                </select>
                                <br>

                                <?php
                                };

                                


  }  ;
  


?>
<button class="btn btn-dark" name="add" type="submit">Select</button>


<select style="text-align: center; color: black;" name='build_num' class='form-select' aria-label='Default select example'>

<?php

foreach  ($legana1 as $leganas){  
?>       

<option ><?php echo $leganas['building_no'];?> </option>
<?php
}
?>
</select>

</div>


<?php 
if($update){ ?>
    <button type="submit" name="Update" class="btn btn-dark">update</button>
    <?php
    }
    else{  
    ?> <button type="submit" name="save" class="btn btn-dark">save</button>
  <?php } ?>

  </div>
  



</form>

   

<br>
<br>
<br>

<div><button class="btn btn-info" style="color: white; text-align:center;"> <a href="excel/assigndoctorsdownload.php">Download As Excel Sheet</a></button></div>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
           <Center>  <h5>Assigned Doctors </h5> </Center>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Count</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Doctor Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Buildimg</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Update</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">UNASSIGN</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
$x=1;
 $doctor="SELECT * FROM p31_doctor_exam";
 $doctors=mysqli_query( $bis,$doctor);
 foreach($doctors as $doctor)
{
?>
 
<td class="border  "align="center"> <?php echo $doctor['id']; ?></td>
<td class="border  "align="center"> <?php echo $doctor['name_en']; ?></td>
<td class="border  " align="center"> <?php echo $doctor['building_no']; ?></td>
                      <td class="align-middle text-center">
                      <a href="assign_doctors.php?edit=<?php echo $doctor['id']?>"> <button name="edit" type="submit" class="btn btn-dark">EDIT</button></a>
                      </td>
                      <td class="align-middle text-center">
                      <a href="assign_doctors.php?delete=<?php  echo $doctor['id']?>"><button name="delete" type="submit" class="btn btn-dark">UNASSIGN</button></a> 
                      </td>
                      <td class="align-middle text-center">

                      
</tr>
                    <?php }; ?>
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




