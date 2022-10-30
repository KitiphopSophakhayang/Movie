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


<form action="successinsertmovies.php" method="GET">
<p>
<label for="MovieID">รหัสภาพยนต์</label>
<input type="text" name="MovieID" id="MovieID" value=""/>
</p>
<p>
<label for="Moviename">ชื่อภาพยนต์</label>
<input type="text" name="Moviename" id="Moviename" value=""/>
</p>
<p>
<label for="Descriptions">รายละเอียดภาพยนต์</label>
<input type="text" name="Descriptions" id="Descriptions" value="" />
</p>
<p>
<label for="Time">ความยาวภาพยนต์</label>
<input type="text" name="Time" id="Time" value="" />
</p>
<p>
<label for="Date">วันที่ฉาย</label>
<input type="date" name="Date" id="Date" value="" />
</p>
<p>
    <input type="submit">
</p>
</form>

</body>
</html>