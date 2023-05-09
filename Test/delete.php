
<!--php script that deletes data from dataabse if button is pressed on the admin page-->
<?php   
 include 'connection2.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `guestgsws` WHERE id = '$id'"; 
      $run = mysqli_query($connection,$query);  
      if ($run) {  
           header('location:admin.php');  
      }else{  
           echo "Error: ".mysqli_error($connection);  
      }  
 }  
 ?>  