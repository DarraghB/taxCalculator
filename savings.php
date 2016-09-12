<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BER</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
#you_save{
	text-align: center;
	position: relative;
	top:80px;
	font-size: 30px;

}
#ber_rating{
	text-align: center;
	color:green;
	font-size: 20px;
	font-family: comic;
	position: relative;
	top:80px;

}
#form{
	text-align: center;
	font-size: 12px;
	font-family: comic;
	position: relative;
	top:80px;

}

    </style>

</head>

<body>

   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">BER</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php


function strposa($haystack, $needles=array(), $offset=0) {
        $chr = array();
        foreach($needles as $needle) {
        	global $res;
        	global $chr;
             $res = strpos($haystack, $needle, $offset);
                if ($res !== false) $chr[$needle] = $res;
        }
        if(empty($chr)) return false;
        return min($chr);

        
}


$string = file_get_contents("http://sweetcarolines.16mb.com/qr/code.html");
$array  = array('A1', 'A2', 'A3', 'B1', 'B2', 'B3', 'C1','C2', 'C3', 'D1', 'D2');

if (strposa($string, $array, 1)) {


	foreach ($chr as $key => $value) {
		# code...
	echo '<div id="ber_rating">';
    echo 'The Energy Rating is '.'<h1>'.$key.'</h1>';
    echo '</div>';


//html under the closing
    ?>





<div id="form">
	<center><h1>Enter The Number of people who Live in you House</h1>
<input type="text" id="people" placeholder="enter number of people"></input>

<button onclick="savings()">Calculate Savings!</button>

</div>




<script type="text/javascript">

function savings(){

	  var ppl = document.getElementById("people").value;

	  var saving = ppl * 50 ;



	  document.getElementById("you_save").innerHTML = "You save &euro;" +saving;


}


</script>
<div id="the_rating"></div>

<div id="you_save"></div>



    <?php

}





} else {
    echo 'Rating not found. Please try again.';
}


?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>


</html>
