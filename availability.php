<!DOCTYPE html>
<html lang="en">
<head>
<title>Live Bus</title>
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="css/style-new.css" type="text/css" media="all" /> 
<style>
#apend {
    background-color: rgb(210, 209, 209);
    margin: 24px auto;
    min-height:300px;
    border-radius: 90px 90px 0 0;
    box-shadow: inset 0 0 5px 1px rgb(24, 22, 22);
    width: 300px;
}
.driver {
    width: 100%;
    height: auto;
    position: relative;
    float: left;
    text-align: right;
}
.driver img {
    width: 49px;
    margin-right: 47px;
    margin-top: 24px;
    margin-bottom: 25px;
}
#apnd1 {
   width: 100%;
    float: left;
	height: auto;
}
#apnd
{
	float:right;
	width:100%;
}
.bus_seats {
   padding: 8px 5px;
    width: 50px;
    float: left;
}
.demo-full-box {
    display: inline-block;
    margin: 0px auto;
	padding: 2px 0;
    width: 100%;
}
	
</style>
<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
</head>

<script type="text/javascript">

	$(document).ready(function()
			{
							$.getJSON("availabilityaction.php?bus=can",function(json)
        							{
										for(var i=0;i<=json.length;i++)
										{
											var seatno=json[i].seatno;
											var source=json[i].source;
											var destination=json[i].destination;
											var scheduleno=json[i].scheduleno;
											
											$("#ap").append('<tr>'+
															'<td>'+scheduleno+'</td>'+
															'<td>'+seatno+'</td>'+
															'<td>'+source+'</td>'+
															'<td>'+destination+'</td>'+
															'<td><button type="button" class="btn btn-danger dd" data-value="'+scheduleno+'" data-val="'+seatno+'">Cancel</button></td>'+
														'</tr>');
										}
									});
									
							$(document).on("click",".dd",function()
								{
									var btn_id=$(this).attr('data-value');
									var bt_id=$(this).attr('data-val');
									
									$.getJSON("availabilityaction.php?bus=del&btn_id="+btn_id+"&bt_id="+bt_id,function(json)
										{
											 var msg=json[0].msg;
											 if(msg=="success")
											 {
												 alert("deleted");
												// window.location('availability.php');
											 }
											else
											{
												alert("something error...");
											}
										});
									
								});	
									
				
				var stop_id=[],stop_stopname=[];
				$("#kik").click(function()
						{
							$("#apnd").html('');
							var busno=$("#busno").val();
							var datepicker=$("#datepicker").val();

							if(busno==""||datepicker=="")
							{
								alert("please enter all fields");
							}
							else
							{
								//alert("availabilityaction.php?bus=b&busno="+busno+"&datepicker="+datepicker);
								$.getJSON("availabilityaction.php?bus=b&busno="+busno+"&datepicker="+datepicker,function(json)
										{
											var msg = json[0].msg;
											if(msg=='success'){
        									var seats = json[0].seats;
        									var seats_arrangement = seats-6;
											//alert(seats_arrangement);
											var seats_arrangement_nos =Math.round(seats_arrangement/5);
											var total_rows=seats_arrangement_nos+1;
											var vacant = seats_arrangement%5;
											width= 100/total_rows;
											width = width+"%";
											//alert(width);
											
											//alert(total_rows+""+vacant);
        									$("#seats").text(seats);
											
        									//getbus(busno);
											
											
											
											$.getJSON("availabilityaction.php?bus=a&busno="+busno,function(json)
    										{
    												var source= json[0].source;
    												var destination= json[0].destination;
    												var datepicker= json[0].datepicker;
    												var scheduleno= json[0].scheduleno;
        											//alert(scheduleno);
        											
    												$("#source1").text(source);
    												$("#imaginary_dragons").val(scheduleno);
    												$("#destination1").text(destination);
    												$("#datepicker1").text(datepicker);
    												$("#scheduleno").text(scheduleno);
        											
    											//getno(scheduleno);

										$.getJSON("viewscheduleaction.php?act=give&scheduleno="+scheduleno,function(json)
												{
														for(var i=0;i<json.length;i++)	
		        										{
															stop_id.push(json[i].id);
															stop_stopname.push(json[i].stopname);
															var scheduledtime= json[i].scheduledtime;
															var actualtime= json[i].actualtime;
		        										}
												});	


											//alert($("#imaginary_dragons").val());
        									alert("Click OK to Continue...");
        									var shdleno=$("#imaginary_dragons").val();
        									//alert(shdleno);
        									
        									//getshno(shdleno);
											
											
											$.getJSON("availabilityaction.php?bus=no&shdleno="+shdleno,function(json)
											{
												//alert(json[0].seatno);
												var msg= json[0].msg;
												var seat_list =json[0].seatno;
												var dt=$("#seats").text();
												
												
												/*if(seat_list!="")
												{	
													alert(seat_list.length);
												}
												else
												{
													$("#aseats").text(dt);
												}*/
												
	        									//var dt=$("#seats").text();
	        									//alert(dt);
	        									//var avicci=parseInt(dt)-parseInt(seat_list.length);
	        									//alert(avicci);
	        									//$("#aseats").text(avicci);
												var seats=$("#seats").text();
												var z="";
											if(msg=="success")
												{
												  var avicci=parseInt(dt)-parseInt(seat_list.length);
	        									  $("#aseats").text(avicci);
    												for(var i=1;i<=seats;i++)
    												{
        													z="";
        												jQuery.each(seat_list, function(x,val)
        												 {
           												 	//alert(i+"SS"+val);
        		        									if(i==val)
        		        									{
        			        									z="success";
        			        									//alert(z);
        			        									//return false;
        		        									}					
        												});	
        												//alert(z);
        												if(z=="success")
        	        									{
															if(i%5 == 3)
															{
																$("#apnd").append('<div class="bus_seats"></div>');
																$("#apnd").append('<div class="bus_seats"><div class="badge-danger demo-full-box"  id="'+i+'">'+i+'</div></div>');
															}
															else{
																
        		        									$("#apnd").append('<div class="bus_seats"><div class="badge-danger demo-full-box"  id="'+i+'">'+i+'</div></div>');
															}
															
        	        									}
        	        									else
        	        									{
        	        										if(i%5 == 3)
															{
																$("#apnd").append('<div class="bus_seats"></div>');
																$("#apnd").append('<div class="bus_seats"><div class="badge-success demo-full-box"  data-toggle="modal" data-target="#myModal" id="'+i+'">'+i+'</div></div>');
															}
															else{
																
        		        									$("#apnd").append('<div class="bus_seats"><div class="badge-success demo-full-box"  data-toggle="modal" data-target="#myModal" id="'+i+'">'+i+'</div></div>');
															}	
														}
    			            						}
    											}
												else 
												{
													$("#aseats").text(dt);
													for(var i=1;i<=seats;i++)
													{
														if(i%5 == 3)
															{
																$("#apnd").append('<div class="bus_seats"></div>');
																$("#apnd").append('<div class="bus_seats"><div class="badge-success demo-full-box"  data-toggle="modal" data-target="#myModal" id="'+i+'">'+i+'</div></div>');
															}
															else{
																
        		        									$("#apnd").append('<div class="bus_seats"><div class="badge-success demo-full-box"  data-toggle="modal" data-target="#myModal" id="'+i+'">'+i+'</div></div>');
															}									
													}
												}		 
											});	






    										});
        									}
        									else
        									{
        										alert("details not available");
        									}
										});
								
								
							}
					});

					var id="";
					
					$(document).on("click",".badge-success",function(e)
							{
								id=$(this).attr('id');
								//alert(id);
								 
								e.preventDefault();
								$("#from,#to").html("<option disabled selected >select</option>");
								$('#myModal').modal('show');
							});
					
    					$('#myModal').on('show.bs.modal', function (e) 
        	    			{
        						//alert("sd"+id);
        						$("#serial-no").text(id);
        						for( var i =0;i<stop_stopname.length-1;i++ )
        								{
											$("#from").append('<option data-val="'+stop_id[i]+'" data-index="'+i+'">'+stop_stopname[i]+'</option>');
        								}
        						//$("#from").val(stopname);				
        					});

					$("#from").change(function()
							{
								$("#to").html("<option disabled selectd>select</option>");
								var index= $(this).find(':selected').attr('data-index');
								//alert(index);
								for( var i = +index+1;i<stop_stopname.length;i++ )
								{
									//alert("ddd"+i);
									$("#to").append('<option data-val="'+stop_id[i]+'" >'+stop_stopname[i]+'</option>');
									//alert("stop"+i);
								}
							});
					
					$("#book").click(function()
        				{
    							var seatno=$("#serial-no").text();
    							var from=$("#from").val();
    							var to=$("#to").val();
    							var scheduleno=$("#scheduleno").text();

    							if(seatno==""||from==""||to==""||from==null||to==null)
    							{
									alert("Please fill all the fields");
        						}
    							else
    							{
        							//alert("availabilityaction.php?bus=book&seatno="+seatno+"&from="+from+"&to="+to+"&scheduleno="+scheduleno);
        							$.getJSON("availabilityaction.php?bus=book&seatno="+seatno+"&from="+from+"&to="+to+"&scheduleno="+scheduleno,function(json)
        							{
										
										var log= json[0].msg;
										if(log=="success")
        		        				{
	        		        				alert("booked succesfully");
        		        					//window.location.href="index1.php";
											$("#myModals").hide();
        		        				}
        		        				else
        		        				{ 
        		        					alert("sorry something error.....");
        		        				}
            						});
        						}
        				});
						
		});

</script>


<body>
<input type="hidden" id="imaginary_dragons">
<input type="hidden" id="Seat_list">
<div class="header">
		<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index1.php">Live bus</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="hvr-underline-from-center" href="index1.php">Home</a></li>
							<li><a href="track.php" class="hvr-underline-from-center">Track Your Bus</a></li>
							<li><a href="schedule.php" class="hvr-underline-from-center">Bus Schedule</a></li>
							<li><a href="cancelled-bus.php" class="hvr-underline-from-center">Cancelled Buses</a></li>
							<li><a href="availability.php" class="hvr-underline-from-center active">Seat Availability</a></li>
							<li><a href="services.php" class="hvr-underline-from-center">Complaints</a></li>
							<li><a href="change-password.php" class="hvr-underline-from-center">Change Password</a></li>
							<li><a href="logut.php" value="submit" class="hvr-underline-from-center">Logout</a></li>
						</ul>
					</div>

					<div class="clearfix"> </div>	
				</nav>
	
	</div>	
<div class="banner1">
	<h2>Availability</h2>
</div>
<div class="about-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index1.php">Home</a><i>></i></li>
			<li>Availability</li>
		</ul>
	</div>
</div>
<!-- icons -->
<section>
	<div class="newcontainer">
	<!-- Button trigger modal -->

<button type="button" class="btn btn-danger " data-toggle="modal" data-target="#myModals" style="margin: 0 15% 10px;" id="new">
  View Seats Booked
</button>

		<div class="form-outer" style="width:70%;padding-bottom:20px;">
		
		<div class="row">
			  <div class="col-sm-4"><div class="form-group">
				<label for="busno">Bus Number</label>
				<input type="text" class="form-control" id="busno" placeholder="Bus Number">
			  </div></div>
			  <div class="col-sm-4"><div class="form-group">
				<label for="datepicker">Date</label>
				<input type="text" class="form-control" id="datepicker" placeholder="dd/mm/yyyy">
			  </div></div>
			   <div class="col-sm-4"><button type="submit" id="kik" class="btn btn-danger btn-block" style="margin-top: 35px;">Search</button></div>
		</div>
			 
		</div>
		
		<div class="form-outer mrgnbtm" style="width:70%;padding-bottom:20px;">
		<div class="row">
		<div class="col-md-6" id="append">
		    <div class="form-group">
			<label class="col-sm-5 control-label">Total number of seats</label>
			<div class="col-sm-7">
			  <p class="form-control-static" id="seats"></p>
			</div>
		  </div>
		  </div>
		  <div class="col-md-6">
		  <div class="form-group">
			<label class="col-sm-5 control-label">Available Seats</label>
			<div class="col-sm-7">
			  <p class="form-control-static" id="aseats"></p>
			</div>
		  </div>
		  </div>
		  </div>
		  <div class="row">
			<ul class="col-xs-12 list-inline">
				<li><span class="badge-success demo-box"></span>Available</li>
				<li><span class="badge-danger demo-box"></span>Not Available</li>
			</ul>
		  </div>
		  <div class="row">
			<div class="clearfix text-center" id="apend">
			<div class="driver"><img src="images/steering.png"></div>
				<div id="apnd1">
					<div id="apnd"></div>
				</div>
				<!--<div class="badge-success demo-full-box" data-toggle="modal" data-target="#myModal">111</div>
				<div class="badge-danger demo-full-box">111</div>
				<div class="badge-success demo-full-box" data-toggle="modal" data-target="#myModal">111</div>
				<div class="badge-danger demo-full-box">111</div>
				<div class="badge-success demo-full-box" data-toggle="modal" data-target="#myModal">111</div>
				<div class="badge-danger demo-full-box">111</div>
				<div class="badge-success demo-full-box" data-toggle="modal" data-target="#myModal">111</div>
				<div class="badge-danger demo-full-box">111</div>
				<div class="badge-success demo-full-box" data-toggle="modal" data-target="#myModal">111</div>
				<div class="badge-danger demo-full-box">111</div>
				<div class="badge-success demo-full-box" data-toggle="modal" data-target="#myModal">111</div>
				<div class="badge-danger demo-full-box">111</div>
			</div>  -->
		  </div>
		</div>
		
	</div>
</section>
<!-- //icons -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
			<label class="col-sm-5 control-label">Seat Number</label>
			<div class="col-sm-7">
			  <p class="form-control-static" id="serial-no">23424553</p>
			</div>
      </div>
      <div class="form-group">
			<label class="col-sm-5 control-label">Schedule No</label>
			<div class="col-sm-7">
			  <p class="form-control-static" id="scheduleno">23424553</p>
			</div>
      </div>
	  <div class="form-group">
			<label class="col-sm-5 control-label">Date</label>
			<div class="col-sm-7">
			  <p class="form-control-static" id="datepicker1">12-02-2018</p>
			</div>
      </div>
	   <div class="form-group">
			<label class="col-sm-5 control-label">Source</label>
			<div class="col-sm-7">
			  <p class="form-control-static" id="source1">Thiruvananthapuram</p>
			</div>
      </div>
	  <div class="form-group">
			<label class="col-sm-5 control-label">Destination</label>
			<div class="col-sm-7">
			  <p class="form-control-static" id="destination1">Bangalore</p>
			</div>
      </div>
	  <h4 class="new-head">Choose your Stops</h4>
	    <div class="form-group">
			<label class="col-sm-5 control-label">From</label>
			<div class="col-sm-7">
			  <select class="form-control" id="from">
				<option>select</option>
			  </select>
			</div>
      </div>
	  <div class="form-group">
			<label class="col-sm-5 control-label">Going to</label>
			<div class="col-sm-7">
			  <select class="form-control" id="to">
				<option>select</option>
			  </select>
			</div>
      </div>
	  <div class="form-group text-center">
		<button type="submit" class="btn btn-danger" id="book" style="margin-top: 5px;">Book Now</button>
	  </div>
    </div>
  </div>
</div>
</div>
<!-- footer -->
	<footer>
		<div class="copyright">
			<div class="container">
				<p>&copy; Online Bus tracking System. All rights reserved </p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

<!-- Modal -->
<div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cancel Seats</h4>
      </div>
      <div class="modal-body">
		<table class="table table-bordered">
			
			<thead>
			<tr>
				<th>Schedule No:</th>
				<th>Seat No:</th>
				<th>Source</th>
				<th>Destination</th>
				<th>cancel</th>
			</tr>

		</thead>
		<tbody  id="ap">
			
			</tbody>
		</table>
      </div>
     
    </div>
  </div>
</div>

<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<script src="js/jquery-ui.js"></script>
	<script>
	  $( function() {
		$( "#datepicker" ).datepicker();
	  } );
	 </script>
</body>
</html>