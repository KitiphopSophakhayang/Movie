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
        <a class="nav-link" href="actors.php">🙍🏼‍♂️ข้อมูลราดานักแสดง</a>
        </li>

      </ul>

    </div>
  </div>
</nav>

<br>
<div>
<a href="insertmovies.php" class="btn btn-success" role="button" aria-pressed="true">เพิ่ม</a>
</div>
<br>

<?php
        $objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
        mysqli_select_db($objConnect, "movie");
        mysqli_query($objConnect, "SET NAMES utf8");

        $sql="SELECT * FROM movies";
        $result=mysqli_query($objConnect, $sql);

        echo"<h1 class='text-center'>ข้อมูลภาพยนตร์</h1>";

        echo "<table width=\"700\" border=\"0\">";
        echo "<tr bgcolor=\"#993333\"> ";
        echo "<td><color=\"#FFFFFF\"> รหัสภาพยนต์ </font></td>";
        echo "<td><color=\"#FFFFFF\"> ชื่อภาพยนต์ </font></td>";
        echo "<td><color=\"#FFFFFF\"> รายละเอียดภาพยนต์ </font></td>";
        echo "<td><color=\"#FFFFFF\"> ความยาวภาพยนต์ </font></td>";
        echo "<td><color=\"#FFFFFF\"> วันที่ฉาย </font></td>";
        echo "</tr>";

        while($data = mysqli_fetch_array($result)) {
        echo "<tr><td><a href='editmovies.php?MovieID=$data[MovieID]'>$data[MovieID]</a></td>";
        echo "<td>$data[Moviename]</td>";
        echo "<td>$data[Descriptions]</td>";
        echo "<td>$data[Time]</td>";
        echo "<td>$data[Date]</td>";
        }

?>

</body>
</html>


