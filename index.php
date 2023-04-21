<?php

function is_rweek(){
	// $ddate = "2023-04-19";
	// $date = new DateTime($ddate);
	$ddate = new DateTime();
	$dweek = $ddate->format("W");
	// echo "Week number: $week";

	if ($dweek % 2 == 0)
	{ 
		return true; 
	}
	else
	{
		return false; 
	}
}

// $ddate = "2023-04-19";
// $date = new DateTime($ddate);
$date_now = new DateTime();
$week = $date_now->format("W");
// echo "Week number: $week";

if (is_rweek())
// if ($week % 2 == 0)
{
  $string = 'Yes.'; 
  $string2 = 'It is recycling week in Canton.'; 
  $string2bkp = 'Collection takes place on Thursday morning. Take it out on Wednesday evening.'; 
  $bg_color = '#87D68D';
}
else
{
  $string = 'Nope. Not this week.'; 
  $string2 = ''; 
  $bg_color = 'white';
}

?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Is it Recycling Week in Canton?</title>
  <link rel="canonical" href="https://isitrecyclingweek.info" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="Is it Recycling Week in Canton?">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://isitrecyclingweek.info">
  <meta property="og:image" content="">

  <!-- <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png"> -->
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body bgcolor="<?php echo $bg_color; ?>" style="font-family: 'Open Sans', sans-serif;">
  <div style="text-align:center;">
    <h1><?php echo $string; ?></h1>
    <p><?php echo $string2; ?> (Week #<?php echo $week; ?>, 2023)</p>

  </div>
  <div style="text-align:center;">More info: <a href="https://publicworks.baltimorecity.gov/collectionupdate" target="_blank">Baltimore City DPW</a></div>
</body>
</html>
