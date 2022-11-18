<?php
$login=false;
$showError=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include("1_database.php");
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT * from `users` where `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location: welcome.php");
    }
    else{
        $showError = "Invalid Credentials";
    }
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php require "_nav.php" ?>
    <?php
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Success!You are logged in!
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
        <h1 class="text-center">Login to learn how to manage your budget!</h1>
        <form action="3_login.php" method="post">
            <div class="form-group my-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                
            </div>
            <div class="form-group my-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>        
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
    session_start();
    include("1_database.php");
    if(isset($_POST["Submit"]))
    {
        $uname = $_POST["username"];
        $_SESSION["username"] = $uname;
        $pw = $_POST["password"];
        $sql = "SELECT Password FROM studentslogin WHERE Username = '$uname'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($result);
        if($pw==$row[0])
        {
            header("Location: Homepage.html"); 
        }
        else 
        {
            header("Location: 2_Newuser.php");
        } 
    }
?>