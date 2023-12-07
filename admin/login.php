<?php 
 ob_start();
 include '/xampp/htdocs/project31/Connections/bis.php';
 

 //testmessage( $conn , "connection");


 

if (isset($_POST['send'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM `p31_users` WHERE email = '$email' and password = '$password' ";
    $s = mysqli_query( $bis , $select );
    $numrows = mysqli_num_rows($s);

    if ($numrows > 0){
        $m= mysqli_fetch_assoc($s);
        $_SESSION['id'] = $m['id'];    // adminid
        $_SESSION['email'] = $email;     // adminemail
        header('location:/project31/admin_dashboard/adminDash/pages/home.php');
    }else{
        echo " <div class=' text-center mt-5' style = 'color:red; font-size:20;' > invalid email or password please try again </div> ";
    }
} 


?>
<head>
    <style>
        body {
    font-family: sans-serif;
    
    background-repeat: no-repeat;
    overflow: hidden;
    background-size: cover;
}
.container {
    width: 380px;
    margin: 7% auto;
    border-radius: 25px;
    background-color: rgba(0, 0 , 0 , 0 , 5);
    box-shadow: 0 0 17px #333;
    margin-top: 60px;
}
.container:hover{
    box-shadow: 2px 2px 5px #6f9eee;
}
.header {
    text-align: center;
    padding-top: 75px;
}
.header h1 {
    color: #333;
    font-size: 45px;
    margin-bottom: 80px;

}
.main {
    text-align: center;
}
.main input , button {
    width: 300px;
    height: 40px;
    border: none;
    outline: none;
    padding-left: 40px;
    box-sizing: border-box;
    font-size: 15px;
    color: #333;
    margin-bottom: 40px;
    border-radius: 25px;
}
.main button {
    padding-left: 0px;
    background-color: #1565f0;
    letter-spacing: 1px;
    font-weight: bold;
    margin-bottom: 70px;
}
.main button:hover ,input:hover{
    box-shadow: 2px 2px 5px rgb(196, 195, 240);
    background-color: #83acf1;

}
.main span {
    position: relative;
}
.main i {
    position: absolute;
    left: 15px;
    color: #333;
    font-size: 16px;
    top: 2px;

}
    </style>
</head>
 <!--<img src="form1.jpeg"  -->



 <div class="container">
            <div class="header">
             <h1 class="">LogIn</h1>
            </div>
        <div class="main">
             <form method="POST">
                 <span>
                     <i class="fas fa-user"></i>
                     <input type="email" placeholder="Email" name="email">
                 </span><br>
                 <span>
                     <i class="fas fa-lock"></i>
                     <input type="password" placeholder="Password" name="password">
                 </span><br>
                 <button type="submit" name="send" >Login</button>
             </form>
        </div>    
        </div>

<?php

 ob_end_flush(); ?>