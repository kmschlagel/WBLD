

<?php
   $name = $_POST['fname'] . ' ' . $_POST['lname'];
  $address = $_POST['address1'] . ' ' . $_POST['address2'];
  $state = $_POST['state'];  
  $email = $_POST['email'];
   $zipcode = $_POST['zip'];
   $homephone = $_POST['h_phone1'] . ' ' . $_POST['h_phone2'] . ' ' . $_POST['h_phone3'];
   $cellphone = $_POST['c_phone1'] . ' ' . $_POST['c_phone2'] . ' ' . $_POST['c_phone3'];
   $buisnessphone = $_POST['b_phone1'] . ' ' . $_POST['b_phone2'] . ' ' . $_POST['b_phone3'];
	$information = $_POST['docks'] . ' ' . $_POST['boat_lifts'] . ' ' . $_POST['used_docks'] . ' ' . $_POST['used_lifts'] . ' ' . $_POST['services'] . ' ' . $_POST['welding_fabrication'] . ' ' . $_POST['other'];

  //$to = '@webhostemail.com';
  $to = 'info@lovestodesign.com';
  $subject = 'customer information';
 
	// cn \n replaced with \r\n for windows hosting only i think.
	 $msg = "$name  has contacted you.\n";
  mail($to, $subject, $msg, 'From:' . $email);

?>


<style type="text/css">

#thankyou {
	width: 100px;
	margin: 0 auto;
}

#thankyou h1 {
	font-family: Verdana, Arial, sans-serif;
	color: #99ccff;
}

</style>


<div id="thankyou">
<h1>Thank you!</h1>
</div>

