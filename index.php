<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-blue">

</div>
<center><form action="re2.php" method="post">
<form class="w3-container">
  <p>
  <label>ชื่อ-นามสกุล</label>
  <input class="w3-input" type="text"name="name"></p>
  <p>
  <div class="col-md-6">
                    <div class="form-group">

                        <label for="exampleInputEmail1"><b>วันที่สมัคร</b></label><br/>
                        	<input type="hidden" name="date" value="<?php echo $date_nows; ?>">
                            <input class="form-control" type="date" name="date" id=date>
                           

                    </div>
  <label>อีเมล</label>
  <input class="w3-input" type="text"  name="Email"></p>
  <p>
  <label>ชื่อผู้ใช้งาน</label>
  <input class="w3-input" type="text"name="user"></p>
  <p>
  <label>รหัสผ่าน</label>
  <input class="w3-input" type="text"name="pass"></p>
</form>
<div class="form-group">
        
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">บันทึก</button>
        </div>
</body>
</html> 
