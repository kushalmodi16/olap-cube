<?php
$Output='"chart": {
                    "renderTo": "container",
                    "type": "column",
					"margin":100,
					"options3d": {
						"enabled": true,
						"alpha": 10,
						"beta": 10,
						"depth": 200,
						"viewDistance": 5,
						"fitToPlot": false,
						"frame": {
							"bottom": { "size": 1, "color": "rgba(0,0,0,0.02)" },
							"back": { "size": 1, "color": "rgba(0,0,0,0.04)" },
							"side": { "size": 1, "color": "rgba(0,0,0,0.06)" }
						}
					}
        },
		"title": {
			"text": "'.$ChartHeading.'"
		},
		"subtitle": {
			"text": "Click the columns to drilldown."
		},
		"xAxis": {
			"type": "category"
		},
		"yAxis": {
			"title": {
				"text": "Total Amount"
			}
		},
		 "zAxis": {
            "min": 0
			},
		"plotOptions": {
			"series": {
				"colorByPoint":true,
				"borderWidth": 0,
				"dataLabels": {
					"enabled": false,
					"format": "${point.y}"
				}
			},
			"column": {
                "depth": 40,
                "stacking": true,
                "grouping": false,
                "groupZPadding": 20
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
		$setstackerror=$serieslen-1;
		foreach($ResultArray as $key => $value) {
			
			$Output.='{
			"name": "'.$key.'",
			"stack":'.($setstackerror-$countval3).',
			"data": [';

			$countval=0;
			foreach($value as $key2 => $value2) {	
				$Output.='{
					"name": "'.$key2.'",
					"y": '.$value2.'';
				if(strlen($drilldown_horizontal_axis_name)>0)
					$Output.=', "drilldown": "'.$key.'-'.$key2.'"';
					$Output.='}';
				$countval++;
				if ($countval < count($value)) {
                    $Output .= ',';
                }
			}
			$Output.=']
			}';
			$countval3++;
			if ($countval3 < $serieslen) {
				$Output .= ',';
			}
		}
			$Output.='],';
				
			$Output.='"drilldown": {
						"series": [';	
				include($drilldown_file_name);

				$Output.=']
				}';

	echo "{".$Output."}";
	?>