<?php
   session_start();
   if($_SESSION['kodecap']==$_POST['kodeval']) {
      echo "Benar"; } 
   else {
      echo "Salah"; }
?>
<form id="FAcak" name="FAcak" method="post" action="captchaa.php">
 <p>
  <input name="kodeval" type="text" id="kodeval" size="6" maxlength="6" />
  <img src="captcha.php" width="75" height="25" alt="Kode Acak" />
 </p>
 <p><input type="submit" name="button" id="button" value="Kirim" /></p>
</form>