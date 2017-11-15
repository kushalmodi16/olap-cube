<?php
$Output.='{
			"name": "'.$key.'",
			"id": "'.$key.'-'.$key2.'",
			"data": [';
			$countval2=0;
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