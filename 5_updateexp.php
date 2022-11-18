<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="font-family:Calibri";>
        <form method="post" id="myForm">
            <h1> Update your expenses </h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Enter the column you want to edit</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="colname">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" >Enter the old value</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="oldname">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter the updated value</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="upda">
            </div>
            <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
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
        $col = $_POST["colname"];
        $oldval = $_POST["oldname"];
        $newval = $_POST["upda"];
        $up="UPDATE `".$usern."` SET $col='$newval' where $col='$oldval'";
        if(mysqli_query($conn,$up))
        {
            header("Location: welcome.php"); 
        }
    }

?>

