<!--connection and query from databe to display information from database for desk Assistant-->
<!doctype html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display logins For Desk Assistant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <meta http-equiv="refresh" content = "5" /> </head>  
 <body>  
 <header> <h3>List of Guest Signed In DESK ASSISTANT</h3></header>  
    
    <!--<button>Add user</button> -->
    
    <table border="1" cellspacing="0" cellpadding="0">
  <thead>
    <tr class="heading">
   
      <th scope="col">student number</th>
      <th scope="col">Guest First Name</th>
      <th scope="col">Guest Last Name</th>     
      <th scope="col">Time Signed In</th>

    </tr>
  </thead>
  <tbody>
    <!--connection and query of data from database-->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="test";
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
            die('Connection Failed  : '.$conn->connect_error);

    }else{
        $sql = "SELECT * FROM guestgsws";
        $results = $conn->query($sql);

    }

    if(!$results){
        die("Invalid query: " . $conn->error);
    }

    while($row = $results->fetch_assoc()){
        echo "<tr class='data'>
        
        <td> ". $row["gswid"] . "</>
        <td> ". $row["fname"] . "</td>
        <td> ". $row["lname"] . "</td>       
        <td> ". $row["time"] . "</td>
    
        
        </tr>";
        

    }   

    
        ?>
  </tbody> 


  
  </tbody>
</table>
    </div>
  </body>
</html>