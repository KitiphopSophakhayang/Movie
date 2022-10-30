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


<form action="successinsertmembers.php" method="GET">

<p>
<label for="MID">รหัสสมาชิก</label>
<input type="text" name="MID" id="MID" value="" />
</p>
<p>
<label for="Mname">ชื่อสมาชิก</label>
<input type="text" name="Mname" id="Mname" value=""/>
</p>
<p>
<label for="MLastname">นามสกุลสมาชิก</label>
<input type="text" name="MLastname" id="MLastname" value=""/>
</p>
<p>
<label for="Email">Emailสมาชิก</label>
<input type="email" name="Email" id="Email" value=""/>
</p>
<p>
<label for="Tel">เบอร์โทร</label>
<input type="text" name="Tel" id="Tel" value=""/>
</p>


<p>
    <input type="submit">
</p>
</form>

</body>
</html>
