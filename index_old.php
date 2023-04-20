<?php
$ddate = "2023-04-19";
$date = new DateTime($ddate);
$date_now = new DateTime();
$week = $date->format("W");
// echo "Week number: $week";

if ($week % 2 == 0)
{
	$string = 'Yes. It is recycling week in Canton.'; 
	$string2 = 'Collection takes place on Thursday morning. Take it out on Wednesday evening.'; 
	$bg_color = 'green';
}
else
{
	$string = 'Nope. Not this week.'; 
	$string2 = ''; 
	$bg_color = 'white';
}

?>
<html>
<head>
	<title>Is it Recycling Week in Canton?</title>
	<link rel="canonical" href="https://isitrecyclingweek.info" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	
</head>
<body bgcolor="<?php echo $bg_color; ?>" style="font-family: 'Open Sans', sans-serif;">
	<div style="text-align:center;">
		<h1><?php echo $string; ?></h1>
		<p><?php echo $string2; ?> (Week #<?php echo $week; ?>, 2023)</p>

	</div>
	<div style="text-align:center;">More info: <a href="https://publicworks.baltimorecity.gov/collectionupdate" target="_blank">Baltimore City DPW</a></div>
</body>
</html>