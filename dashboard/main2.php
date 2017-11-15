<?php
session_start(); 
?>
<!DOCTYPE HTML>
<html>
<head>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
	<div class="container">
	<h1>Welcome</h1>	
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
		  <input name="submit" type="submit" class="btn btn-default"></input>
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
	?>

</div>
<div id="container" style="width: 850px; height: 450px; margin: 0 auto"></div>
	<script>
		//var elem = document.getElementById('rproduct');

document.getElementById('rproduct').addEventListener('click', function() {
      var divElem1 = document.getElementById('country'); 
	  var divElem2 = document.getElementById('year');
	  var divElem3 = document.getElementById('product');
	  
    if( this.checked){
        divElem1.style.display = 'block'  ;
		divElem2.style.display = 'block'  ;	
		divElem3.style.display = 'none'  ;		
    }
    else{
        divElem1.style.display = 'none'  ;
		divElem2.style.display = 'none'  ;
		divElem3.style.display = 'none'	;
    }
});	
	document.getElementById('ryear').addEventListener('click', function() {
      var divElem1 = document.getElementById('country'); 
	  var divElem2 = document.getElementById('year');
	  var divElem3 = document.getElementById('product');
	  
    if( this.checked){
        divElem1.style.display = 'block'  ;
		divElem2.style.display = 'none'  ;	
		divElem3.style.display = 'block'  ;		
    }
    else{
        divElem1.style.display = 'none'  ;
		divElem2.style.display = 'none'  ;
		divElem3.style.display = 'none'	;
    }

});
	document.getElementById('rcountry').addEventListener('click', function() {
      var divElem1 = document.getElementById('country'); 
	  var divElem2 = document.getElementById('year');
	  var divElem3 = document.getElementById('product');
	  
    if( this.checked){
        divElem1.style.display = 'none'  ;
		divElem2.style.display = 'block'  ;	
		divElem3.style.display = 'block'  ;		
    }
    else{
        divElem1.style.display = 'none'  ;
		divElem2.style.display = 'none'  ;
		divElem3.style.display = 'none'	;
    }

});

	</script>
    </body>
</html>
