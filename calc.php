
<?php 

	$display = isset($_GET['display']) ? ($_GET['display']) : '';
	$key = isset($_GET['key']) ? ($_GET['key']) : '';
	if (is_numeric($key) || in_array($key, ['+', '-', '*', '/', '.', '%', '+/-'])) {
		$display .= $key;
	} elseif($key == '=') {
		$display = preg_replace('/x/' , '*', $display);
		eval('$result = (' . $display . ');');
		$display = '=' .$result;
	}  elseif($key == 'c') {
		$display = '';
	}
?>