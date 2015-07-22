<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Combat Pestochem | Service</title>

<!--<link rel="stylesheet" href="css/bootstrapL.css">
<link rel="stylesheet" href="css/bootstrap-responsiveL.css">
<link rel="stylesheet" href="css/index.css">-->
 


<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">-->

<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<!--<script type="text/javascript" src="js/bootstrap.js"></script>-->
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


<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement:'right'
    });
});
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


		<div class="container thumbnail" style="border:2px groove #06C; padding:-2px 0; margin:80px 90px; ">
        
        	<div class="col-lg-6" class="thumbnail" style="text-align:center"><!--col-lg-6 1 starts here-->
            
            	<h2 style="background-color:#06C; color:#FFFFFF">PEST CONTROL</h2>
                
                <p style="font-size:14px; color:#f00">
                We do provide almost all types of pest controlling. Most relative are mentioned below
                </p>
                
                <ul id="tt"  style="list-style:none; text-align:left; font-size:20px; margin:0 2px; ">
                	
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="We use the latest DRILL-FILL-SEAL technique to form a barrier against termites. 
                    This method is quick non-messy and completely safe. It makes a completely undectable chemical barrier 
                    around your property assuring you of continuous protection. We also treat infested woodwork with 
                    chemicals to kill termites and protect it from further attacks.">Termite Proofing</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="we generally recommend that all timbers in a home to be treated before assembly. 
                    It is much cheaper to treat preventively and of course it is also much less labor intensive. For active 
                    Wood Borer infestation we go for Spraying and Brushing treatment by using most effective and 
                    eco-friendly chemicals. At times we have to inject chemical into the tiny short holes with the help of 
                    syringe to kill lavages in the woods, which keep on destroying the wooden furnishings and furniture.">	
                    Wood Preservation</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="Fumigates, stores-grains-pest, Export commodities, Pharmaceutical and Food 
                    processing plants, Laden Cargo Vessels etc. by using modern methods including vacuum Fumigation. ">
                    Fumigation</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="A newly developed process for sterilizing Heat-sensitive equipment and rendering in                    aseptic Atmosphere in food processing and pharmaceutical plants, hospitals within 6 hours. ">St
                    erilisation</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="Rodent such as rats and mice are well known for carrying the plague. It becomes 
                    extremely necessary, then, to keep them at a good distance from us. Our rat control operates on two 
                    levels:1. Elimination of existing rats
					2. Preventing future infestation ">Rodent Control</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="Skilled professional treatment to control the Cockroaches, Ants, Bed-Bugs, 
                    Sliver-Fish, spider, ticks, mites etc. in residential and Industrial premises. ">Household and 
                    Industrial Desinfestation</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="In case of Mosquito and Flies control services, we provide the best and most 
                    effective procedures possible, which would not only cure the place of any kind of mosquito infestation, 
                    but would also prevent any more such infestations from recurring. Our use of the right kind and quantity 					of insecticides and pesticides creates an environment where mosquitoes would find it extremely difficult 					to thrive and multiply. ">Vector Control</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="Lizard belongs to Reptiles groups, their presence in the house, hospitals, food 	
                    packing units etc. causing irritation and nuisance and affect the hygiene of the premises. Our methods 
                    of lizard control provide you with a lizard-free environment. Our methods include not only removing the 
                    lizards present in your household area, but also preventing their return. ">Lizard Control</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="Museums, Wool and Fabric handling and processing Establishment shops and House 
                    Holds are constantly tormented by the time Larvae of fabric-Pest like CARPET BEETELS & CLOTHE MOTH. Our 
                    special Treatment protects it for a longer period ">Carpet Treatment</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="Eliminate unwanted plants, shrubs & long grasses from in and around Establishment 	
                    to reduce risks in term of fire, corrosions and Enables better maintenance.">Weed Management</a></li>

                </ul>

            </div> <!--col-lg-6 1 ends here-->
             
            <div class="col-lg-6" class="thumbnail" style="text-align:center"> <!--col-lg-6 2 starts here-->
            
            	<h2 style="background-color:#06C; color:#FFFFFF">WATER PROOFING</h2>
             	
               
                <p style="font-size:14px; color:#f00">We do provide almost all types of Water Proofing. Most relative are 	
                mentioned below
                </p>
            	
                 <ul id="tt1"  style="list-style:none; text-align:left; font-size:20px; margin:0 2px; ">
                	
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="We are one of the highly acclaimed services providers offering highly admirable and 					affordable Roof Water Proofing System, which enable our customer to protect their precious building, 	
                    domestic, official or industrial from all kinds of sealing problem like crack in the walls, water 
                    leakage, etc, add new innovative technique to satisfy the customer.">
                    Roof Water Proofing</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="We are specialized in Waterproofing of Terraces. It is high in standards that meet 
                    international quality norms. Our company supplies it with the great care for the best performance of the 					products. We take care of all pre-requisites before undertaking the Waterproofing of Terrace. These 	
                    Water Proofing services are the most reliable and offer great satisfaction to the customers. We offer 
                    these services as per requirements and need of customer at affordable price range.">
                    Terrace Water Proofing</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="Waterproofing of Basement Area is another especially at COMBAT PESTOCHEM. We 
                    evaluate the problem, find out what could be the best opinion for your Basement and then begin our Water 					Resistant Basement Service for perfect results. We are one of the highly established companies offer 	
                    customers oriented Waterproofing Basement Area according to needs and requirements of the customers at 
                    reliable prices. Our highly skilled professional work hard to provide better service of Water Resistant 
                    Basement.">Basement Water Proofing</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="This is a very common and seemingly incurable problem especially in areas with high 					ground water tables. Even where the water table is not high, this problem is assuming alarming 	
                    proportions due to the ingress of surface water (rain as well as irrigating water) into the soil. People 					have gone to the extent of providing tiles/marble stone on the walls to hide the recurring appearance of 					dampness/ efflorescence. We at COMBAT PESTOCHEM provide a permanent and cost effective solution for 	
                    this, which not only prevents ingress of water but also provides additional strength to the walls and a 	
                    moisture free healthy living environment.">D.P.C Failure</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="We are highly contractor and services provider constructing elegant Waterproofing 	
                    of Swimming Pools.Our Swimming Pool waterproofing is undertaken by well-qualified and experience with at 					most care. This Waterproofing System is highly reliable in purity, durable in performance and highly 	
                    economic in prices, in the nutshell we are offering the complete satisfaction of the customers. Our 	
                    professionals keep their eyes on the latest trend of market to offer these products according to demand 	
                    and trends of markets.">Swimming Pool Water Proofing</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="Under Ground Tank Water Proofing: We are leading services provider and contractor 				
                    of Underground Tank Waterproofing. That is available at highly economic prices to gratify the customers. 					Our well experienced professionals who are highly familiar with these types of Water Proofing. Our 
                    experienced professionals are capable to offer Waterproofing Sump Installation meeting international 	
                    quality standards as per requirements of the customers.">
                    Under Ground Tank Water Proofing</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="These waterproofing Overheads Tanks are leakage free and save your building from 
                    damp or moisture due to leakage of water from overhead tanks. Apart from supplying waterproofing tanks, 	
                    we also offer unbeatable service for Water Resistant Tanks. Our products and services for these tanks 	
                    are reliable and offer maximum performance.">
                    Over Head Tank Water Proofing</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="Shrinking spaces coupled with rising estate costs, prevent us from enjoying green 	
                    space. The remedy lies in creating green spaces on our terraces. These green tops give us the added 	
                    benefit of keeping the roof cool. However the danger of leakage through such green top terrace gardens 
                    prevents many people from going in for such roof top gardens. We have developed cost effective 
                    specification to treat terrace garden effectively. We do not only provide waterproofing treatment for 
                    such terraces, we also provide complementary advice on drainage related aspects of such gardens.">
                    Terrace Garden Water Proofing</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="A structural crack is some that is seen on the structures of the buildings. These 	
                    buildings may be offices, schools, hospitals, government buildings, homes, malls etc. The structural 
                    crack repair means to repair and fix such structural cracks in the buildings.">
                    Structural Crack Repair</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="We are a renowned name in offering quality services for anti-corrosion coatings. 
                    Our anti corrosive coatings are used as protective coating in the industry. These protect metal 
                    substrates from severe adverse conditions such as corrosion.">
                    Anti Corrosive Coating</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="The technically advances and dependable Expansion Join System offered by us meet 			
                    the demands of our most disceming clients. Our team of qualified engineers and architects makes use of 	
                    advances and sophisticated software to design the blueprints for all projects. Their designing skills 	
                    enable us to reconstruct and build various buildings, which include residential and commercial 
                    structures. Further our prolong expertise lead us to offer our clients with superior Polyethylene 
                    Foam Sheets and Backup Rods. We make use of quality material in te construction process, which is 	
                    procured from trusted vendors.">
                    Expansion Joint Treatment</a></li>
                    
                    <li class="thumbnail"><a href="#" data-toggle="tooltip" 
                    data-original-title="Epoxy Flooring And Coating: Epoxy coating are seamless floor coating which are 
                    hardwearing, abrasion resistant, antifingal, antibacterial and high degree cleanliness, available in 	
                    wide range of attractive color having excellent mechanical and chemical properties and provide floors 	
                    that are tough and long lasting">
                    Epoxy Flooring and Coating</a></li>

                </ul>
                
            </div><!--col-lg-6 2 ends here-->
        
        
        
        </div><!--container ends here-->
        
       <?php
	   
	   	include("feedback.php");
	    include('footer.php');
	   ?>
  
</body>


</html>
