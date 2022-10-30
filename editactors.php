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

$sql="SELECT * FROM actors WHERE AID ='$_GET[AID]'";
$result=mysqli_query($objConnect, $sql);
$data = mysqli_fetch_array($result,  MYSQLI_BOTH)

?>
<form id="form1" name="form1" method="get" action="successeditactors.php">
<p>
<label for="AID">รหัสนักแสดง</label>
<input type="text" name="AID" id="AID" value="<?=$data['AID'];?>"/>
</p>

<p>
<label for="Aname">ชื่อนักแสดง</label>
<input type="text" name="Aname" id="Aname" value="<?=$data['Aname'];?>"/>
</p>

<p>
<label for="Alastname">นามสกุลนักแสดง</label>
<input type="text" name="Alastname" id="Alastname" value="<?=$data['Alastname'];?>" />
</p>

<p>
<label for="Gender">เพศ</label>
<input type="text" name="Gender" id="Gender" value="<?=$data['Gender'];?>" />
</p>

<p>
<label for="Atel">เบอร์โทร</label>
<input type="text" name="Atel" id="Atel" value="<?=$data['Atel'];?>" />
</p>


<p>
    <input type="submit" value="แก้ไข" >
</p>

</form>

</p>

</body>
</html>
