<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>News</title>
    <style>
	
	#news ul li{
		font-family:Verdana, Geneva, sans-serif;
		
		color:#FF0000;
	}
	
	</style>
   
  </head>
  <body>
   
	
	    			<div id="news">
	    				<ul id="nt-title" style=" width:250px;  height:50px; margin:0% 4% !important; list-style:none; 
                        font-size:15px; color:#FF0000">
		    				<li>
		    					We Are Hiring...!!!
		    				</li>
		    				<li>
		    					We Are Hiring...!!!
		    				</li>
		    				<li>
		    					We Are Hiring...!!!
		    				</li>
		    				<li>  
		    				    We Are Hiring...!!!
		    				</li>
	    				</ul>
	    			</div>
					 

	
	
	
	

	
   
   <script src="js/jquery-2.1.1.js"></script>
   <script src="js/jquery.newsTicker.js"></script>
    <script>
    		

    		
            var nt_title = $('#nt-title').newsTicker({
                row_height: 15,
                max_rows: 3,
                duration: 3000,
                pauseOnHover: 10
            });
           
        </script>

        
  </body>
</html>