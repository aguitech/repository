<?php 
//$urlContent = file_get_contents('http://aguitech.com');
$urlContent = file_get_contents('http://php.net');

$dom = new DOMDocument();
@$dom->loadHTML($urlContent);
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");

for($i = 0; $i < $hrefs->length; $i++){
    $href = $hrefs->item($i);
    $url = $href->getAttribute('href');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    // validate url
    if(!filter_var($url, FILTER_VALIDATE_URL) === false){
        echo '<a href="'.$url.'">'.$url.'</a><br />';
    }
}
?>