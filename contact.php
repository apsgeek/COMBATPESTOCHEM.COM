<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Combat Pestochem | Contact</title>


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
		?>


		<div class="container-fluid" style="width:95%; margin:70px 35px !important"> 
        <!--container-fluid starts here-->
        
        	<div class="row"><!--row 1 starts here-->
            
            	<div class="col-lg-12 thumbnail"><!--col-lg-12 starts here-->
                
                	<p style="font-size:12px;font-weight:bold;color:#f00; text-align:center">
                	You can directly contact us for any service or enquiry without any hesitation. We are better on 
                	all information than any one else from this domain. So Better Call Combat Pestochem.
                    </p>
                
                </div><!--col-lg-12 starts here-->
                
                <div class="row" style="margin:0 30px !important"><!--row 2 starts here-->
            
            	<div class="col-lg-12 thumbnail" ><!--col-lg-12 starts here-->
                
                	<div id="contact"><!--contact starts here-->
                    
                    	<style>
						
						#contact{
							text-align:center;
							color:#f00;
						}
						
						
						
						</style>
                    
                    
                    	<h2>Head Office</h2>
                        <p>H.I.G-II, Jaurauli Phase - 2, Kanpur,Uttar Pradesh -208027</p>
                        
                        <h2>Corporate Office</h2>
                        <p>M-57,Apna Bazar, vibhuti Khand, Gomti Nagar, Lucknow, Uttar Pradesh - 226010</p>
                    
                    	<p>HelpLine Number: +91 7398912991</p>
                        <p>Mail Us: info@combatpestochem.com OR combatpestochem@rediffmail.com</p>
                        <p>Location: Lucknow India</p>

                    </div><!--contact ends here-->
                
                </div><!--col-lg-12 starts here-->
            
            </div><!--row 2 ends here-->
 
       </div><!--container-fluid ends here-->
       
       <?php
	   
	   	include('feedback.php');
		include('footer.php');
	   
	   ?>
            

</body>


</html>
