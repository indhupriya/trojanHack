<?php

require_once("dbDetails.php");
$selectEvent = 'SELECT * from events where event_id = 1110';
$eventInfo = $conn->query($selectEvent);
$eventrow = $eventInfo->fetch_assoc();
$category = $eventrow["EVENT_CATEGORY"];
$location = $eventrow["event_loc"];
$desc = $eventrow["EVENT_DESC"];
$link = $eventrow["EVENT_URL"];

?>


<html>
<head>
	<title>Event Info</title
	<link rel='stylesheet' href='./styles/bootstrap.min.css' />	
         <link rel='stylesheet' href="./css/bootstrap.min.css">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


  
</head>
<body>

	<div class="container">
				<h1>Event Profile</h1>
                <form role="form" class="form-horizantal" action="index.html" method="post">

                        <div class="form-group">
                                <label class="control-label col-md-3">Category:</label>
                                <label class="control-label col-md-9"><?php echo"$category" ?></label>
                        </div>
                       
                        <div class="form-group">
                                <label class="control-label col-md-3">Location:</label>
                                <label class="control-label col-md-9"><?php echo"$location" ?></label>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-3">Description:</label>
                                <label class="control-label col-md-9"><?php echo"$desc" ?></label>
                        </div>
						 <div class="form-group">
                                <label class="control-label col-md-3">Link:</label>
                                <label class="control-label col-md-9"><?php echo"$link" ?></label>
                        </div>
                        <div class="form-group">
								<div class="col-md-6">
                                        <button type="btn" class="btn btn-success" name="back">Back</button>
                                </div>
                                <div class="col-md-6">
                                        <button type="btn" class="btn btn-success" name="FBPost"><span class="glyphicon glyphicons-share-alt" style="vertical-align:middle"></span></button>
                                </div>
								
                        </div>
						<div class="form-group">
								<div class="col-md-9">
										<textarea rows="07" cols="35"></textarea>
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
