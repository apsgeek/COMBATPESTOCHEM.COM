<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Combat Pestochem | Header</title>
<title>Combat Pestochem | Header</title>
<link rel="icon" type="image/png" href="img/logo/favicon.png"> <!-- Favicon -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrapL.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/index.css">

<script type="text/javascript">
		$(document).ready(function(){
			
			$("#myModal").on('show.bs.modal', function(event){
        	var button = $(event.relatedTarget);  // Button that triggered the modal
        	var titleData = button.data('title'); // Extract value from data-* attributes
        	$(this).find('.modal-title').text(titleData + ' Form');
    	});
	});
</script>

</head>

<body>
		
        

                <header>
                	
                    	<img src="img/logo/cp_logo.png" alt="logo" width="800" style="float:left">
      
            			<h3 class="thumbnail" style="color:#0066CC !important"  >Helpline Number: +91 7398912991</h3>
                        
                        <marquee direction="left" class="alert-block">
            			Careers:We are hiring for Technician, Marketing and Customer Executives for more details 
            			<a href="#" style="color:#F00; font-weight:bold;">Click here</a>
            			</marquee>

                </header><!--header end here-->
            
        
        <nav role="navigation" class="navbar navbar-default navbar-fixed-top" style="margin:154px 0;">
    		<div class="container-fluid">
        		<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a href="#" class="navbar-brand">Brand</a>-->
        </div><!--navbar-header ends here-->
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse thumbnail">
            <ul id="menuul" class="nav navbar-nav" style="color:#124DB4 !important">
            
            <style>
			
				#menuul li a{
				color:#124DB4; 	
					
				}

				#menuul li a:hover {
  					color: white ;
  					background-color:#124DB4;  ;
				} 
			
			</style>
                <li class=""><a href="index.php">HOME</a></li>
                <li><a href="service.php">SERVICES</a></li>
                <li><a href="pest_recognition.php">PEST RECOGNITION</a></li>
                <li><a href="career.php">CAREER</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="#" onclick="CPC.slideLeft();">ENQUIRY</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            	<style>
				
					.nav img{
						width:42px !important;
						padding:0 5px;
						margin:-15px 0;
						
					}
				
				</style>
            
                <li><a href="https://www.facebook.com/combat.pestochem" target="new"  style="display:inline">
                <img src="img/social/Facebook.png"></a></li>
            	<li><a href="https://twitter.com/combatpestochem" target="new" style="display:inline">
                <img src="img/social/Twitter.png" ></a></li>
            	<li><a href="https://in.linkedin.com/pub/combat-pestochem/91/786/a9a" target="new" style="display:inline">
                <img src="img/social/LinkedIn.png"></a></li>
            	<li><a href="https://www.youtube.com/channel/UCxO2rgmtQHAfsjmbPEnoD8g" target="new" style="display:inline">
                <img src="img/social/YouTube.png"></a></li>
            </ul>
        </div><!--navbarCollapse ends here-->
    </div><!--container-fluid ends here-->
</nav>
</body>

<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
</html>
