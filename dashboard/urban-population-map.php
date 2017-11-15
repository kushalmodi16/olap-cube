<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

	    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/flot-data.js"></script>
	
<script src="jquery.min.js"></script> 
   <script src="highcharts.js"></script>
<script src="map.js"></script>
<script src="world.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="https://cloud.github.com/downloads/lafeber/world-flags-sprite/flags32.css" />
	
	<link href="mymap.css" rel="stylesheet" type="text/css">


  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper-outer">

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
                <a class="navbar-brand" href="index.php">SB Admin</a>
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
					<li>
                        <a href="index2.php"><i class="fa fa-fw fa-bar-chart-o"></i> 3D View</a>
                    </li>
                    <li class="active">
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
                        <br>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Map
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->
                <div class="row">                 
					<div id="wrapper">
						<div id="container"></div>
						<div id="info">
							<span class="f32"><span id="flag"></span></span>
							<h2></h2>
							<div class="subheader">Click countries to view history</div>
							<div id="country-chart"></div>
						</div>
					</div>

					
					<script language="JavaScript">
					$(document).ready(function() {
						console.log("hello");
						$.getJSON('jsonp.php?filename=urban-population.csv&callback=?', function (csv) {
					//	console.log(csv);
							// Parse the CSV Data
							/*Highcharts.data({
								csv: data,
								switchRowsAndColumns: true,
								parsed: function () {
									console.log(this.columns);
								}
							});*/

							// Very simple and case-specific CSV string splitting
							function CSVtoArray(text) {
								return text.replace(/^"/, '')
									.replace(/",$/, '').split('","');
									
							}

							csv = csv.split(/\n/);
							
							var countries = {},
								mapChart,
								countryChart,
								numRegex = /^[0-9\.]+$/,
								quoteRegex = /\"/g,
								categories = CSVtoArray(csv[1]).slice(4);

							// Parse the CSV into arrays, one array each country
							$.each(csv.slice(2), function (j, line) {
								var row = CSVtoArray(line),
									//data = row.slice(15,58);
									data = row.slice(4);

								$.each(data, function (i, val) {

									val = val.replace(quoteRegex, '');
									if (numRegex.test(val)) {
										val = parseInt(val, 10);
									} else if (!val) {
										val = null;
									}
									data[i] = val;
								});
								countries[row[1]] = {
									name: row[0],
									code3: row[1],
									data: data
								};
							});

							
							var data = [];
							for (var code3 in countries) {
								if (countries.hasOwnProperty(code3)) {
									var value = null,
										year,
										itemData = countries[code3].data,
										i = itemData.length;

									while (i--) {
										if (typeof itemData[i] === 'number') {
											value = itemData[i];
											year = categories[i];
											break;
										}
									}
									data.push({
										name: countries[code3].name,
										code3: code3,
										value: value,
										year: year
									});
								}
							}

							// Add lower case codes to the data set for inclusion in the tooltip.pointFormat
							var mapData = Highcharts.geojson(Highcharts.maps['custom/world']);
							$.each(mapData, function () {
								this.id = this.properties['hc-key']; // for Chart.get()
								this.flag = this.id.replace('UK', 'GB').toLowerCase();
							});

							// Wrap point.select to get to the total selected points
							Highcharts.wrap(Highcharts.Point.prototype, 'select', function (proceed) {

								proceed.apply(this, Array.prototype.slice.call(arguments, 1));

								var points = mapChart.getSelectedPoints();

								if (points.length) {
									if (points.length === 1) {
										$('#info #flag').attr('class', 'flag ' + points[0].flag);
										$('#info h2').html(points[0].name);
									} else {
										$('#info #flag').attr('class', 'flag');
										$('#info h2').html('Comparing countries');

									}
									$('#info .subheader').html('<h4>Historical Population</h4><small><em>Shift + Click on map to compare countries</em></small>');

									if (!countryChart) {
										countryChart = $('#country-chart').highcharts({
											chart: {
												height: 250,
												spacingLeft: 0
											},
											credits: {
												enabled: false
											},
											title: {
												text: null
											},
											subtitle: {
												text: null
											},
											xAxis: {
												tickPixelInterval: 50,
												crosshair: true
											},
											yAxis: {
												title: null,
												opposite: true
											},
											tooltip: {
												shared: true
											},
											plotOptions: {
												series: {
													animation: {
														duration: 500
													},
													marker: {
														enabled: false
													},
													threshold: 0,
													pointStart: parseInt(categories[0], 10)
												}
											}
										}).highcharts();
									}

									$.each(points, function (i) {
										// Update
										if (countryChart.series[i]) {
											/*$.each(countries[this.code3].data, function (pointI, value) {
												countryChart.series[i].points[pointI].update(value, false);
											});*/
											countryChart.series[i].update({
												name: this.name,
												data: countries[this.code3].data,
												type: points.length > 1 ? 'line' : 'area'
											}, false);
										} else {
											countryChart.addSeries({
												name: this.name,
												data: countries[this.code3].data,
												type: points.length > 1 ? 'line' : 'area'
											}, false);
										}
									});
									while (countryChart.series.length > points.length) {
										countryChart.series[countryChart.series.length - 1].remove(false);
									}
									countryChart.redraw();

								} else {
									$('#info #flag').attr('class', '');
									$('#info h2').html('');
									$('#info .subheader').html('');
									if (countryChart) {
										countryChart = countryChart.destroy();
									}
								}



							});

							// Initiate the map chart
							mapChart = $('#container').highcharts('Map', {

								title: {
									text: 'Urban Population by Country'
								},

								subtitle: {
									text: 'Source: <a href="http://data.worldbank.org/indicator/EG.USE.ELEC.KH.PC">The World Bank</a>'
								},

								mapNavigation: {
									enabled: true,
									buttonOptions: {
										verticalAlign: 'bottom'
									}
								},

								colorAxis: {
									type: 'logarithmic',
									endOnTick: false,
									startOnTick: false,
									min: 100
								},

								tooltip: {
									footerFormat: '<span style="font-size: 10px">(Click for details)</span>'
								},

								series: [{
									data: data,
									mapData: mapData,
									joinBy: ['iso-a3', 'code3'],
									name: 'Current Population',
									allowPointSelect: true,
									cursor: 'pointer',
									states: {
										select: {
											//color: '#a4edba',
											color: '#a4edba',
											borderColor: 'black',
											dashStyle: 'shortdot'
										}
									}
								}]
							}).highcharts();

							// Pre-select a country
							//mapChart.get('us').select();
						});
					});
					</script>
				</div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>

</html>
