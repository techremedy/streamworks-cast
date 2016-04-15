<?php

date_default_timezone_set('America/Los_Angeles');

$date = date('l F j', time());
$time = date('h:i a', time());

?>

<div class="date">
  <?php print($date);?>
</div>

<div class="time">
  <?php print($time); ?>
</div>