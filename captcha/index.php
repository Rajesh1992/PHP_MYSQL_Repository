<?php
  session_start();
  if(!isset($_POST['secure']))
  {
  $_SESSION['secure']=rand(1000,9999);
  }
  else
  {
     if($_SESSION['secure']==@$_POST['secure'])
     {
        echo 'A match';
     }
     else
     {
         echo 'Invalid, please try again';
         $_SESSION['secure']=rand(1000,9999);
     }
  }
?> <br>

<img src="gen.php"/>

<form action="index.php" method="POST">
      Type what you see on image:<input type="text" size="6" name="secure">
      <input type="submit" value="Submit">
</form>