<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://kurumburrajstudio.com');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);

preg_match_all('!//kurumburrajstudio.com/gallery/img/poster/(.*).jpg!', $result, $data);

foreach($data[0] as $list){
	echo "<img style='height: 100px;width: 100px;margin: 10px;'' src='$list'>";
}


?>
