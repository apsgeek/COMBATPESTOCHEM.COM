<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Combat Pestochem | CV</title>
<!--<link rel="stylesheet" href="css/bootstrap.css">

<link rel="stylesheet" href="css/bootstrap-responsive.css">

<link rel="stylesheet" href="css/bootstrapL.css">-->

<!--<script type="text/javascript" src="js/jquery-2.1.1.js"></script>-->
<!--<script type="text/javascript" src="js/bootstrap.js"></script>-->


<script type="text/javascript">
$(document).ready(function(){
	$("#career").on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);  // Button that triggered the modal
        var titleData = button.data('title'); // Extract value from data-* attributes
        $(this).find('.modal-title').text(titleData + ' Form');
    });
});
</script>
</head>

<body>

<!--<h3><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#career" data-title="CAREER">CAREER</button></h3>-->
<!-- Modal HTML -->
    <div id="career" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 >Career Form</h4>
                </div>
              	
                	<form id="myform" action="UploadFile.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
						<!--<table style="width:100%; height:100%; border:dotted; border-color: white; margin-top: 5%;" >
						<tr>
						<td style="width:50%">
						Select CV
						</td>
						<td>
						<input type="file" name="fileToUpload" id="fileToUpload">
						</td>
						</tr>
						<tr>
						<td>
						EmailID
						</td>
						<td>
						<input type="text" name="emailID" id="emailID" placeholder="xyz@example.com">
						</td>
						</tr>
						<tr>
						<td colspan="1">
						<input type="submit" value="Upload Image" name="submit">
						</td>
						</tr>
						</table>-->
                        
                        <div class="row">
                        <br>
                        	<div class="col-sm-6">
                        		<P style="text-align:center; margin:5px 0">UPLOAD YOUR CV:</P>
                         	</div>
                            <div class="col-sm-6">
                        		<P><input type="file" name="fileToUpload"  id="fileToUpload"></P>
                        	</div>
                        </div>
                        
                        <div class="row">
                        
                        	<div class="col-sm-6">
                        		<P style=" margin:5px 70px">EMAIL ID:</P>
                         	</div>
                            <div class="col-sm-6">
                        		<P style="margin:0 40px"><input type="email" name="emailID" id="emailID" placeholder="xyz@example.com" style="margin:2px 0;width:208px; height:30px"  ></P>
                        	</div>
                        </div>
                        <br>
                       
                        <div class="row">
                        	<div class="col-sm-12">
                        		<P style="margin:0 40px;"><input type="submit"  value="SUBMIT" name="submit" style="margin:20px 360px ;width:100px; height:30px"></P>
                         	</div>
                            
                        </div>
				 </form>
                </div>
            </div>
        </div>

  
</body>
</html>
