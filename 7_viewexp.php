<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="font-family:Calibri";>
        <form method="post" id="myForm">
            <h1> View your expenses </h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" name="d1">Enter the start date </label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="d1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" name="d2">Enter the end date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="d2">
            </div>
            <button type="submit" class="btn btn-primary" name="Submit">Submit</button><br><br>
            <button type="submit" class="btn btn-success" name="done">Done View</button>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            
        </form>
    </body>
    <style>
        #myForm
        {
            margin: 8%;
        }
        h1
        {
            text-align:center;
        }
    </style>
</html>
<?php
    session_start();
    include("1_database.php"); 
    $usern= $_SESSION["username"];
    if(isset($_POST["Submit"]))
    {
        $date1 = $_POST["d1"];  
        $date2 = $_POST["d2"];  
        $up="SELECT sum(Amount) from `".$usern."` where date BETWEEN '$date1' and '$date2'";
        $result = mysqli_query($conn,$up);
        $row = mysqli_fetch_row($result);
        $val = $row[0];
        echo  "<h1> $val </h1>";
    }
    if(isset($_POST["done"]))
    {
        header("Location: welcome.php");
    }
?>