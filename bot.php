<?php
require_once 'EasyBotter.php';
$eb = new EasyBotter();
$eb->appid = 'nXpgUMaxg66VaXDGnJOU0tjTtCpyOL6Fru05288FZTTZgzdtVmixIExBnSCluv4H';

// 通常 POST
$eb->markov( 'http://api.twitter.com/1.1/statuses/home_timeline.json?count=30' );
$response = $eb->replyTimeline(2,"reply_pattern.php");
if(rand(0,2) == 0){$response = $eb->replyTimeline(2,"reply_pattern_ww.php");
}
$response = $eb->replyTimeline(2,"reply_pattern.php");
if(rand(0,4) == 0){$response = $eb->replyTimeline(2,"reply_pattern_hello.php");
}
?>
