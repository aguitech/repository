<?php
$post = [
    'username' => 'user1',
    'password' => 'passuser1',
    'gender'   => 1,
];
//
// A very simple PHP example that sends a HTTP POST to a remote site
//

$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL,"http://www.example.com/tester.phtml");
curl_setopt($ch, CURLOPT_URL,"http://aguitech.com/phpero/post_respuesta.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

// Further processing ...
//if ($server_output == "OK") { ... } else { ... }
echo $server_output;
?>

