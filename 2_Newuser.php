<?php
$showAlert=false;
$showError=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $servername = "localhost";
     $username="root";
     $password="";
     $database="StudentbudgetManagement";
     $conn = mysqli_connect($servername, $username, $password, $database);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    // $exists=false;
     
    /*$table= "create table users
    (
        Username varchar(100),
        Password varchar(100),
        dt datetime
    )";
    mysqli_query($conn,$table);*/
    //Check if username exists
    $existSql = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($conn,$existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows>0){
        //$exists=true;
        $showError = "Username already exists";
    } 
    else
    {
        if($password==$cpassword)
        {
            $showAlert = true;
            $sql="INSERT INTO `users` (`Username`,`Password`,`dt`) VALUES('$username','$password',current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                
                $table2 ="create table `".$username."`
                (
                    Category varchar(100),
                    Expenses varchar(100),
                    Amount integer,
                    Date date
                )";
                mysqli_query($conn,$table2);
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php require "_nav.php" ?>
    <?php
    if($showAlert)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Success!Your account is now created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }   
    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Error!'
        .$showError.'  
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }   
    ?>
    <div class="container my-4">
        <h1 class="text-center">Sign up to our website</h1>
        <form action="2_Newuser.php" method="post">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username"> 
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <small id="emailHelp" class="form-text text-muted">Make sure to type same password</div>
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>        
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>


