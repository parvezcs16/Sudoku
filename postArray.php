<?php 






function js2php_proc() {
		$str = json_decode($_POST['str'], true); 
		echo json_encode($str);
	}


js2php_proc();

?>