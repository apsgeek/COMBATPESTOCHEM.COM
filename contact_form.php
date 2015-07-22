<?php
	$var1=(isset($_POST['name'])) ? $_POST['name']: '';
	$var2=(isset($_POST['email'])) ? $_POST['email']: '';
	$var3=(isset($_POST['company'])) ? $_POST['company']: '';
	$var4=(isset($_POST['subject'])) ? $_POST['subject']: '';
	$var5=(isset($_POST['message'])) ? $_POST['message']: '';
	
	

  mysql_connect("localhost","maddy","ms2010");
    /*mysql_connect("localhost","root","");*/


mysql_select_db("cp");

$query="INSERT INTO contact values('','$var1','$var2','$var3','$var4','$var5')";
$result=mysql_query($query);
if($result)
  {
	 echo '<script type="text/javascript">';
        echo 'alert("Sucessfully Submitted")';
        
       
        echo '</script>';  
  }

?>

<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "xgarbagelab@gmail.com";
 
    $email_subject = "Your email subject line";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['company']) ||
 
        !isset($_POST['subject']) ||

        !isset($_POST['message']))

         {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email_from= $_POST['email']; // required
 
    $company = $_POST['company']; // required
 
    $subject = $_POST['subject']; // not required
 

   
    $message = $_POST['message']; // not required

   




 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
}
 
  
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Your Name: ".clean_string($name)."\n";

 
    $email_message .= "Your Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Company Name: ".clean_string($company)."\n";
 
    $email_message .= "Subject: ".clean_string($subject)."\n";

   $email_message .= "Message: ".clean_string($message)."\n";

  
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 

 

 
 
 
?>

 
 