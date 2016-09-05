function a1(){

$get_me_the_rating = file_get_contents("http://sweetcarolines.16mb.com/qr/code.html");

	$is_it_found = strpos($get_me_the_rating, "(A1)");

			if ($is_it_found == true) {


				$a1 = "A1 Rating";

				?>

				<html>


	<center><h1>Number of People</h1>
<input type="text" id="people" placeholder="enter number of people">

<button onclick="savings()">Calculate Savings!</button>

<div id="you_save"></div>


<script type="text/javascript">

function savings(){

	  var ppl = document.getElementById("people").value;

	  var saving = ppl * 50 ;



	  document.getElementById("you_save").innerHTML = "Your save " +saving;
}



function wait_for_rate(){


var ratedar = "<?php echo $a1;?>";

document.write(ratedar);




}

wait_for_rate();

</script>
<?php

									
									}

				else{

						donothing();
					}


?>


<?php


				//	calculate();

}
