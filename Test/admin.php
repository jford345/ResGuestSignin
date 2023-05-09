<!--connection and query of data from database to be displayed on admin page--> 
<?php   
 include 'connection2.php';  
 $query = "SELECT * FROM guestgsws";  
 $run = mysqli_query($connection,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Admin Page</title>  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
    <meta http-equiv="refresh" content = "5" /> </head>  
 <body>  
 <header> <h3 style="center">List of Guest Signed In Admin</h3></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
           <th>ID</th>  
           <th>DBID</th>
           <th>Resident GSW ID</th>  
           <th>Guest First Name</th>  
           <th>Guest Last Name</th>  
           <th>Guest Phone Number</th>  
           <th>Guest Email</th>  
           <th>Guest Identification</th>  
           <th>Operation</th>  
      </tr>
      <!--query and connection to database-->  
      <?php   
       $i=1;  
       if ($num = mysqli_num_rows($run)>0) {  
            while ($result = mysqli_fetch_assoc($run)) {  
                 echo "  
                      <tr class='data'>  
                      <td>".$i++."</td>  
                           <td>".$result['id']."</td>  
                           <td>".$result['gswid']."</td>  
                           <td>".$result['fname']."</td>  
                           <td>".$result['lname']."</td>  
                           <td>".$result['phonenumber']."</td>  
                           <td>".$result['email']."</td> 
                           <td>".$result['guestident']."</td>  
                           <td><a href='delete.php?id=".$result['id']."' id='btn' >Delete</a></td>  
                      </tr>  
                 ";  
            }  
       }  
  ?> 
  
  <!--button to print out data from admin page-->
  <button class="btn btn-primary" onClick="window.print()">Print this page</button>
</table>  

</body>
<br><br>


</html>