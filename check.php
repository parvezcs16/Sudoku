<?php
$data = $_POST['hidden_js_array'];
$test_array=array();
$test_array=explode(',', $data);
echo "<pre>";print_r($test_array);echo "<pre>";
?>