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

<p>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db($objConnect, "movie");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM movies WHERE MovieID ='$_GET[MovieID]'";
$result=mysqli_query($objConnect, $sql);
$data = mysqli_fetch_array($result,  MYSQLI_BOTH)

?>
<form id="form1" name="form1" method="get" action="successeditmovies.php">
<p>
<label for="MovieID">รหัสภาพยนต์</label>
<input type="text" name="MovieID" id="MovieID" value="<?=$data['MovieID'];?>"/>
</p>

<p>
<label for="Moviename">ชื่อภาพยนต์</label>
<input type="text" name="Moviename" id="Moviename" value="<?=$data['Moviename'];?>"/>
</p>

<p>
<label for="Descriptions">รายละเอียดภาพยนต์</label>
<input type="text" name="Descriptions" id="Descriptions" value="<?=$data['Descriptions'];?>" />
</p>

<p>
<label for="Time">ความยาวภาพยนต์</label>
<input type="text" name="Time" id="Time" value="<?=$data['Time'];?>" />
</p>

<p>
<label for="Date">วันที่ฉาย</label>
<input type="date" name="Date" id="Date" value="<?=$data['Date'];?>" />
</p>


<p>
    <input type="submit" value="แก้ไข" >
</p>

</form>

</p>

</body>
</html>