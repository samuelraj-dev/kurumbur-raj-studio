<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.bigbasket.com/cl/fruits-vegetables/#!page=4');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);

preg_match_all('!//www.bigbasket.com/media/uploads/p/s/(.*).jpg!', $result, $data);

foreach($data[0] as $list){
	echo "<img style='height: 100px;width: 100px;margin: 10px;'' src='$list'>";
}


?>
