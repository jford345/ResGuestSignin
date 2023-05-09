<?php

       
	  $gswid = $_POST['gswid']; 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $guestident = $_POST['guestident'];

        //Database Connection
        $conn = new mysqli('localhost','root','','test');
        if($conn->connect_error)
        {
                die('Connection Failed  : '.$conn->connect_error);

        }else{
                $stmt = $conn->prepare("insert into guestgsws(gswid,fname, lname,phonenumber,email,guestident) values(?,?,?,?,?,?)");
                
                
                $stmt->bind_param("sssiss",$gswid,$fname,$lname,$phonenumber,$email,$guestident);
                $stmt->execute();
                $stmt->close();
                $conn->close();
        }
        header('refresh:0;sucesspage.php');

        
?>
