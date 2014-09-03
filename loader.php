<?php
  ini_set("error_reporting","E_ALL & ~E_NOTICE");
	$url = urldecode($_GET['src']);
	if (strtolower(substr($url, 0, 9)) == 'bonana://' || strtolower(substr($url, 0, 10) == 'bonanas://'))
	{
    $url = str_replace('bonana://', 'http://', $url);
    $url = str_replace('bonanas://', 'https://', $url);
    $data = file_get_contents($url);
    echo $base64 = 'data:image/jpeg;base64,'.base64_encode($data);
	}
  else {
    echo 'Bonana King';
  }

?>
