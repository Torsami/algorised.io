<?php
include('../cert.php');
?>
<html>
<head>
<title>ALGORITHMS</title>
</head>
<body style="background: linear-gradient(white, lightblue);">
</br>
<div style="width:60%; margin: 0 auto;">
<p><input type='button' value='<- GO BACK TO HOME PAGE' onclick='location.href="../"' /></p>
</div>

<fieldset style="width:60%;margin: 0 auto; background-color:white;">
<legend><h1>ALGORITHMS</h1></legend>
<h1>Edu -Portal v.0.1</h1>
 <h3><strong>Edu-Portal:</strong> Is our current academic soluton, developed to meet the challenges surrounding </br>education administration in Christian Missions and private institutions.</br>
 </br>Seminar for the unveiling of this platform is scheduled for:</br>

 <p style="color:blue;"><strong>Date:</strong> 1st July, 2017.</br>
 <strong>Venue:</strong> Good life Conference Hall, adjacent Plateau Hotel. Jos. Plateau State.</br>
 <strong>Time: </strong>10:00 am.</p></h3>
</fieldset>

<fieldset style="width:60%;margin: 0 auto; background-color:white;">
<legend><h1>SIGN UP FOR THE EVENT!</h1></legend>
<h3>Enter information below inorder to make reservations for your institition towards the upcoming 
</br><font color="blue"><h2>Imagi-neering of Eduportal Seminar..</h2> </font></h3>
<form action="" method="POST" >
<p><input type="email" name="email" placeholder="Your email" required/></p>
<p><input type="number" name="mobile" placeholder="Mobile Number" required/></p>
<p><input type="text" name="inst" placeholder="Name of Institution" required/></p>
<p><select name="number"required>
   <option value="">How many management staff will represent your institution</option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="4">4</option>
   <option value="5">5</option>
   </select></p>
   <input type="submit" name="submit" value="Make Reservations" />
</form>
<?php
if(ISSET($_POST['submit'])){
	if(empty($_POST['inst']) || empty($_POST['number']) || empty($_POST['email']) || empty($_POST['mobile'])){
		echo '<font color="red">All fields are required...</font>';
	}else{
		$inst = $db->real_escape_string(strip_tags($_POST['inst']));
		$number = $db->real_escape_string(strip_tags($_POST['number']));
		$email = $db->real_escape_string(strip_tags($_POST['email']));
		$mobile = $db->real_escape_string(strip_tags($_POST['mobile']));
		
		$insert = "INSERT INTO `algorithm`
		(`id`, `institution`, `attendance`, `email`, `mobile`, `date`) 
		VALUES 
		(NULL, '$inst', '$number', '$email', '$mobile', NOW() )" ;
		if (!$db->query($insert)) {die(mysqli_error($db));
			//echo '<font color="red">Task incomplete please try again...</font>';
			}else{
		$subject = 'Reservations made successful';
		$message = 'Hi, </br>
		<p>Your Reservations for the <h2>Imagi-neering of Eduportal Seminar</h2> was successful, </p>
		<p></br>continue to check <a href="www.computerscholars.com">our website</a> or follow us on facebook or twitter 
		</br>for more updates.</p></br></br>

		<p>Thank you,</p></br>
		<p>POST MASTER</p></br>
		<p>COMPUTER SCHOLARS.</p>';
		include('../email.php');
		echo '<script>alert("Reservations made successfully!!")</script>';
		echo '<font color="green">Reservations made successfully!! Looking forward to meeting you..</font>';
		}
	}
}

?>
</br>
<p><font color="red">
N.B.: Be inform that though the seminar and materials will be open and free, participants will pay 
the sum of N2, 000 &#40;Two Thousand Naira &#41 each for lunch meal..</font></p>
</fieldset>

</body>