<?PHP include "header.php" ?>

		<div id="preamble">

	<p><center><b>CONTACT the ReMOAT team</b></p><p>If you have comments, questions, enquiries about ReMOAT and its services or suggestions for modifications or improvements
	or have found any errors during use of ReMOAT, please contact us using the form below</center><br><br><br><br></p>

<?php
	   if ($_SERVER['REQUEST_METHOD'] != 'POST'){
	      $me = $_SERVER['PHP_SELF'];
	?> 
	   <form name="form1" method="post"
		 action="<?php echo $me;?>">
	      <table border="0" cellspacing="0" cellpadding="2" width="90%">
		 <tr>
		    <td width="30%" align="right">Name:</td>
		    <td><input type="text" name="Name"></td>
		 </tr>
		 <tr>
		    <td width="30%" align="right">Email:</td>
		    <td><input type="text" name="Email"></td>
		 </tr>
		 <tr>
		    <td width="30%" align="right">Subject:</td>
		    <td><input type="text" name="Subject"></td>
		 </tr>
                 <tr>
		    <td><br></td>
		    <td><br></td>
		    
		 </tr>
		 <tr>
		    <td></td>
		    <td></td>
		 </tr>
		 <tr>
		    <td></td>
		    <td></td>
		 </tr>
		 <tr>
		    <td  width="62%" align="right" valign="top">Message:</td>
		    <td><textarea rows="20" cols="25" name="MsgBody" ></textarea></td>
		 </tr>
		    <td width="30%" align="right"></td>
		    
		    
		     <td width="70%" align="center"><input type="submit" name="Submit"  value="Send Email"></td>
		 </tr>
	      </table>
	   </form>
	
	<?php
	   } else {
	      error_reporting(0);
	      $recipient = 'remoat01@googlemail.com';
	      $subject = stripslashes($_POST['Subject']);
	      $from = stripslashes($_POST['Name']);
	      $email = stripslashes($_POST['Email']);
	      $msg = "Message from: $from\n\nEmail: $email\n\n".stripslashes($_POST['MsgBody']);
	      $headers = "From: $from <$email>";
	      if (mail($recipient, $subject, $msg, $headers))
		 echo nl2br("<br /><br /><b>Your Message Was Sent Successfully.</b>");
	      else
		 echo "<br /><br /><b>Message failed to send</b>";
	}
	?>
	</p>
		</div>

		<div id="supportingText">
		</div>
		<div id="participation">
			<h3><span>

			</span></p>

			<p class="p2"><span></span></p>

			<p class="p3"><span></span></p>

					</div>

		<div id="benefits">
			<h3><span></span></h3>

			<p class="p1"><span></span></p>
		</div>

		<div id="requirements">

			<h3><span></span></h3>

			<p class="p1"><span></span></p>

			<p class="p2"><span></span></p>
			<p class="p3"><span></span></p>
			<p class="p4"><span></span></p>

			<p class="p5"><span></span>&nbsp;</p>
		</div>

		<?PHP include "footer.php"?>

	</div>

<?PHP include "menu.php"; ?>	

</body>
</html>
