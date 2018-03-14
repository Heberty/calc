<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<style>
	ul {
		list-style: none;
	}
</style>

<?php 

	$display = isset($_GET['display']) ? ($_GET['display']) : '';
	$key = isset($_GET['key']) ? ($_GET['key']) : '';
	if (is_numeric($key) || in_array($key, ['+', '-', 'x', '\/'])) {
		$display .= $key;
	} elseif($key == '=') {
		$display = preg_replace('/x/' , '*', $display);
		eval('$result = (' . $display . ');');
		$display = $result;
	} elseif($key == 'c') {
		$display = '';
	}
?>

<div class="container">
	<div class="row">
		<form action="" class="">
			<input class="col-12" type="text" name="display" value="<?= $display ?>" readonly>
			<ul class="d-flex flex-wrap col-12">
				<li class="col-4"><button name="key" value="c">C</button></li>
				<li class="col-4"><button name="key" value="+">+</button></li>
				<li class="col-4"><button name="key" value="-">-</button></li>
				<li class="col-4"><button name="key" value="x">X</button></li>
				<li class="col-4"><button name="key" value="\/">/</button></li>
				<li class="col-4"><button name="key" value="1">1</button></li>
				<li class="col-4"><button name="key" value="2">2</button></li>
				<li class="col-4"><button name="key" value="3">3</button></li>
				<li class="col-4"><button name="key" value="4">4</button></li>
				<li class="col-4"><button name="key" value="5">5</button></li>
				<li class="col-4"><button name="key" value="6">6</button></li>
				<li class="col-4"><button name="key" value="7">7</button></li>
				<li class="col-4"><button name="key" value="8">8</button></li>
				<li class="col-4"><button name="key" value="9">9</button></li>
				<button class="col-4" name="key" value="=">=</button>
			</ul>
		</form>
	</div>
</div>


