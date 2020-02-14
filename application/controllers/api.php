<?php 
//Your authentication key
$user_name = $_REQUEST['user_name'];
//Multiple mobiles numbers separated by comma
$password = $_REQUEST['password'];

//Prepare you post parameters
$postData = array(
    'user_name' => $user_name,
    'password' => $password,
     
);
//API URL
$url = "http://marriagee.org/data/response.php";
// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));
//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//get response
$output = curl_exec($ch);
//Print error if any
if (curl_errno($ch)) {
    echo 'error:' . curl_error($ch);
}
curl_close($ch);
echo $output;



?>