<?php
$Output.='{
			"name": "'.$key.'",
			"stack":'.($serieslen-1-$countval/2).',
			"id": "'.$key.'-'.$key2.'",
			"data": [';
			$countval2=0;
			$setstackerror=1-$serieslen;
			foreach($ResultArray2 as $key3 => $value3) {
			$Output.='	[
					"'.$key3.'",
					'.$value3.'
				]';
				$countval2++;
				if ($countval2 < count($ResultArray2)) {
					$Output .= ',';
				}
			}
			
		$Output.=' ]
		}';
		
	$countval++;
	if ($countval < count($ResultArray)*count($value)) {
		$Output .= ',';
	}
?>