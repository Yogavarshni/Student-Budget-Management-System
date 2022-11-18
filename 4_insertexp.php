<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="font-family:Calibri";>
        <form method="post" id="myForm">
            <h1> Add your expenses </h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Enter the category</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cat">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter the item name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="exp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter the price</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="price">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter the date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="dates">
            </div>
            <button type="submit" class="btn btn-primary" name="Submit">Submit</button><br><br>
            <button type="submit" class="btn btn-danger" name="Submita">Click here of your budget exceeds</button>
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
    $var;
    $usern= $_SESSION["username"];
    if(isset($_POST["Submit"]))
    {
        $category = $_POST["cat"];
        $item = $_POST["exp"];
        $amt = $_POST["price"];
        $dates = $_POST["dates"];
        $up = "SELECT sum(Amount) from `".$usern."`"; 
        $result = mysqli_query($conn,$up);
        $row = mysqli_fetch_row($result);
        $var = $row[0]+$amt;
        if($var>=5000)
        {
            echo '<script>alert("Budget exceeded for this month")</script>';
        }
        else
        {
            $query="insert into `".$usern."` values('$category','$item', '$amt', '$dates')";
            if(mysqli_query($conn,$query))
            {
                header("Location: welcome.php"); 
            }
        }
    }
    if(isset($_POST["Submita"]))
    {
        header("Location: welcome.php"); 
    }
?>
    