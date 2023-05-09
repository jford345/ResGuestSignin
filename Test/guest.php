<?php
    // this page outputs the contents of the textarea if posted
    $gswid = ""; // set var to avoid errors
    if(isset($_POST['gswid'])){
        $gswid = $_POST['gswid'];
    }
   
?>
<textarea style="display:none;"><?php echo $gswid;?></textarea>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Campus Login System</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>
    <div class="div1">

        <div class="studinfo">
    
          <div class="card">
    
            <div class="cardDetails">
            <div class="img"> </div>
              <p class="text-title">Student</p>
              <p><span id='gswid'></span></p>
              <!-- this is the only one i added-->
                      <!--this is the back button where it will take you back to the hompage-->
              <button type="button" onclick="window.location.href = 'index.html';"> BACK
              </button>
            </div>
    
          </div>
    
        </div>
    
    
      </div>
      
      


    <script>
      //this is where the data is getting recived from and being stored under where the 913 is suppose to be shown
     // const localStudentId = sessionStorage.getItem('idholder');
      //document.getElementById('gswid').textContent = localStudentId;

      //this is the code for when they leve something blank 2/27/2023
      function validateForm() {
        var x = document.forms["myForm"]["fname"].value;
        if (x == "") {
          alert("Please enter your first name");//need to enter the first name or it wont submit
          return false;
        }
        var x = document.forms["myForm"]["lname"].value;//need to enter the last name or it wont submit
        if (x == "") {
          alert("Please enter last name");
          return false;
        }
        var x = document.forms["myForm"]["phonenumber"].value;//need to enter the phone number or it wont submit
        if (x == "") {
          alert("Please enter your phone number");
          return false;
        }
        var x = document.forms["myForm"]["email"].value;//need to enter the email or it wont submit
        if (x == "") {
          alert("Please enter a email");
          return false;//this means the form will not be submit if it returns false.
        }


      }

    </script>
    




  </div>
  <div class="div2">

    <div class="guestinfo">
      

      <h1>Guest info</h1>
      <script>
        // Get the URL parameters
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
      
        // Get the value of the "name" parameter
        const name = urlParams.get('name');
      
        // Set the value of the input field with id "result"
        document.getElementById('result').value = name;
      </script>
      <form method="POST" action="connect.php" onsubmit="return validateForm()" autocomplete="off">        
          
          <input type="hidden" name="gswid" id="gswid" value="<?php echo (isset($gswid)) ? $gswid: ''?>">        

                  
            
        <br>
        <label>Guest First Name: </label>
        <br>
        <input type="text" name="fname" id="name" placeholder="Enter your guest First Name" required>
        <br><br>
        <label>Guest Last Name: </label>
        <br>
        <input type="text" name="lname" id="name" placeholder="Enter your guest Last Name" required>
        <br><br>
        <label>Guest Phone Number</label>
        <br>
        <input type="number" name="phonenumber" id="name" placeholder="Enter your guest phone number" required>
        <br><br>
        <label>Guest Email: </label>
        <br>
        <input type="email" name="email" id="name" placeholder="Enter Your guest Valid Email" required>
        <br><br>
        <label>Guest Identification</label>
        <br>
        <input type="text" name="guestident" id="name" placeholder="Enter A Valid form of id Drivers License # or Guest GSWID" required>
        <br><br>
        <input type="submit" value="submit" name="submit" id="submit">
        <br>
      </form>
     
    </div>
  </div>