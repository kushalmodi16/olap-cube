<?php
$Output='"chart": {
                    "renderTo": "pie-chart",
                    "type": "pie"
        },
		"title": {
			"text": "'.$ChartHeading3.'"
		},
		"xAxis": {
			"type": "category"
		},
		"yAxis": {
			"title": {
				"text": "Total Amount"
			}
		},
		"plotOptions": {
			"series": {
				"borderWidth": 0,
				"dataLabels": {
					"enabled": true,
					"format": "${point.y}"
				}
			}
		},
		"exporting": {
			"enabled": true
		},
		"tooltip": {
			"headerFormat": "<span style=\"font-size:11px\">{series.name}</span><br>",
			"pointFormat": "<span style=\"color:{point.color}\">{point.name}</span>: <b>${point.y}</b><br/>"
		},
		"legend": {
                    "layout": "vertical",
                    "align": "right",
                    "verticalAlign": "top",
                    "x": -10,
                    "y": 100,
                    "borderWidth": 0
                },
		"series": [';
		
		$countval3=0;
		$serieslen=count($ResultArray);
		
		foreach($ResultArray as $key => $value) {
			
			$Output.='{
			"name": "'.$key.'",
			"data": [';

			$countval=0;
			foreach($value as $key2 => $value2) {	
				$Output.='{
					"name": "'.$key2.'",
					"y": '.$value2.'';
				if(strlen($drilldown_horizontal_axis_name3)>0)
					$Output.=', "drilldown": "'.$key.'-'.$key2.'"';
					$Output.='}';
				$countval++;
				if ($countval < count($value)) {
                    $Output.= ',';
                }
			}
			$Output.=']
			}';
			$countval3++;
			if ($countval3 < $serieslen) {
				$Output.= ',';
			}
		}
			$Output.='],';
				
			$Output.='"drilldown": {
						"series": [';	
				include($drilldown_file_name3);

				$Output.=']
				}';

	echo "{".$Output."}";
	?>