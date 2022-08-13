<?php
$url = "http://kenchan1980.sakura.ne.jp/kmsite/wp/feed/";
$xml = file_get_contents($url);
header("Content-type: application/xml; charset=UTF-8");
print $xml;
?>
