<?php
$message = "";
if(isset($_POST['Submit'])){ //check if form was submitted
  $input = $_POST['interest']; //get input text
  $message = "Success! You entered: ".$input;
}    
?>