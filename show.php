


<?php include ("connect.php");
    $search=isset($_POST['search']) ? $_POST['search']:'';
      $sql="SELECT * FROM `thitima` WHERE `id` LIKE '%$search%'";
    $resual = mysqli_query($conn, $sql);
    
 ?>
<!DOCTYPE html>

  
<div class="container "align ='center';>

        <!-- ************************************ -->
        <table  class="table table-bordered table-striped" id="example" >
          <thead class="thead-light">
          <tr align = 'center'; >
             <table  class="table table-bordered table-striped" id="example" >
                  <thead class="thead-light">
                  <tr align = 'center'; >
                   <th width="3%">ไอดี</th>
                   <th width="15%">ชื่อ-นามสกุล</th>
                   <th width="15%">วันที่สมัคร</th>
                   <th width="10%">อีเมล</th>
                   <th width="10%">ชื่อผู้ใช้งาน</th>
                   <th width="7%">รหัสผ่าน</th>
                   
                   
                  

                 

                 </tr>

               </thead>
             </thead>

             <!-- Include bootstrap & jQuery -->
             <link rel="stylesheet" href="bootstrap.css" />
             <script src="jquery-3.3.1.min.js"></script>
             <script src="bootstrap.js"></script>

             <!-- Creating table heading -->

               <?php
                        while($row = mysqli_fetch_array($resual,MYSQLI_ASSOC)){
                   ?>
                   <tr align = 'center';>
                     <td><?php echo $row["id"]; ?></td>
                     <td><?php echo $row["name"]; ?></td>
                     <td><?php echo date("d-m-Y",strtotime($row["date"])); ?></td>
                          <td><?php echo $row["Email"]; ?></td>
                     <td><?php echo $row["user"]; ?></td>
                     <td><?php echo $row["pass"]; ?></td>
                     
                     <script>

  
</script>
                   </tr>
                 <?php }?>
                
</div>
        </body>
        </div>
      </div>
    </div>
  </div>
</table>
</body>
</html>
<a href="log.php" class="btn btn-info btn-sm"> กลับหน้าหลัก </a>   