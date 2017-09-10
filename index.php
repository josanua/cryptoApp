<?php 
	require_once 'mvc/view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" >
	<!-- <meta http-equiv="refresh" content="120"> -->
	<title>Document</title>
	<link rel="stylesheet" href="css/layout.css">
</head>
<body>
	<div class="timer">
		<button onclick="startTime()" id="start">Start</button>
		<span id="showTime"></span>
	</div>
	<div id="cex"></div>
	<div id="coincap">
		<h2><a href="http://coinmarketcap.com/" target="_blank">coinmarketcap.com</a></h2>
		
		<!-- Search function -->
		<input type="Search Asset" placeholder="Search Asset" id="searchAssetInput" >
		<button onclick="searchShowAsset()">Search</button>
		<span id="resultShow"></span>
		<form action="mvc/controller.php" method="get" id="saveAssetButton">
			<input type="button" name="saveButton" value="Save Asset">
		</form>
		<!-- /end -->
		
		<span>Your Assets</span>
		<?php echo $table; ?>
	</div>

	<!-- <script src="cex.js"></script> -->
	<script src="js/coincap.js"></script>
	<script src="js/general.js"></script>
	<!-- just for githubtest -->
</body>
</html>
