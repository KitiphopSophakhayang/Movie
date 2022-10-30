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


<form action="successinsertactors.php" method="GET">
<p>
<label for="AID">รหัสนักแสดง</label>
<input type="text" name="AID" id="AID" value=""/>
</p>
<p>
<label for="Aname">ชื่อนักแสดง</label>
<input type="text" name="Aname" id="Aname" value=""/>
</p>
<p>
<label for="Alastname">นามสกุลนักแสดง</label>
<input type="text" name="Alastname" id="Alastname" value="" />
</p>
<p>
<label for="Gender">เพศ</label>
<input type="text" name="Gender" id="Gender" value="" />
</p>
<p>
<label for="Atel">เบอร์โทร</label>
<input type="text" name="Atel" id="Atel" value="" />
</p>
<p>
    <input type="submit">
</p>
</form>

</body>
</html>
