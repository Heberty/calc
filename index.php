<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">

<style>

	body {
	    background-image: url(img/bg-mac.png);
	    background-size: cover;
	    background-position: center;
	    background-repeat: no-repeat;
	    position: relative;
	    top: 15%;
	}
	ul {
		list-style: none;
		padding: 0!important;
		margin: 0;
	}

	form {
		max-width: 170px;
	    box-shadow: 1px 1px 10px 0px rgba(0,0,0,.5);
	    position: relative;
	}

	.buttom-orange {
		background-color: #F5933C;
		color: #FFF;
	}

	button {
		border: 0.1px solid rgba(165, 165, 165, 0.3);
		background-color: #E0E0E0;
		color: #6D6D6D;
		font-family: 'Lato', sans-serif;
		padding: 5px 0;
	}

	input {
	    background-color: #4c4c4cbd;;
	    border: none;
	    padding: 0;
		margin: 0;
		text-align: right;
		font-size: 40px;
		color: #FFF;
		font-family: 'Lato', sans-serif;
		border-radius: 3px 3px 0px 0px;
	}

	.balls {
		background-color: #E65F5A;
		width: 10px;
		height: 10px;
		position: absolute;	
		top: 5px;
		left: 5px;
		border-radius: 50%; 
		z-index: 2;
	}

	.balls:after {
		content: "";
		background-color: #59B76B;
		width: 10px;
		height: 10px;
		position: absolute;	
		top: 0px;
		left: 15px;
		border-radius: 50%; 
	}

	.balls:before {
		content: "";
		background-color: #F5C354;
		width: 10px;
		height: 10px;
		position: absolute;	
		top: 0px;
		left: 30px;
		border-radius: 50%; 
		z-index: 2;
	}
</style>

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

<div class="col-12 d-flex justify-content-center">
	<form action="" class="">
		<div class="balls"></div>
		<input class="col-12" type="text" name="display" value="<?= $display ?>" readonly>
		<ul class="d-flex flex-wrap col-12">
			<button class="col-3" name="key" value="c">C</button>
			<button class="col-3" name="key" value="+/-">+/-</button>
			<button class="col-3" name="key" value="%">%</button>
			<button class="col-3 buttom-orange" name="key" value="/">/</button>
			<button class="col-3" name="key" value="7">7</button>
			<button class="col-3" name="key" value="8">8</button>
			<button class="col-3" name="key" value="9">9</button>
			<button class="col-3 buttom-orange" name="key" value="*">X</button>
			<button class="col-3" name="key" value="4">4</button>
			<button class="col-3" name="key" value="5">5</button>
			<button class="col-3" name="key" value="6">6</button>
			<button class="col-3 buttom-orange" name="key" value="-">-</button>
			<button class="col-3" name="key" value="1">1</button>
			<button class="col-3" name="key" value="2">2</button>
			<button class="col-3" name="key" value="3">3</button>
			<button class="col-3 buttom-orange" name="key" value="+">+</button>
			<button style="border-radius: 0px 0px 0px 3px; text-align: left; padding-left: 27px" class="col-6" name="key" value="0">0</button>
			<button class="col-3" name="key" value=".">.</button>
			<button style="border-radius: 0 0 3px 0;" class="col-3 buttom-orange" name="key" value="=">=</button>
		</ul>
	</form>
</div>


