<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<div id="feedback" style="position: fixed; top:35%; left:-362px; background-color: #2A68D7;
			                   color:white; float: left; border: 1px solid #999; padding: 10px;
			                   border-radius:5px;">
		    <form id="myform" action="EquirySent.php" method="post" enctype="multipart/form-data" onsubmit="return 
            validateForm()">
				<table>
				  
				    <tr>
    				<td colspan="2" style="text-align: center; font-size: 25px;">Enquiry Form</td>     				
    				</tr>
    				
    				<tr>
    				<td colspan="2" style="text-align:right; width: 300px;">
    				  <a href="#"><img src="img/close.png" style="width:30px; height:30px; transform: rotate(180deg);" 	
                      onClick="CPC.slideRight();"/></a>
    				  <br/>
    				</td>       				
    				</tr>
    				<tr>
    				<td colspan="2" style="text-align: center; ">&nbsp; </td>     				
    				</tr>
    				    				    				
    				<tr>
    				<td>Name:</td>
     				<td><input type="text" name="name" ID="name"/></td>
    				</tr>
    
    				<tr>
    				<td>Contact:</td>
    				<td><input type="text" name="contact" ID="contact" /></td>
    				</tr>
    
    				<tr>
    				<td>Email:</td>
     				<td><input type="email" name="emailID" ID="emailID" /></td>
    				</tr>
    
    				<tr>
   	    			<td>City:</td>
    				<td><input type="text" name="city" ID="city" /></td>
        			</tr>
                    
                    <tr>
                    <td> Query: </td>
                    <td><input type="text" name="query" id="query" style=" height: 100px;"/></td>
                    </tr>
                    
                    <tr>
   	    			<td></td>
    				<td style="color: black"><input type="submit" name="send" id="send" /> <input type="reset" name="reset" 
                    id="reset" /></td>
        			</tr>
                    
        			
                    </table>
			</form>
	</div><!--feedback ends here-->


</body>
</html>