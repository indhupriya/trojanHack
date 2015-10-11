<?php

	require_once("dbDetails.php"); 
	
	$selectEvents = 'SELECT event_name from events;';
	$selectVEvents = 'SELECT event_name from events where event_category="viterbi";';
	$selectFEvents = 'SELECT event_name from events where event_category="freefood";';
	
	$allEvents = $conn->query($selectEvents);
	$VEvents = $conn->query($selectVEvents);
	$FEvents = $conn->query($selectFEvents);
	
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
   <link rel='stylesheet' href="./css/bootstrap.min.css">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
     body {
       padding-top: 70px;
     }
   </style>
   <title>Trojan Fever</title>
</head>
<body>
    <script src="./js/jquery-2.1.4.min.js"></script>
   <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container">
       <div class="navbar-header">
         <a href="/Index.html" class="navbar-brand">Trojan Fever</a>
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hamburger-navigation">
           <span class="sr-only">Events</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
       </div>
       <div class="collapse navbar-collapse" id="hamburger-navigation">
         <div class="navbar-text navbar-right">
           <a class="navbar-link" href="URL here">
             List your event+
           </a>
         </div>
         <ul class="nav navbar-nav" role="menu">
           <li><a href="#" class="active">Events</a><span class="sr-only">current</span></li>
           <li><a href="#">Browse</a></li>
           <li class="dropdown">
             <a class="dropdown-toggle" role="button" data-toggle="dropdown">More<span class="caret" /></a>
             <ul class="dropdown-menu">
               <li><a href="#">XXXX</a></li>
               <li><a href="#">YYYY</a></li>
             </ul>
           </li>
         </ul>
       </div>
     </div>
   </nav>

   <div class="container">
     <div class="row">
       <div class="col-md-10">
         <!-- Tabs -->
         <h2>Best new events, every day</h2>
         <ul class="nav nav-tabs" role="tablist">
           <li class="active"><a href="#allcategories" role="tab" data-toggle="tab">All Categories</a></li>
           <li><a href="#alltypes" role="tab" data-toggle="tab">Vitterbi Events</a></li>
           <li><a href="#free" role="tab" data-toggle="tab">Free Food</a></li>
         </ul>
       
         <!-- Tab content -->
         <div class="tab-content">
           <div class="active tab-pane fade in" id="allcategories">
            <!--accordian-->
             <div class="panel-group" id="accordian">
	             <div class="panel panel-default">
		            <div class="panel-heading">
			            <h4 class="panel-title">
				            <a data-toggle="collapse" data-parent="#accordian" href="#accordian-one">
					           Today Oct 11th
				            </a>
			           </h4>
		            </div>
		           <div id="accordian-one" class="panel-collapse collapse in">
			           <div class="panel-body">
			       	     <ul>
						 <?php
                            while($allEventsArray = $allEvents->fetch_assoc()) {
							//for ($i=0; $i < $allEventsArray->num_rows(); $i++){
							 echo '<li><a href=eventinfo.php>'.$allEventsArray["event_name"].'</li>';
							}	
						?>
						</ul>
			           </div>
		           </div>
	            </div>
              
             </div>
           </div>
          <!--accordian-->
          <!--accordian-->
           <div class="tab-pane" id="free">
          <!--accordian-->
             <div class="panel-group" id="accordian">
	             <div class="panel panel-default">
		            <div class="panel-heading">
			            <h4 class="panel-title">
				            <a data-toggle="collapse" data-parent="#accordian" href="#accordian-one">
					           Today Oct 11th
				            </a>
			           </h4>
		            </div>
		           <div id="accordian-one" class="panel-collapse collapse in">
			           <div class="panel-body">
			       	     <ul>
                    <?php
                            while($allEventsArray = $FEvents->fetch_assoc()) {
							//for ($i=0; $i < $allEventsArray->num_rows(); $i++){
							echo '<li><a href=eventinfo.php>'.$allEventsArray["event_name"].'</li>';
							}	
						?>
                   </ul>
			           </div>
		           </div>
	            </div>
             </div>
           </div>
          <!--accordian-->
           <div class="tab-pane" id="free">
            <!--accordian-->
             <div class="panel-group" id="accordian">
	             <div class="panel panel-default">
		            <div class="panel-heading">
			            <h4 class="panel-title">
				            <a data-toggle="collapse" data-parent="#accordian" href="#accordian-one">
					           Today Oct 11th
				            </a>
			           </h4>
		            </div>
		           <div id="accordian-one" class="panel-collapse collapse in">
			           <div class="panel-body">
			       	     <ul>
                    <?php
                            while($allEventsArray = $VEvents->fetch_assoc()) {
							//for ($i=0; $i < $allEventsArray->num_rows(); $i++){
							 echo '<li><a href=./eventinfo.php>'.$allEventsArray["event_name"].'</li>';
							}	
						?>
                   </ul>
			           </div>
		           </div>
	            </div>
             </div>
           </div>
          <!--accordian-->
           </div>
         </div>
       </div>
      
     </div>
   </div>
  
 <!-- content -->
 
   <script src="js/jquery-2.1.4.min.js"></script>
   <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <!-- <script src="bootstrap-3.3.5-dist/js/npm.js"></script>  -->
</body>
</html>
