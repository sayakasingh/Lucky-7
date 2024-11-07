
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcom to lucky 7</title>
	<style type="text/css">
		.my-btn{
			style="height: 100px;
			width: 100px;
			background: whitesmoke;
			border: 1px solid;
			color: black;
			text-decoration: none;
			padding: 5px;"
		}
	</style>
</head>
<body>
	<div class="container" style="height: 500px;width: 450px;background: black;color: white;padding: 2%;margin-left: 35%;">
<form method="post" action="lucky-7-result.php">
<h1>Welcome  To Lucky <span style="color: magenta;">7 </span>Game</h1>
<p>Balance: <input type="text" name="balance" id="balance" value="<?php if(!empty($_GET['new_balance'])){ echo $_GET['new_balance']; } else echo '100'; ?>" style="border: none;background: transparent;color: white;"></p>
<br>
<p>Play your bet (Rs 10.):</p>

<input type="radio" value="below7" name="betOption">Below 7
<input type="radio" value="7" name="betOption">7
<input type="radio" value="above7" name="betOption">Above 7
<button id="play_btn" type="submit" name="play_btn">Play</button>
</form>

<?php if(!empty($_GET['dice1'])) { ?>
<div id="result">
	<h3><?php if($_GET['status']=='lost'){ echo "Better luck next time !"; } else if($_GET['status']=='won'){ echo 'Congratulations ! You win ! Your balance is now <span style="color: magenta;">'. $_GET['new_balance']. '</span> Rs';} ?></h3>
	<p>Selected Option: <?php echo $_GET['betOption']; ?> </p>
	<p>Dice1: <?php echo $_GET['dice1']; ?></p>
	<p>Dice2: <?php echo $_GET['dice2'] ?></p>
	<p>Total: <?php echo $_GET['diceSum']; ?></p>

	<a href="lucky-7.php" class="my-btn">Reset & Play Again</a>
	<a href="lucky-7.php?new_balance=<?php echo $_GET['new_balance'];  ?>" class="my-btn">Continue Playing</a>
</div>
<?php } ?>
</div>
</body>
</html>
