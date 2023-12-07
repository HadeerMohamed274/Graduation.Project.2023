<?php
ob_start();
    include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/aside.php';
    include '/xampp/htdocs/project31/Connections/bis.php';
    include '/xampp/htdocs/project31/admin_dashboard/adminDash/pages/color.php';

  
$notes=$_GET['notes'];

 
 
      if(isset($_POST['add'])){
      $note=$_POST['notee'];
      $notes=$_POST['notes'];
      $not="UPDATE `p31_observer_legan` SET `notes`='$note' WHERE id=$notes ";
      $query1=mysqli_query($bis, $not) or die(mysqli_error($bis));

    };

    if(isset($_POST['add'])){

     // Redirect to another page
     header("Location: observers_absence.php");
    };
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
            <link rel="icon" type="image/png" href="../assets/img/favicon.png">
            <title>Graduation Project 31</title>
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
        <body class="g-sidenav-show  bg-gray-100">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Observers Notes</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Add Notes</h6>
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
            
        <center>
        <form style="margin-top:150px; display:block; text-align:center; width: 500px;"  method="post" action="observersNotes.php">
            <div  class="input input-group-lg">
            <input name="notee" style="text-align: center;" type="text" class="form-control" placeholder="Any Notes..." aria-label="Recipient's username" aria-describedby="button-addon2"> <br>
            <input type="text" name="notes" hidden value="<?php echo $notes ?>">
          <button name="add" class="btn btn-primary" style="width: 80px;" type="submit" id="button-addon2">Add</button> 
            <button name="delete" class="btn btn-dark" style="width: 80px;" type="submit" id="button-addon2">Delete</button>
            </div>
        </form>
        </center>










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
  <?php
      ob_end_flush();
  ?>
</body>

</html>