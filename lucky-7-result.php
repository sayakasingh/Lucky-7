<?php
if(isset($_POST['play_btn'])){
	if(!empty($_POST['betOption'])){
		$dice1 = rand(1,6);
		$dice2 = rand(1,6);
		$final_dice_value = $dice1 + $dice2;
		$initial_balance = $_POST['balance'];
		$betOption = $_POST['betOption'];

		if($betOption == '7' && $final_dice_value == 7){
		 //Got the lucky number..	
			$win_amt = 30;
			$new_balance = ($initial_balance+$win_amt)-10;
			$status= "won";
		}
		else if($betOption == 'above7' && $final_dice_value > 7){
		//True for above 7..	
			$win_amt = 20;
			$new_balance = ($initial_balance+$win_amt)-10;
			$status= "won";
		}
		else if($betOption == 'below7' && $final_dice_value < 7){
        //True for below 7..
			$win_amt = 20;
			$new_balance = ($initial_balance+$win_amt)-10;
			$status= "won";
		}
		else{
			$lost_amt = 10;
			$new_balance = ($initial_balance-$lost_amt);
			$status= "lost";
			//lost bet
		}

		header('location:lucky-7.php?dice1='.$dice1.'&dice2='.$dice2.'&diceSum='.$final_dice_value.'&betOption='.$betOption.'&new_balance='.$new_balance.'&status='.$status);

	}
	else{
		echo "Plese choose bet option!";
		header('location:lucky-7.php');
	}
}

?>