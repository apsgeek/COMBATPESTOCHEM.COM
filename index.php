<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Combat Pestochem | Home</title>
<!--<link rel="stylesheet" href="css/bootstrap.css">-->

<link rel="stylesheet" href="css/bootstrapL.css">


<!--<link rel="stylesheet" href="css/bootstrap-responsive.css">-->

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>


<style type="text/css">
h2{
    margin: 0;     
    color: #666;
    padding-top: 0px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
    /*background: #333;    */
    text-align: center;
    height: 280px !important;
}
.carousel{
   margin-top: 10px;
margin-top: 15px
}

.carousel-indicators{
	margin:-10px -4px;
	margin-left:192px !important;
	margin-top:260px !important;
}
.bs-exampl{
	width:560px;
	
	margin: 30px -5px;
}

.item img{
	
	width:600px;
}
</style>

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
		<div class="container-fluid" style="width:101%;">
        
        	<div class="row" style="margin:20px 0"><!--row 1 starts here-->
            
            	<div class="col-lg-4"><!--col-lg-4 1 starts here-->
                
                	<!--slider start -->
 		 		<div class="bs-exampl">
    				<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    					<!-- Carousel indicators -->
        				<ol class="carousel-indicators">
            				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            				<li data-target="#myCarousel" data-slide-to="1"></li>
            				<li data-target="#myCarousel" data-slide-to="2"></li>
             				<li data-target="#myCarousel" data-slide-to="3"></li>
              				<li data-target="#myCarousel" data-slide-to="4"></li>
              				<li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
        			  </ol>   
                      
        
        		  <!-- Carousel items -->
        		  <div class="carousel-inner ">
            		<div class="active item" >
                			<h2><img src="img/slider/01.png" alt="slide01"></h2>
         					<!--<div class="carousel-caption">
                  			<h3>Second slide label</h3>
                  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                			</div>--> <!--FOR CAPTION WE CAN USE -->
            		</div>
            	  
                  <div class="item">
                	<h2><img src="img/slider/02.png" alt="slide02"></h2>
                 </div>
            
           		 <div class="item">
                	<h2><img src="img/slider/03.png" alt="slide03"></h2>
           		 </div>
            
            	 <div class="item">
                	<h2><img src="img/slider/04.png" alt="slide04"></h2>
           	 	</div>
            
            	<div class="item">
                	<h2><img src="img/slider/05.png" alt="slide05"></h2>
            	</div>
            
            	<div class="item">
                	<h2><img src="img/slider/06.png" alt="slide06"></h2>
            	</div>
            
            	<div class="item">
                   <h2><img src="img/slider/07.png" alt="slide07"></h2>
            	</div>
            
        		</div>
        	 		<!-- Carousel nav -->
       				   <!--<a class="carousel-control left" href="#myCarousel" data-slide="prev">
            				<span class="glyphicon glyphicon-chevron-left"></span>
       					</a>
        				<a class="carousel-control right" href="#myCarousel" data-slide="next">
            			<span class="glyphicon glyphicon-chevron-right"></span>
       			 		</a>-->
   		 			</div>
				</div>
				<!--slider end -->
                
                
                </div><!--col-lg-4 1 end here-->
                
                <div class="col-lg-4" style="margin:43px 90px; text-align:center; "><!--Col-lg-4 2 starts from  here--> 		
               
                
                	<ul  style="list-style:none;" >
     					<li class="thumbnail" style="margin:7px 0; height:90px; width:300px;" >
     						<h4>Call Us</h4>
        					<p style="color:red;">24 * 7 Helpline Number +91 7398912991</p>
     			   		</li>
    
    			  		<li class="thumbnail" style="margin:7px 0; height:90px; width:300px;">
     						<h4 >Mail Us</h4>
        					<p style="color:red;">Email: info@combatpestochem.com</p>	
                  		</li>
    
    			 		<!--<li class="thumbnail" style="margin:7px 0;">
     						<h4>Enquiry</h4>
        					<p><a href="#myModal">Click Here</a> for Online Enquiry Form</p>
                  
     		    		</li>-->
    
     		    		<li class="thumbnail" style="margin:7px 0; height:90px; width:300px;">
     						<h4>Pest Recognition</h4>
        					<p style="color:red;">Recognize the troube creator <a href="#">Here</a></p>
     		   			</li>
    			</ul>

                
                
                </div><!--Col-lg-4 2 ends here-->
            
            	<div class="col-lg-4" style="margin:50px -200px; "> <!--col-lg-4 3 start here-->
                
                	<h3 class="thumbnail" style="background-color:#06C; color:#FFFFFF; margin:0px 60px; font-size:18px; 
                    text-align:center">
                    Welcome to Combat Pestochem</h3>
                    <br><br>
    				<p style="text-align:justify; color:#000000; font-size:13.2px;  width:460px; margin:-30px 0">We are here	 					to help you and your family. Through our research and analysis we come up with quality services. We are 	
                    providing our valuable services at very feasible cost in India market. We have well experinced team 	
                    staff to serve 	you. If you are tired of pest at home corners, kitchen and at various places or regular 
                    water leakage of your floor, Call CombatPestoChem. We have worked in many place with a satisfactory 
                    feedback of our client. We are provinding well maintained pest recognition document and equiry plugin to 					same page. We promise you for the 100% satisfaction and guranteed with on time service. We are the 
                    leading player in pest controlling in India Market.</p>
        			<br>
        			<p style="font-size:15px; text-align:center;color:#000000; width:480px; margin:20px -15px"><b>Wanna Get 	
                    Rid of Your Problems Better Call CombatPestochem.</b> </p>
        			<p style="font-size:20px; text-align:center;color:#000000; margin:-15px 0"><i>Thank you - "Founder"</i>
                    </p>

                </div><!--col-lg-4 3 end here-->
            
            
            </div><!--row one ends here-->
            
            <div class="row" style=" margin:-50px 10px; width:100%; height:140px;"> <!--row 2 starts here--->
            
            
            	<div class="col-lg-3"> <!--col-lg-3 1 starts here-->
                
                	<a href="Document/Pest Recognition V2.pdf" target="_blank">
                    <button type="button" class="btn" style="float:left; width:200px; height:50px; margin:5px 0px; 	
                    background-color:#06C; color:#FFF; font-weight:bold">
                    DOWNLOAD<p>PEST DOCUMENT</p>
                    </button></a>  
                
                </div><!--col-lg-3 2 ends here-->
                
                <div id ="collg3_2" class="col-lg-3 thumbnail"   style=" height:140px; margin:-40px -80px;"><!--col-lg-3 2 starts here-->
                	<style>
					
					 #collg3_2 p{
						 color:#ED1417;
						 font-size:12px;
					 }
					
					</style>
                	<h2 style="color:#003366; text-align:center; margin:-5px 0; " >News and Events</h2>
                    <marquee direction="up" style=" margin:5px 0; height:70px;">
                    <p> We are working on various residential or commercial sites.</p>
                    </marquee>
                
                </div><!--col-lg-3 2 ends here-->
                
                <div class="col-lg-3 thumbnail"   style=" height:140px; margin:-40px 100px;"> 
                <!--col-lg-3 3 starts here-->
                
                	<h2 style="text-align:center; color:#003366;margin:-5px 0" >Gallery</h2>
                                        
                     <a href="gallery.php" target="new" style="text-decoration:none;">
                     <img src="img/gallery_img.gif" width="70px" style="margin:10px 120px">
                     </a>
                
                </div> <!--col-lg-3 3 ends here-->
                
                <div class="col-lg-3 thumbnail" style="margin:-40px -80px; height:140px"> <!--col-lg-3 4 starts here-->
                
                	<h2 style="text-align:center; color:#003366; margin:-5px 0" >Offers</h2>
                                        
                    <p style="text-align:center; color:#ED1417; margin:30px 0"> 10% off, The New Year Off</p>
                
                
                </div> <!--col-lg-3 4 ends here-->
            
            </div><!--row 2 ends here--->
            
            
        
        
        
        </div><!--Container fluid ends here-->

    <?php
	
		include('feedback.php');
		include('footer.php');
	
	?>

</body>

<script type="text/javascript" src="js/bootstrapL.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>

</html>
