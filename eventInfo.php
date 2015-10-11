<?php
	
$category = "sgadsg";
$eventType = "asgads";
$location = "assdsh";
$desc = "asdhahh";
$link = "ahashash";
$eventName = "EVENT";
?>


<html>
<head>
	<title>Event Info</title
	<link rel='stylesheet' href='./styles/bootstrap.min.css' />	
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
</head>
<body>
	<div class="container">
				<h1>Event Profile</h1>
                <form role="form" class="form-horizantal" action="index.html" method="post">

                        <div class="form-group">
                                <label class="control-label col-md-3">Category:</label>
                                <label class="control-label col-md-9"><?php echo "$category" ?></label>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-3">Event Type:</label>
                                <label class="control-label col-md-9"><?php echo "$eventType" ?></label>
                        </div>
                        
                        <div class="form-group">
                                <label class="control-label col-md-3">Event Name:</label>
                                <label class="control-label col-md-9"><?php echo "$eventName" ?></label>
                        </div>

                        <div class="form-group">
                                <label class="control-label col-md-3">Location:</label>
                                <label class="control-label col-md-9"><?php echo "$location" ?></label>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-3">Description:</label>
                                <label class="control-label col-md-9"><?php echo "$desc" ?></label>
                        </div>
						 <div class="form-group">
                                <label class="control-label col-md-3">Link:</label>
                                <label class="control-label col-md-9"><?php echo "$link" ?></label>
                        </div>
                        <div class="form-group">
								<div class="col-md-6">
                                        <button type="btn" class="btn btn-success" name="back">Back</button>
                                </div>
                                <div class="col-md-6">
                                        <span class="glyphicon glyphicons-share-alt"><button type="btn" class="btn btn-success" name="FBPost"></button></span>
                                </div>
								
                        </div>
                    
                        <div class="form-group">
				<div class="col-md-12">
					<textarea rows="10" cols="50"></textarea>
				</div>
			</div>
						
			<div class="form-group">
				<div class="col-md-6">
                                        <button type="btn" class="btn btn-success" name="back">Submit</button>
                                </div>
                         
								
                        </div>

                </form>
		<script src='/scripts/jquery-2.1.4.min.js'></script>
        <script src='/scripts/bootstrap.min.js'></script>
				
</body>
</html>
