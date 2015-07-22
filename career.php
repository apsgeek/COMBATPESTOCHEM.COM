<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Combat Pestochem | Career</title>


<!--<link rel="stylesheet" href="css/bootstrapL.css">
<link rel="stylesheet" href="css/bootstrap-responsiveL.css">
<link rel="stylesheet" href="css/index.css">-->
 


<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">-->

<!--<script type="text/javascript" src="js/jquery-2.1.1.js"></script>-->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		jQuery(".pull_feedback").toggle(function(){
				jQuery("#feedback").animate({left:"0px"});
				return false;
			},
			function(){
				jQuery("#feedback").animate({left:"-350px"});	
				return false;
			}
		); //toggle
	}); //document.ready
	
	CPC = {

            slideLeft: function()
            {
                //alert("Here");
                jQuery("#feedback").animate({left:"0px"});
				return false;
               
               // $("#QueryForm").show("slide", { direction: "left" }, 1000);
                //$("QueryForm").toggle( "slide" );
            },
            slideRight: function()
            {
            	jQuery("#feedback").animate({left:"-362px"});
				return false;
            }
        }
</script>
<script>
	function validateForm()   
	{  
	 alert("Hello");
	 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailID.value))  
	  {  
	    return (true)  
	  }  
	    alert("You have entered an invalid email address!")  
	    return (false)  
	} 

</script>

<style>

#tt a{
	text-decoration:none;
	text-align:justify;
}
#tt1 a{
	text-decoration:none;
	text-align:justify;
}

</style>
	
</head>

<body>
		<?php
			include('header.php');
			include('cv.php');
		?>


		<div class="container-fluid" style="width:101.5%" ><!--container-fluid starts here-->
        
        	<div class="center-block" style="margin:90px 0; text-align:center"> <!--center block starts here-->
            
            	<!--<marquee direction="left">-->
                <h5 class="thumbnail" style="color:#FF0000; margin:0 20px;">
                Combat PestoChem is looking for candidate full of energy for the various posts. 
                We would like to hiring youngistan members as well as experience candidates
                </h5><!--</marquee>-->
                
                <h3 style="text-align:center; color:#06C">We are hiring for the following post</h3>
                <ol style=" list-style:none; margin:0 -15px" class="thumbnail">
                	
                    <li>Technician: Drill Machine Handling and for spraying.</li>
                    <li>Marketing Executive</li>
                    <li>Customer Executive</li>
                    <br>
                    <p style="color:#ED1417"><b>To apply for the above post call: HR Team @ +919559842888</b> </p>
                   <li><p> <a href="#"><button type="button" class="btn" data-toggle="modal" data-target="#career" 	
                   data-title="CAREER" style="margin:5px 0px; color:#124DB4">Click here to Submit the resume</button></a>
                   </p>
                   </li>

                </ol>
                
            </div><!--center-block ends here-->
            
        </div><!--container-fluid ends here-->
        
        <?php
			
			include('feedback.php');
			include('footer.php');
		
		?>
		     
		
  
</body>


</html>
