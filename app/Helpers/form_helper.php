<?php 
	function loadError($validation, $filed)
	{
		if(isset($validation)) {
			if($validation->hasError($filed)) {
				return $validation->getError($filed);
			}
		}
	}
?>