<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<?php require 'calc.php' ?>

<div class="col-12 d-flex justify-content-center">
	<form action="">
		<div class="balls"></div>
		<input class="col-12" type="text" name="display" value="<?php echo $display ?>" readonly>
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

<script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/script.js"></script>



