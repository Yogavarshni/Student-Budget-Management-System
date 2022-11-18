<?php

    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header('location:3_Login.php');

    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - <?php echo $_SESSION['username']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php require "_nav.php" ?>

    <div class="options-container mb-4">
        <h3 class="text-center mt-4">Welcome - <?php echo $_SESSION['username']?>!</h3><br><br>
        <div class="row  justify-content-evenly ">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">View</h5>
                        <a href="7_viewexp.php" class="btn btn-primary">view</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Add</h5>
                        <a href="4_insertexp.php" class="btn btn-primary">add</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Update</h5>
                        <a href="5_updateexp.php" class="btn btn-primary">update</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Delete</h5>
                        <a href="6_deleteexp.php" class="btn btn-primary">delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  <style>
    table
    {
        display: flex;
        justify-content:center;
        align-items:18px;
    }
    td
    {
        padding:0 15px;
        font-size:18px;
    }
    </style>
</html>

<?php


    include("1_database.php"); 
    $usern= $_SESSION["username"];
$query = "SELECT * FROM `".$usern."`";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Category</font> </td> 
          <td> <font face="Arial">Expenses</font> </td> 
          <td> <font face="Arial">Amount</font> </td> 
          <td> <font face="Arial">Date</font> </td> 
      </tr>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Category"];
        $field2name = $row["Expenses"];
        $field3name = $row["Amount"];
        $field4name = $row["Date"];
       

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
              </tr>';
    }
    $result->free();
} 
?>


