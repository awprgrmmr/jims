<?php
session_start();

if (isset($_POST['username'])) $_SESSION['username'] = $_POST['username'];

if (isset($_GET['action'])) unset($_SESSION['username']);
if (isset($_SESSION['username'])) header('Location: ./');

?>
<head>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	<style>
	html, body {
		height: 100%;
		margin: 0;
	}
	body {
		background: #999;
		display: flex;
		align-items: center;
		justify-content: center;
		font: 15px Inconsolata, sans-serif;
	}
	* {
		line-height: 1em;
	}
	header {
		font-size: 13px;
		letter-spacing: 1px;
		margin-bottom: 1em;
		text-align: center;
	}
	#login label {
		background: #333333;
		border: 1px solid #EEEEEE;
		border-bottom-left-radius: 3px;
		border-top-left-radius: 3px;
		color: white;
		display: inline-block;
		margin-bottom: 10px;
		font-size: 12px;
		padding: 6px 8px;
		vertical-align: top;
	}
	#login input {
		background: #EEEEEE;
		border: none;
		border-bottom-right-radius: 3px;
		border-top-right-radius: 3px;
		font: inherit;
		outline: none;
		padding: 5px;
	}
	#login input:focus {
		background: #FFFFFF;
	}
	</style>
</head>
<body>

<div id="login">
	<header>JIMS LOGIN</header>
	<form method="post" action="login.php">
		<label for="username">U</label><input type="text" name="username" autocomplete="off"/>
		<br/>
		<label for="password">P</label><input type="password" name="password" autocomplete="off"/>
	</form>
	<script>
		$("input").keypress(function(event) {
		    if (event.which == 13) {
		        event.preventDefault();
		        $("form").submit();
		    }
		});
	</script>
</div>

</body>