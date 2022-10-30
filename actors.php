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
<br>
<div>
<a href="insertactors.php" class="btn btn-success" role="button" aria-pressed="true">เพิ่ม</a>
</div>
<br>

<?php
        $objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
        mysqli_select_db($objConnect, "movie");
        mysqli_query($objConnect, "SET NAMES utf8");

        $sql="SELECT * FROM actors";
        $result=mysqli_query($objConnect, $sql);

        echo"<h1 class='text-center'>ข้อมูลนักแสดง</h1>";

        echo "<table width=\"700\" border=\"0\">";
        echo "<tr bgcolor=\"#993333\"> ";
        echo "<td><color=\"#FFFFFF\"> รหัสนักแสดง </font></td>";
        echo "<td><color=\"#FFFFFF\"> ชื่อนักแสดง </font></td>";
        echo "<td><color=\"#FFFFFF\"> นามสกุลนักแสดง </font></td>";
        echo "<td><color=\"#FFFFFF\"> เพศ </font></td>";
        echo "<td><color=\"#FFFFFF\"> เบอร์โทร </font></td>";
        echo "</tr>";

        while($data = mysqli_fetch_array($result)) {
        echo "<tr><td><a href='editactors.php?AID=$data[AID]'>$data[AID]</a></td>";
        echo "<td>$data[Aname]</td>";
        echo "<td>$data[Alastname]</td>";
        echo "<td>$data[Gender]</td>";
        echo "<td>$data[Atel]</td>";
        }

?>

        </body>
</html>
