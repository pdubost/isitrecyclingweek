<?php
$ddate = "2023-04-20";
$date = new DateTime($ddate);
$week = $date->format("W");
echo "Week number: $week";

if ($week % 2 == 0)
{ $string = 'Yes, it is recycling week in Canton.'; }
else
{ $string = 'Nope. Not this week.'; }

?>
<html>
<head>
	<title>Canton Recycling Day - Baltimore City</title>
</head>
<body>
	<h1><?php echo $string; ?></h1>
</body>
</html>