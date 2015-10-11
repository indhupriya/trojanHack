<?php
	
$category = "sgadsg";
$eventType = "asgads";
$location = "assdsh";
$desc = "asdhahh";
$link = "ahashash";

?>


<html>
<head>
	<title>Event Info</title>
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
                                        <button type="btn" class="btn btn-success" name="FBPost">Share on Facebook</button>
                                </div>
								<div class="col-md-6">
                                        <button type="btn" class="btn btn-success" name="TwitterPost">Share on Twitter</button>
                                </div>
                        </div>

                </form>
</body>
</html>
