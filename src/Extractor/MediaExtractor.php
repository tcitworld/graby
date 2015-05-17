<?php
function getYouTubeIdFromURL($url)
{
  preg_match('#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=embed/)[^&\n]+|(?<=v=)[^&\‌​n]+|(?<=youtu.be/)[^&\n]+#', $url, $matches);
  var_dump($matches);
  return $matches[0];
}

$httpClient = HttpClient();
$YouTubeAPIurl = "https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=" + $$YouTubeID + "&key=AIzaSyAYS95mBfQEEpDN1N2oLKEVU3lDGR5SPW8";
$response = $httpClient->fetch($YouTubeAPIurl);
$respObj = json_decode($response);
$duration = $respObj->items[0]->contentDetails->duration;
?>