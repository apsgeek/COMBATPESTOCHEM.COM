<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Combat Pestochem | Pest Recognition</title>


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

</head>

<body>
		<?php
			include('header.php');
		?>


<style>

	#pc img{
		width:240px;
		height:166px;
	}

</style>
		<div id="pc" class="container " style="text-align:center; margin:50px 90px ">
        
        	<h2 style=" color:#06C; text-align:center">Pest Recognition</h2>
            <br>
            <p style="text-align:center; color:#F00">
            Here you can know your pest, what are they and how can they harm you !!! .
            </p>
            
            <div class="row"> <!--row 1 start here -->
            <?php
			
				include('gallery_pr.php');
			?>
            
            </div> <!--row 1 ends here -->
            
       </div><!--Container ends here-->
       
       
       		<?php
			
				include('feedback.php');
				include('footer.php');
			?>
            
            

</body>


</html>
