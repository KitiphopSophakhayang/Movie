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
          <a class="nav-link" href="actors.php">👨🏻‍💼ข้อมูลราดานักแสดง</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="movies.php">🎬ข้อมูลภาพยนตร์</a>
        </li>

      </ul>

    </div>
  </div>
</nav>

<br>
<div>
<a href="insertmembers.php" class="btn btn-success" role="button" aria-pressed="true">เพิ่ม</a>
</div>
<br>

<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "movie");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM members";
$result=mysqli_query($objConnect ,$sql);

echo"<h1 class='text-center'>ข้อมูลสมาชิก</h1>";

echo "<table width=\"700\" border=\"0\">";
echo "<tr bgcolor=\"#993333\"> ";
echo "<td><color=\"#FFFFFF\"> รหัสสมาชิก </font></td>";
echo "<td><color=\"#FFFFFF\"> ชื่อสมาชิก </font></td>";
echo "<td><color=\"#FFFFFF\"> นามสกุลสมาชิก </font></td>";
echo "<td><color=\"#FFFFFF\"> Emailสมาชิก </font></td>";
echo "<td><color=\"#FFFFFF\"> เบอร์โทร </font></td>";
echo "</tr>";

while($data = mysqli_fetch_array($result)) {
echo "<tr><td><a href='editmembers.php?MID=$data[MID]'>$data[MID]</a></td>";
echo "<td>$data[Mname]</td>";
echo "<td>$data[MLastname]</td>";
echo "<td>$data[Email]</td>";
echo "<td>$data[Tel]</td>";
echo" <td> <a type='button' class='btn btn-danger'href='delete.php?MID=$data[MID]'>ลบ</a></td>";

}

?>

</body>
</html>
