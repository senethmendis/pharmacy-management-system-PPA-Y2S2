function validate()
	{
		if(validateFullName() && validateEmail() && validateNic() && validateNum())
			{
				alert("Order has been placed");
			}
		else{
			event.preventDefault();
		}
	}

function validateFullName()
	{
		//Read the value that user has given and assign to the variable
		var fname=document.getElementById("inputname").value;
		//Check whether the value is exsists or not
		if(fname=="" || fname==null)
			{
				alert("Please enter full name");
				return false;
			}
			
			return true;
	}

  function validateEmail()	
	{
		var email=document.getElementById("txtEmail").value;
		var len=email.length;//length of email
		var at=email.indexOf("@");//index of @ and assign it to at
		var dt=email.lastIndexOf(".");//find the last dot and assign to dt
		
		if((at<2)||((dt-at)<2)||((len-dt)<2))
		   {
		   	alert("Please enter valid email address");
			return false;
		   }
		    return true;
	}

  function validateNic()
	{
		var nic=document.getElementById("inputnic").value;
		var len=nic.length;
		
		if((len<12) || (len<10))
			{
				alert("Invalid NIC");
				return false;
			}
			return true;
	}

	function validateNum()
	{
		var num=document.getElementById("inputnum").value;
		var len=num.length;
		
		if( (len<=10))
			{
				alert("Invalid Phone number");
				return false;
			}
			return true;
	}

//send email

function sendEmail() {
	if (isset($_POST['button'])) {

		//getting customer data
		$name = $_POST['inputname']; //getting customer name
		$fromEmail = $_POST['txtemail']; //getting customer email
		$phone = $_POST['inputnum']; //getting customer Phome number
		$subject = $_POST['subject']; //getting subject line from client
		$subject2 = "Confirmation: Message was submitted successfully | Lifecare Pharmacy"; // For customer confirmation


		//Message for client confirmation
		/*$message2 = "Dear" . $name . "\n". "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
     . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
     . "Regards," . "\n" ;*/


		//Email headers

		$headers2 = "From: ".$mailto; // This will receive client

		//PHP mailer function


		$result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client

		//Checking if Mails sent successfully

		if ($result2) {
			$success = "Your Message was sent Successfully!";
		} else {
			$failed = "Sorry! Message was not sent, Try again Later.";
		}

	}
}

