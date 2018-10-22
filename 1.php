<?php
function HttpsGet($url){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0); 
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$res=curl_exec($ch);
	return $res;
	curl_close($ch);
}

$url="https://www.guahao.com/eteam/7";
$res=HttpsGet($url);

preg_match_all("/<li>.*?<h5>.*?href=\"(.*?)\">(.*?)<\/a>.*?<span>(.*?)<\/span>.*?<\/h5>.*?<p>(.*?)<\/p>.*?#888;\">(.*?)<\/span>.*?<\/li>/is", $res, $matches);
echo "url";
var_dump($matches[1]);
echo "name";
var_dump($matches[2]);
echo "work";
var_dump($matches[3]);
echo "hospital";
var_dump($matches[4]);
echo "good";
var_dump($matches[5]);


?>