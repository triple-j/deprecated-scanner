<!DOCTYPE html>
<html>
	<head>
		<title>PHP deprecated function scanner</title>
		<meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
		<script src="js/jquery.js"></script>
		<?php
	
			echo '<script>';
			echo 'var fileList = new Array(';
			$i = 0;
			foreach ($fileList AS $value)
			{
				$i++;
				if ($i>1)
					echo ',';
				echo "'".$value."'";
			}
			echo ');';
			echo '</script>';
		?>
		<script src="js/script.js"></script>
		<link rel='stylesheet' type='text/css' href='css/style.css'>		
	</head>
	<body>
		<h1>PHP Deprecated Function Scanner</h1>
		
		<p>
			This script will only find deprecated <em>functions</em> in your code.  For more detailed information about migrating to newer 
			versions of PHP, see the following links:
		</p>
		
		<ul>
			<li><a href="http://us3.php.net/manual/en/migration53.php" target="_blank">Migrating from PHP 5.2.x to PHP 5.3.x</a></li>
			<li><a href="http://www.php.net/manual/en/migration54.php" target="_blank">Migrating from PHP 5.3.x to PHP 5.4.x</a></li>
			<li><a href="http://www.php.net/manual/en/migration55.php" target="_blank">Migrating from PHP 5.4.x to PHP 5.5.x</a></li>
		</ul>
		
		<div class="actions">
			<button id="scan">Start Scan (<span class="file_count">0</span> files)</button>
		</div>
		
		<div id="ellenorzes">
			Checked: <span id="ittjar">0</span>/<span id="ennyibol">0</span> files
		</div>
		<div id="progressbar_corner">
			<div id="progressbar"></div>
		</div>
		<div id="error" class="empty">
			
		</div>
		
		<div id="list"></div>
	</body>
</html>
