<?php
require_once("EasyBotter.php");
$eb = new EasyBotter();
if(rand(0,3) == 0){$response = $eb->markov( 'nXpgUMaxg66VaXDGnJOU0tjTtCpyOL6Fru05288FZTTZgzdtVmixIExBnSCluv4H' );}
$response = $eb->replyTimeline(2,"reply_pattern.php");
if(rand(0,2) == 0){$response = $eb->replyTimeline(2,"reply_pattern_ww.php");
}
$response = $eb->replyTimeline(2,"reply_pattern.php");
if(rand(0,4) == 0){$response = $eb->replyTimeline(2,"reply_pattern_hello.php");
}
?>
