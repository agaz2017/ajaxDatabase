<!DOCTYPE html>
<html>
	<head>
		<script>var number = 0; </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script>
			$(document).read({
				alert(" jquary is working");
			});

		</script>
	</head>
	<body>
		<div>
			<p> Hello this is HTML inside of a PHP file</p>
			
			<?php

				 // $phpVariable = "john";
				 // $phpVariable .= "travolta";
				 // print("Hello my name is " . $phpVariable); 
				 // echo "<br />" . gettype($phpVariable);
				 // $counter = 0;
				 // while ($counter < 5) {
				 // 	echo "<br />" . $counter;
				 // 	$counter++;
				 // }

				 // for ($i=0; $i < 5 ; $i++) { 
				 // 	echo "<br />" . $i;
				 // }
					
				 echo "<h1> TESTING ARRAYS </H1>";	

				 $name[0] = "John";
				 $name[1] = "Melissa";
				 $name[2] = "Paul";
				 $name[3] = "Kristin";
				 $name[4] = "Jim";


				 for ($i=0; $i < count($name) ; $i++) { 

				 	echo "<br />" . $name[$i];
				 }


				
				 echo "<h3> Testing for each loop</h3>";

				 foreach ($name as $elementkey => $elementvalue) {
				 	$elementvalue = "newvalue";
					 	echo "<br />" .  $elementvalue ;
				 }

				  for ($i=0; $i < count($name) ; $i++) { 

				 	$name[$i] = "Default #" . $i;
				 }

				  foreach ($name as $elementkey => $elementvalue) {
				 	echo "<br />" .  $elementvalue ;
				 }

				 // $string = "OpRAh Winfrey";
				 // echo "<h2> testing regular expressions</h2>";
				 // echo preg_match("/^Oprah/i", $string);
				 // echo "<br />";
				 // echo preg_match("/winfrey$/i", $string);

				 echo "<br />";

				 // $string2 = "JohnJohnJohn";
				 // echo preg_match("/(John){4}/i", $string2)

				 // phone numbers

				 $phoneNumber = "(416)777-4121";
				 //phone number with extension 
				 $trudeausPhoneNumber = "(519)888-2135x55";

				 echo "<h3> Cookie setting up </h3>";

				 define("cookieExpirationTime", time() + 360);
				 define("twominutescookie", time() + 120);
				 define("username", "Chris", cookieExpirationTime);

				 setcookie("username", "Aga", time() + 120);
				 setcookie("phonenumbercookie", "416 787 4494", time() + 120);

				 echo "<script>
                 document.cookie='username=aga'; </script";
                 
                 echo "<script> number = prompt('Please enter a phone number'); document.cookie='phoneNumberCookie=' + number; </script";
                  echo "Cookie is " . $_COOKIE['phonenumbercookie'];

				 
				 //regular phone number no extension

                 // echo "<script>
                 // number = prompt('Enter phone number'); window.location.href += '?number='+ number; </script";



				 if ( preg_match("/[(][0-9]{3}[)][0-9]{3}-[0-9]{4}$/", $trudeausPhoneNumber))
				 	echo "<script>alert('Valid number!');</script>";
				 //phone number at an office with extension
				 elseif ( preg_match("/[(][0-9]{3}[)][0-9]{3}-[0-9]{4}x[0-9]{2,5}$/", $trudeausPhoneNumber))
				 	echo "<script>alert('Valid number with extention!');</script>";
				 else 
				 	echo "<script>alert('Invalid number!');</script>";

				 echo "<br />";
				 
		 $triosStudentEmail = "1234jesse.marshall@triosstudent.com";

		 		echo preg_match("/^[a-zA-Z]+.[a-zA-Z]+@triosstudent.com$/i", $triosStudentEmail);

		 		echo "<br />";

		 		$regularmail = "alex_jones@radiohost.ca";
		 		$regularmail2 = "1234_abd@jazzfm91.fm";
		 		echo preg_match("/[a-zA-Z0-9]+[.]?[-]?[_]?[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z]{2,}$/i", $regularmail2);

				 // canadian postal codes
		 		echo "<br />";
		 		$postalCode = "m5p  3l3";

		 		echo preg_match("/[a-zA-Z][0-9][a-zA-Z][ ]*[0-9][a-zA-Z][0-9]/i", $postalCode);

		 		// american zip code

				 echo "<br >";

				 $zipCode = "15817";

				 echo preg_match("/^[0-9]{5}$/", $zipCode);

				 
			 ?>
		</div>
	</body>
</html>