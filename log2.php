<?php
print_r("<pre>");
?>
<?php
 echo '
 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 ';
if(isset($_POST['user'])){
          include("connect.php");
          $user = $_POST['user'];
          $pass = $_POST['pass'];

          $sql="SELECT * FROM `thitima`
          WHERE  user='".$user."'
          AND  pass='".$pass."' ";
          $result = mysqli_query($conn,$sql);

          if(mysqli_num_rows($result)==1){
              $row = mysqli_fetch_array($result);
                Header("Location: in.php");

          }else{
            echo '
        		<script>
        			setTimeout(function() {
        			swal({
        					title: "",
        					text: " รหัสผ่านไม่ถูกต้อง",
        					type: "warning"
        				}, function() {
        				window.location = "log.php";
        			});
            }, 500);
        		</script>
        		';
        		}
        }
?>
