<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shawpify Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron text-center">
			<h1>Shawpify</h1>
			<p>Everything you need to <s>buy</s> know to create a web application!</p>
		</div>
	</div>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a id ="home" class="navbar-brand navigate" href="home.php">Shawpify Home</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a id ="products" class="navigate" href="products.php">Products</a></li>
					<li><a id = "contact" class="navigate"  href="contact.php">Contact Us</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign in</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div id ="content"></div>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
	$(window).on("load", function() {
	$("#content").load($("#home").attr("href"), completeFunction);
	}); 
	$(".navigate" on("click", function(event)){
		event.preventDefault(); 
		$("#content").load($(this). attr("href"), completeFunction); 
	});

	/*$("#products").on("click", function(event){
		event.preventDefault(); 
		$("#content").load($(this). attr("href"), completeFunction); 
	});
	$("#home").on("click", function(event){
		event.preventDefault(); 
		$("#content").load($(this). attr("href"), completeFunction); 
	});*/
	function completeFunction (responseText,textStatus,request){
		if (textStatus =="error"){
			$("#content").text("An error occurred during your request : "+ request.status+" "+request.statusText);
		}

	}
	</script>
</body>
</html>