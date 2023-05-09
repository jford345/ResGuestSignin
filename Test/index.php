<?php
session_start();
$_SESSION['gswid']=9;
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Campus Login System</title>
  <!--style sheet link-->
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <SCRIPT language=Javascript>
    //this scrpit only allows numbers to be entered into the mainFormPage form
    function numOnly(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

      return true;
    }


  </SCRIPT>
<script>
  //this is the new one scrip that what i created. you have to add onclick="saveData() on the <button class="button"
  function saveData() {
    const name = document.getElementById('gswid').value;
    localStorage.setItem('gswid', name);

  }


  function checkForm() {
            // Get the value of the input field
            var name = document.getElementById('gswid').value;

            // Check if the field is empty
            if (name === "") {
                // If it is empty, no message show show due to it being a required fild.
                
                return false; // Prevent the form from submitting
            } else {
                // If it is not empty, redirect to the desired page
                window.alert('Sign-in successful!');

                window.location.href = "guest.php";
                return false; // Prevent the form from submitting
            }
          }

    
           
		

</script>



</head>


<body>

  <div class="container">
    <div class="div-form">
      <h1> Welcome to GSW </h1>
      <form method="post"  onsubmit="signIn(); "  action="guest.php" name="form1" id="mainFormPage" autocomplete="off">
        <div class="inp">
          
          <!--This is where teh student that live in the doerms will enter their 913     (secondmenu.html)-->
          <i class="studentuser"></i>

          
          <!--I have set this to only 9 char can be entered-->

          <input type="text" name="gswid"  id="gswid" onkeypress="return numOnly(event)" placeholder="GSW ID"
            maxlength="9" required>
        </div>

        <button class="button" type="submit" id="btnInsert" value="submit"  >Sign In</button>

      </form>


      <script> function signIn() {
			// Get the username and password values
			var username = document.getElementById('gswid').value;
			

			// Check if the username and password are correct
			if (username.length >= 1 && username.length <= 9) {
				// Show alert message for successful sign-in
				window.alert('Sign-in successful!');
        window.location.href = 'guest.php';

				// Redirect to next page
				
			} 
    }
      </script>
      <script>
        window.onload=function(){gswid.focus()}
      </script>     
      
      
    </div>
    <div class="div-text">

      <img src="GSW-Badge-1C-white (1).png" alt="GSWbage">

    </div>

  </div>


</body>

</html>


<?php
if(isset($_SESSION['gswid'])&& ! empty($_SESSION['gswid'])){
    echo $_SESSION['gswid'];
}
echo $_SESSION['gswid'];

session_destroy();
?>