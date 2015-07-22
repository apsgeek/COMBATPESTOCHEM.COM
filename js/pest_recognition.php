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

<script type="text/javascript" src="js/jquery.min.js"></script>



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
            },
            makeVisible: function(e)
            {
                var str0="#";
            	var str1=$(e).attr('id');
            	var n = str0.concat(str1);
            	var str2 = "_C";
            	n = n.concat(str2);
            	$(n).css("visibility","visible");
            	return false;
            },
            makeHidden: function(e)
            {
            	var str0="#";
            	var str1=$(e).attr('id');
            	var n = str0.concat(str1);
            	var str2 = "_C";
            	n = n.concat(str2);
            	$(n).css("visibility","hidden");
            	return false;
            }
        }
	</script>



</head>

<body>
		<?php
			include('header.php');
		?>


<style>

	#pc img{
		width:200px;
		height:166px;
	}

</style>
		<div id="pc" class="container " style="text-align:center; border:2px #06C groove; padding:2px 10px">
        
        	<h2 style=" color:#06C; text-align:center">Pest Recognition</h2>
            <br>
            <p style="text-align:center">Here you can know your pest, what are they and how can they harm you !!! </p>
            
            <div class="row"> <!--row 1 start -->
            
            	<div class="col-md-3 ">
            
            		<img src="img/pest/bedBug.png" alt="bedBug.png">
                    <a id="BEDBUG" href="#" onclick="CPC.makeVisible(this);">Bed Bug</a>
                    
                    <div class="row"><!--inner row 1 start here-->
                    	
                        <p>Bed Bug</p>
                    
                    </div><!--inner row 1 end here-->

                </div>
                
                <div class="col-md-3 ">
            
            		<img src="img/pest/cockroaches.png" alt="cockroaches.png">
                    
                    <div class="row"> <!--inner row 2 start here-->
                    	
                        <p>Cockroaches</p>
                    
                    </div><!--inner row 2 end here-->
                
                </div>
                
                <div class="col-md-3 ">
            
            		<img src="img/pest/rat.png" alt="rat.png">
                    
                     <div class="row"> <!--inner row 3 start here-->
                    	
                        <p>Rat</p>
                    
                    </div><!--inner row 3 end here-->
                
                </div>
                
                <div class="col-md-3 ">
            
            		<img src="img/pest/termites.png" alt="termites.png">
                    
                     <div class="row"> <!--inner row 4 start here-->
                    	
                        <p>Termites</p>
                    
                    </div><!--inner row 4 end here-->
                
                </div>
            
            </div> <!--Row 1 end here-->
            
            <br>
            <br>
            
            <div class="row"> <!--Row 2 start here-->
            
            	<div class="col-md-3 ">
            
            		<img src="img/pest/redBlackAnt.jpg" alt="redBlackAnt.jpg">
                    
                     <div class="row"> <!--inner row 5 start here-->
                    	
                        <p>RedBlack Ant</p>
                    
                    </div><!--inner row 5 end here-->

                </div>
                
                <div class="col-md-3 ">
            
            		<img src="img/pest/redSpider.jpg" alt="redSpider.jpg">
                    
                     <div class="row"> <!--inner row 6 start here-->
                    	
                        <p>Red Spider</p>
                    
                    </div><!--inner row 6 end here-->
                
                </div>
                
                <div class="col-md-3 ">
            
            		<img src="img/pest/silverFish.jpg" alt="silverFish.jpg">
                    
                    <div class="row"> <!--inner row 7 start here-->
                    	
                        <p>SilverFish</p>
                    
                    </div><!--inner row 7 end here-->
                
                </div>
                
                <div class="col-md-3 ">
            
            		<img src="img/pest/earthWorm.jpg" alt="earthWorm.jpg">
                    
                    <div class="row"> <!--inner row 8 start here-->
                    	
                        <p>EarthWorm</p>
                    
                    </div><!--inner row 8 end here-->
                
                </div>
            
            
            </div> <!--Row 2 end here-->
            
            	

        
        </div>
        
        <div id="BEDBUG_C">
		<a id="BEDBUG" href="#" onclick="CPC.makeHidden(this)">Hide</a>
		    <br/>	
		    <br/>
	        Scientific name: Cimex lectularius<br/>
			Higher classification: Cimicidae<br/>
			Rank: Species<br/>
			Dwellings/Humans can become infested with bed bugs in following ways<br/><br/>
			
			1. Come in from other infested dwellings on a visiting person's clothing or luggage.<br/><br/>
			2. Infested items are furniture, clothing, or backpacks  etc brought in.<br/><br/>
			3. Nearby dwellings or infested items, if easy routes are available for travel, e.g. through ducts or false ceilings.<br/><br/>
			4. Wild animals  such as bats or birds that may also bring bed bugs or related species such as the bat bug.<br/><br/>
			5. People visiting an infested area  e.g. dwelling, means of transport, entertainment venue, or lodging and carrying 
			the bugs to another area on their clothing, luggage, or bodies. Bedbugs are increasingly found in air travel.			
			<br/>			
	        
	</div>
	
	<div id="RAT_C">	
	        <a id="RAT" href="#" onclick="CPC.makeHidden(this)">Hide</a>
	        <br/>
	        <br/>
	        Scientific name: Rodentia (Rat)<br/>
		    Rank: Order<br/>
		    Higher classification: Euarchontoglires<br/><br/>
		    
			Dwellings/Humans can become affected with Rodent in following ways<br/><br/>
			
            1. Rodents are also known carriers of many diseases and prove a health hazard to humans.<br/><br/>
            2. Rodent populations grow quickly and steadily.The house mouse is remarkably well-adapted
            for living year-round in homes, food establishments and other structures.<br/><br/>
            3. Food, clothing, furniture, books and many other household items are contaminated by their droppings and 
            urine, or damaged by their gnawing  House mice gnaw through electrical wiring causing 
            fires and failure of freezers, clothes dryers and other appliances.Mice also can transmit
            diseases, most notably salmonellosis (bacterial food poisoning) when food is contaminated
            with infected rodent feces.
            <br/>			
	        
	</div>
	
	<div id="COCKROACHES_C">	
	        <a id="COCKROACHES" href="#" onclick="CPC.makeHidden(this)">Hide</a>
	        <br/>
	        <br/>
	        Scientific name: Blattaria<br/>
		    Rank: Order<br/>
		    Higher classification: Exopterygota<br/><br/>


           Dwellings/Humans can become affected with Cockroache in following ways<br/><br/>
           1. The Asthma and Allergy Foundation of America reports that 78 to 98 percent of urban homes
           have cockroaches with as many as 900 to 330,000 cockroaches per home!<br/><br/>
           2. Cockroaches have many negative consequences for human health because certain proteins (called allergens) found in
           cockroach feces, saliva and body parts can cause allergic reactions or trigger asthma symptoms,
           especially in children.<br/><br/>
           3. Cockroaches can also passively transport microbes on their body surfaces
           including pathogens that are potentially dangerous to humans.<br/><br/>
           4. Cockroaches have been implicated in the spread 33 kinds of bacteria, including E. coli and Salmonella species, six parasitic worms
           and more than seven other types of human pathogens.<br/>
			
	       
	</div>
	
	<div id="TERMITES_C">	
	    <a id="TERMITES" href="#" onclick="CPC.makeHidden(this)">Hide</a>
	        <br/>
	        <br/>
        Scientific name: Termitoidae<br/>
		Higher classification: Cockroach<br/>
		Lower classifications: Termopsidae,  Rhinotermitidae<br/><br/>

       Dwellings/Humans can become affected with Termite  in following ways<br/><br/>
       1. If termites are found during the removal of a tree it is preferable to stop the removal
       until the termites are identified and treated, if appropriate.<br/><br/>
       2. If it is not safe to leave the tree in place, remove all except the stump so that it can be used as a treatment and monitoring site.<br/><br/>
       3. All trees containing termites should be considered unsafe in the long-term because they affect the heartwood
       of the trunk and often damage the roots. <br/><br/>
       4. This damage is difficult to measure and even trees with seemingly little damage can suddenly fall because of damage to the roots below the ground.<br/><br/>
       5. A termite infestation can do serious damage to your home and its value.<br/><br/>
       6. Any real estate professional will tell you that an infestation can greatly impact the value of a home.<br/>			
	   
	</div>
	<div id="ANT_C">	
	    <a id="ANT" href="#" onclick="CPC.makeHidden(this)">Hide</a>
	        <br/>
	        <br/>
        Scientific name: Formicidae<br/>
		Higher classification: Vespoidea<br/>
		Lower classifications:  Leptanillinae, Myrmicinae, Ectatomminae, more<br/><br/>

        Dwellings/Humans can become affected with ANT in following ways<br/><br/>
       
        1. Some ant species are considered as pests.<br/><br/>
        2. The presence of ants can be undesirable in places meant to be sterile.<br/><br/>
        3. They can also come in the way of humans by their habit of raiding stored food,
        damaging indoor structures, causing damage to agricultural crops either directly
        or by aiding sucking pests or because of their stings and bites.<br/><br/>
        4. The adaptive nature of ant colonies make it nearly impossible to eliminate
        entire colonies and most pest management practices aim to control local populations
        and tend to be temporary solutions<br/><br/>
        5. Some of the ants classified as pests include the pavement ant, yellow crazy ant,
        sugar ants, the Pharaoh ant, carpenter ants, Argentine ant, odorous house ants, red
        imported fire ant, and European fire ant.<br/><br/>
        6. Ant populations are managed by a combination of approaches that make use of chemical,
        biological and physical methods. <br/>			
	   
	</div>
	<div id="SPIDER_C">	
	    <a id="SPIDER" href="#" onclick="CPC.makeHidden(this)">Hide</a>
	        <br/>
	        <br/>
        Scientific name: Tetranychus urticae<br/>
		Higher classification: Latrodectus<br/>
		

        Dwellings/Humans can become affected with SPIDER  in following ways<br/><br/>
       
        1. SPIDERS living in warmer urban environments are getting significantly bigger than
        their country cousins, who have less prey to choose from and expend more energy keeping
        warm.<br/><br/>
        2. It is well known that spiders have multiple eyes, but not all species are the same.
        In fact, the number of eyes range from eight to zero, most common spiders have only 6,
        while some cave dwelling species have no eyes at all.<br/><br/>
        3.Some people who have a penicillin allergy can have a bad reaction to a spider bite that
        normally would not have an effect on people. The spider's web is made up of the same
        compound as penicillin and so penicillin is found through out a spider's body<br/><br/>
        4.  Many skin disorders and medical conditions can produce lesions that can also mimic a
        brown recluse spider bite. 
        <br/>			
	   
	</div>
	<div id="SILVERFISH_C">	
	    <a id="SILVERFISH" href="#" onclick="CPC.makeHidden(this)">Hide</a>
	        <br/>
	        <br/>
        Scientific name: Lepisma saccharina<br/>
        Rank: Species<br/>
		Higher classification: Lepisma<br/>
		<br/><br/>
		

        Dwellings/Humans can become affected with Silver Fish in following ways<br/><br/>
       
        1.Silverfish are considered household pests, due to their consumption and destruction of 
        property.However, although they are responsible for the contamination of food and other
        types of damage, they do not transmit disease<br/><br/>
        2. Silverfish are not harmful to humans and their bite is not strong enough to penetrate 
        human skin. In fact, many of the bites attributed to a silverfish are those made by the 
        house centipede, which is commonly found within the same habitat and looks similar.<br/><br/>
        <br/>			
	   
	</div>
		<div id="EARTHWORM_C">	
	    <a id="EARTHWORM" href="#" onclick="CPC.makeHidden(this)">Hide</a>
	        <br/>
	        <br/>
        Scientific name: Lumbricus terrestris<br/>
        Rank: Species<br/>
		Higher classification: Lepisma<br/>
		<br/><br/>
		

        Dwellings can become affected with Termite  in following ways<br/><br/>
       
        1.Silverfish are considered household pests, due to their consumption and destruction of 
        property.However, although they are responsible for the contamination of food and other
        types of damage, they do not transmit disease.<br/><br/>
        2. Silverfish are not harmful to humans and their bite is not strong enough to penetrate 
        human skin. In fact, many of the bites attributed to a silverfish are those made by the 
        house centipede, which is commonly found within the same habitat and looks similar.<br/><br/>
        <br/>			
	   
	</div>
	
        
		
  
</body>


</html>
