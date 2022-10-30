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
          <a class="nav-link" href="members.php">👨🏻‍💼ข้อมูลราดานักแสดง</a>
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

$sql="SELECT * FROM members WHERE MID ='$_GET[MID]'";
$result=mysqli_query($objConnect, $sql);
$data = mysqli_fetch_array($result,  MYSQLI_BOTH)

?>
<form id="form1" name="form1" method="get" action="successeditmenbers.php">
<p>
<label for="MID">รหัสสมาชิก</label>
<input type="text" name="MID" id="MID" value="<?=$data['MID'];?>"/>
</p>

<p>
<label for="Mname">ชื่อสมาชิก</label>
<input type="text" name="Mname" id="Mname" value="<?=$data['Mname'];?>"/>
</p>

<p>
<label for="MLastname">นามสกุลสมาชิก</label>
<input type="text" name="MLastname" id="MLastname" value="<?=$data['MLastname'];?>" />
</p>

<p>
<label for="Email">Emailสมาชิก</label>
<input type="email" name="Email" id="Email" value="<?=$data['Email'];?>" />
</p>

<p>
<label for="Tel">เบอร์โทร</label>
<input type="text" name="Tel" id="Tel" value="<?=$data['Tel'];?>" />
</p>


<p>
    <input type="submit" value="แก้ไข" >
</p>

</form>

</p>


</body>
</html>
