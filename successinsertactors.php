<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrapc.min.css ">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">🎥HDMovie</a>

    <div class="collapse navbar-collapse" id="navbarColor01">
     
    <ul class="navbar-nav me-auto">
      
        <li class="nav-item">
          <a class="nav-link" href="members.php">👨🏻‍💼ข้อมูลสามาชิก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="movies.php">🎬ข้อมูลภาพยนตร์</a>
        </li>

      </ul>

    </div>
  </div>
</nav>


<p>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db($objConnect, "movie");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_insert="INSERT INTO actors(AID,Aname,Alastname,Gender,Atel) 
             VALUES ('$_GET[AID]','$_GET[Aname]','$_GET[Alastname]','$_GET[Gender]','$_GET[Atel]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<a href='actors.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='actors.php'>"."กลับหน้าหลัก"."</a>";
}

?>

</body>
</html>
