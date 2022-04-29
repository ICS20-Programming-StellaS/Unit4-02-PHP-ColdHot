<?php
  // get the input from text field
  $temperature = ($_POST['temperature']);
  define("MIN", 15);
?>

<?php
	// calculate the volume
  if($temperature >= MIN) {
  echo "It's hot";
  } else { 
  echo "BRRR It's chilly out!";
  }
?>
