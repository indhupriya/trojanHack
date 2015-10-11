<?php
	
request_once("dbDetails.php")
	
$selectEvent = 'SELECT * from events where event_id = "110"';
$eventInfo = $conn->query($selectEvent);
$eventrow = $eventInfo->fetch_row();
$category = $eventInfo["event_category"];
$eventType = $eventInfo["event_type"];
$location = $eventInfo["event_loc"];
$desc = $eventInfo["event_desc"];
$link = $eventInfo["event_link"];

?>


<html>
<head>
	<title>Event Info</title
	<link rel='stylesheet' href='./styles/bootstrap.min.css' />	
</head>
<body>
	<div class="container">
				<h1>Event Profile</h1>
                <form role="form" class="form-horizantal" action="index.html" method="post">

                        <div class="form-group">
                                <label class="control-label col-md-3">Category:</label>
                                <label class="control-label col-md-9">$category</label>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-3">Event Type:</label>
                                <label class="control-label col-md-9">$eventType</label>
                        </div>

                        <div class="form-group">
                                <label class="control-label col-md-3">Location:</label>
                                <label class="control-label col-md-9">$location</label>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-3">Description:</label>
                                <label class="control-label col-md-9">$desc</label>
                        </div>
						 <div class="form-group">
                                <label class="control-label col-md-3">Link:</label>
                                <label class="control-label col-md-9">$link</label>
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
										<textarea></textarea>
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
