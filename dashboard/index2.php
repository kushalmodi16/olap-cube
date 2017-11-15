
<!DOCTYPE html>
<?php
session_start(); 
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
					<li class="active">
                        <a href="index2.php"><i class="fa fa-fw fa-bar-chart-o"></i> 3D View</a>
                    </li>
                    <li>
                        <a href="urban-population-map.php"><i class="fa fa-fw fa-table"></i> Map</a>
                    </li>
                    <li>
                        <a><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    
                    <li>
                        <a><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a><i class="fa fa-fw fa-dashboard"></i> Employees</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            3D Representation
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> 3D Representation
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			  <div class="form-group">
				<div class="col-sm-3">  
				<div class="col-sm col-sm-10">
					<div class="radio">
						<label><input type="radio" name="horizontalaxis" value="Product" id="rproduct" data-on="Yes" data-off="No">Product</label>
					  </div>
					</div>
					<div class="form-group"> 
					<div class="col-sm col-sm-10">
					  <div class="radio">
						<label><input type="radio" name="horizontalaxis" value="Country-State" id="rcountry">Country-State</label>
					  </div>
					</div>
				  </div>
					<div class="form-group"> 
					<div class="col-sm col-sm-10">
					  <div class="radio">
						<label><input type="radio" name="horizontalaxis" value="Year-Month" id="ryear">Year-Month</label>
					  </div>
					</div>
				  </div>
				  <div class="form-group"> 
					<div class="col-sm col-sm-10">
					  <input name="submit" type="submit" class="btn btn-primary"><br><br></input>
					</div>
				  </div>
				 </div>
			  </div>
			
			  <div class="col-sm-3">
					<div class="form-group" style="display:none" id="product">
					<div class="col-sm col-sm-10">
					  <div class="checkbox">
						<label><input type="checkbox" name="check_list[]" value="Product">Product</label>
					  </div>
					</div>
					</div>
					<div class="form-group" style="display:none" id="country"> 
					<div class="col-sm col-sm-10">
					  <div class="checkbox">
						<label><input type="checkbox" name="check_list[]" value="Country-State" data-on="Yes" data-off="No">Country-State</label>
					  </div>
					</div>
				  </div>
					<div class="form-group" style="display:none" id="year"> 
					<div class="col-sm col-sm-10">
					  <div class="checkbox">
						<label><input type="checkbox" name="check_list[]" value="Year-Month" data-on="Yes" data-off="No">Year-Month</label>
					  </div>
					</div>
				  </div>
					  
			  </div>
				</form>
				
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart</h3>
                            </div>
                            <div class="panel-body">
							<div id="container" style="width: 850px; height: 450px; margin: 0 auto">
								</div>
	<?php
	if(isset($_POST['submit'])){//to run PHP script on submit
		switch($_POST['horizontalaxis']) {
			case 'Product':
				$_SESSION['horizontal_axis_name'] = 'product';
				$_SESSION['horizontal_axis_table'] = 'product';
				$_SESSION['horizontal_axis_f_key'] = 'product';
				$_SESSION['horizontal_axis_p_key'] = 'p_key';
				$_SESSION['drilldown_horizontal_axis_name'] = '';
				$_SESSION['drilldown_horizontal_axis_table'] = '';
				break;				
			case 'Country-State':
				$_SESSION['horizontal_axis_name'] = 'country';
				$_SESSION['horizontal_axis_table'] = 'state';
				$_SESSION['horizontal_axis_f_key'] = 'location';
				$_SESSION['horizontal_axis_p_key'] = 's_key';
				$_SESSION['drilldown_horizontal_axis_name'] = 'name';
				$_SESSION['drilldown_horizontal_axis_table'] = 'state';
				break;
			case 'Year-Month':
				$_SESSION['horizontal_axis_name'] = 'time_year';
				$_SESSION['horizontal_axis_table'] = 'month';
				$_SESSION['horizontal_axis_f_key'] = 'time_month';
				$_SESSION['horizontal_axis_p_key'] = 'm_key';
				$_SESSION['drilldown_horizontal_axis_name'] = 'description';
				$_SESSION['drilldown_horizontal_axis_table'] = 'month cross join year';
				break;
			default:
				$_SESSION['horizontal_axis_name'] = 'product';
				$_SESSION['horizontal_axis_table'] = 'product';
				$_SESSION['horizontal_axis_f_key'] = 'product';
				$_SESSION['horizontal_axis_p_key'] = 'p_key';
				$_SESSION['drilldown_horizontal_axis_name'] = '';
				$_SESSION['drilldown_horizontal_axis_table'] = '';
				break;
		}
			
		if(count($_POST['check_list'])==1){
			$_SESSION['drilldownfile']='drilldown42.php';
			switch($_POST['check_list'][0]) {
								
				case 'Product':
				//echo "Session Set";
					$_SESSION['series_f_key']='product';
					$_SESSION['series_p_key']= 'p_key';
					$_SESSION['series_name']= 'product'; 
					$_SESSION['series_table']= 'product';
					break;
				case 'Country-State':
				//echo "bye";
					$_SESSION['series_f_key'] = 'location';
					$_SESSION['series_p_key'] = 's_key';
					$_SESSION['series_name'] = 'country'; 
					$_SESSION['series_table'] = 'state';
					break;
				case 'Year-Month':
					$_SESSION['series_f_key'] = 'time_month';
					$_SESSION['series_p_key'] = 'm_key';
					$_SESSION['series_name'] = 'time_year'; 
					$_SESSION['series_table'] = 'month';
					break;
				default:
					$_SESSION['series_f_key']='product';
					$_SESSION['series_p_key']= 'p_key';
					$_SESSION['series_name']= 'product'; 
					$_SESSION['series_table']= 'product';
					break;	
			}
			echo "<p id=\"pid\"></p>
					<script type=\"text/javascript\">		
				var chart;
				$(document).ready(function() {
				Highcharts.setOptions({
					lang: {
						drillUpText: \"Back \"
					}
				});
				$.get('olap112.php', function(json) {
						//console.log(typeof json);
						json=JSON.parse(json);
						//console.log(typeof json);
						
						chart = new Highcharts.Chart(json);
	
	// Add mouse events for rotation
    $(chart.container).bind('mousedown.hc touchstart.hc', function (eStart) {
        eStart = chart.pointer.normalize(eStart);

        var posX = eStart.pageX,
            posY = eStart.pageY,
            alpha = chart.options.chart.options3d.alpha,
            beta = chart.options.chart.options3d.beta,
            newAlpha,
            newBeta,
            sensitivity = 5; // lower is more sensitive

        $(document).bind({
            'mousemove.hc touchdrag.hc': function (e) {
                // Run beta
                newBeta = beta + (posX - e.pageX) / sensitivity;
                if(newBeta > 90)
                {
                	newBeta=90;
                }
                if(newBeta < -90)
                {
                	newBeta=-90;
                }
                chart.options.chart.options3d.beta = newBeta;

                // Run alpha
                newAlpha = alpha + (e.pageY - posY) / sensitivity;
                if(newAlpha > 90)
                {
                	newAlpha=90;
                }
                if(newAlpha < -90)
                {
                	newAlpha=-90;
                }
                chart.options.chart.options3d.alpha = newAlpha;

                chart.redraw(false);
            },
            'mouseup touchend': function () {
                $(document).unbind('.hc');
            }
        });
    });
	
				
			
				//document.getElementById(\"pid\").innerHTML = json;
					});
				});
					</script>";
		}
		else {
			$_SESSION['drilldownfile']='drilldown52.php';
			switch($_POST['horizontalaxis']) {
				case 'Product':
					$_SESSION['series_f_key1'] = 'location';
					$_SESSION['series_p_key1'] = 's_key';
					$_SESSION['series_name1'] = 'country'; 
					$_SESSION['series_table1'] = 'state';
					$_SESSION['series_f_key2'] = 'time_month';
					$_SESSION['series_p_key2'] = 'm_key';
					$_SESSION['series_name2'] = 'time_year'; 
					$_SESSION['series_table2'] = 'month';
					break;				
				case 'Country-State':
					$_SESSION['series_f_key1']='product';
					$_SESSION['series_p_key1']= 'p_key';
					$_SESSION['series_name1']= 'product'; 
					$_SESSION['series_table1']= 'product';
					$_SESSION['series_f_key2'] = 'time_month';
					$_SESSION['series_p_key2'] = 'm_key';
					$_SESSION['series_name2'] = 'time_year'; 
					$_SESSION['series_table2'] = 'month';
					break;
				case 'Year-Month':
					$_SESSION['series_f_key1'] = 'location';
					$_SESSION['series_p_key1'] = 's_key';
					$_SESSION['series_name1'] = 'country'; 
					$_SESSION['series_table1'] = 'state';
					$_SESSION['series_f_key2']='product';
					$_SESSION['series_p_key2']= 'p_key';
					$_SESSION['series_name2']= 'product'; 
					$_SESSION['series_table2']= 'product';
					break;
				default:
					$_SESSION['series_f_key1'] = 'location';
					$_SESSION['series_p_key1'] = 's_key';
					$_SESSION['series_name1'] = 'country'; 
					$_SESSION['series_table1'] = 'state';
					$_SESSION['series_f_key2'] = 'time_month';
					$_SESSION['series_p_key2'] = 'm_key';
					$_SESSION['series_name2'] = 'time_year'; 
					$_SESSION['series_table2'] = 'month';
					break;
			}
			echo "<p id=\"pid\"></p>
					<script type=\"text/javascript\">		
				var chart;
				$(document).ready(function() {
				Highcharts.setOptions({
					lang: {
						drillUpText: \"Back \"
					}
				});
				$.get('olap122.php', function(json) {
						//console.log(typeof json);
						json=JSON.parse(json);
						//console.log(typeof json);
						chart = new Highcharts.Chart(json);
						
												    // Add mouse events for rotation
    $(chart.container).bind('mousedown.hc touchstart.hc', function (eStart) {
        eStart = chart.pointer.normalize(eStart);

        var posX = eStart.pageX,
            posY = eStart.pageY,
            alpha = chart.options.chart.options3d.alpha,
            beta = chart.options.chart.options3d.beta,
            newAlpha,
            newBeta,
            sensitivity = 5; // lower is more sensitive

        $(document).bind({
            'mousemove.hc touchdrag.hc': function (e) {
                // Run beta
                newBeta = beta + (posX - e.pageX) / sensitivity;
                if(newBeta > 90)
                {
                	newBeta=90;
                }
                if(newBeta < -90)
                {
                	newBeta=-90;
                }
                chart.options.chart.options3d.beta = newBeta;

                // Run alpha
                newAlpha = alpha + (e.pageY - posY) / sensitivity;
                if(newAlpha > 90)
                {
                	newAlpha=90;
                }
                if(newAlpha < -90)
                {
                	newAlpha=-90;
                }
                chart.options.chart.options3d.alpha = newAlpha;

                chart.redraw(false);
            },
            'mouseup touchend': function () {
                $(document).unbind('.hc');
            }
        });
    });
						
						
				//document.getElementById(\"pid\").innerHTML = json;
					});
				});
					</script>";
		}
	}
	else {
		$_SESSION['horizontal_axis_name'] = 'country';
		$_SESSION['horizontal_axis_table'] = 'state';
		$_SESSION['horizontal_axis_f_key'] = 'location';
		$_SESSION['horizontal_axis_p_key'] = 's_key';
		$_SESSION['drilldown_horizontal_axis_name'] = 'name';
		$_SESSION['drilldown_horizontal_axis_table'] = 'state';
		
		$_SESSION['series_f_key']='product';
		$_SESSION['series_p_key']= 'p_key';
		$_SESSION['series_name']= 'product'; 
		$_SESSION['series_table']= 'product';
	
		
		$_SESSION['drilldownfile']='drilldown42.php';
		
		echo "<p id=\"pid\"></p>
					<script type=\"text/javascript\">		
				var chart;
				$(document).ready(function() {
				Highcharts.setOptions({
					lang: {
						drillUpText: \"Back \"
					}
				});
				$.get('olap112.php', function(json) {
						//console.log(typeof json);
						json=JSON.parse(json);
						console.log(json);
						chart = new Highcharts.Chart(json);
						
				//document.getElementById(\"pid\").innerHTML = json;
														    // Add mouse events for rotation
    $(chart.container).bind('mousedown.hc touchstart.hc', function (eStart) {
        eStart = chart.pointer.normalize(eStart);

        var posX = eStart.pageX,
            posY = eStart.pageY,
            alpha = chart.options.chart.options3d.alpha,
            beta = chart.options.chart.options3d.beta,
            newAlpha,
            newBeta,
            sensitivity = 5; // lower is more sensitive

        $(document).bind({
            'mousemove.hc touchdrag.hc': function (e) {
                // Run beta
                newBeta = beta + (posX - e.pageX) / sensitivity;
                if(newBeta > 90)
                {
                	newBeta=90;
                }
                if(newBeta < -90)
                {
                	newBeta=-90;
                }
                chart.options.chart.options3d.beta = newBeta;

                // Run alpha
                newAlpha = alpha + (e.pageY - posY) / sensitivity;
                if(newAlpha > 90)
                {
                	newAlpha=90;
                }
                if(newAlpha < -90)
                {
                	newAlpha=-90;
                }
                chart.options.chart.options3d.alpha = newAlpha;

                chart.redraw(false);
            },
            'mouseup touchend': function () {
                $(document).unbind('.hc');
            }
        });
    });
						
						
				//document.getElementById(\"pid\").innerHTML = json;
					});
				});
			</script>";
	}
	?>                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Pie Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="pie-chart">
								
									<?php
										echo "<p id=\"pid\"></p>
											<script type=\"text/javascript\">		
										var chart2;
										$(document).ready(function() {
										Highcharts.setOptions({
											lang: {
												drillUpText: \"Back \"
											}
										});

										$.get('pieChart.php', function(json) {
												//console.log(typeof json);
												json=JSON.parse(json);
												console.log(json);
												chart2 = new Highcharts.Chart(json);
												
										//document.getElementById(\"pid\").innerHTML = json;
											});
										});
											</script>";
									?>
								</div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
							
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>State</th>
												<th>Year</th>
                                                <th>Product</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
							<?php
								include('connection.php');
								$Query = "SELECT name, time_year,  product AS Value, sum(amount) AS Total FROM FactTable inner join product on product.p_key=FactTable.product inner join state on state.s_key=FactTable.location GROUP BY Value,name";


								//Query the database
								$result=$conn->query($Query);

								//Fetch results in the Result Array
								while($Row = $result->fetch_assoc())
								{
									echo "<tr>";
									foreach($Row as $cname => $cvalue){
										print "<td>$cvalue</td>";
									}
									echo "</tr>";
								}
							?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	<script src="myscript.js"></script>
</body>

</html>
