<?php

session_start();



function validateStudent($name){
  $name = trim($name);
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
  return $name;
}


$email = validateStudent($_POST['email']);
$passwd = md5(validateStudent($_POST['pwd']));

//Generate a random string.
$token = openssl_random_pseudo_bytes(16);

//Convert the binary data into hexadecimal representation.
$token = bin2hex($token);
$_SESSION["token"] = $token;


$ok = array(
  'token' => $token,
  'ok' =>1
);

if ($email == 'admin@gmail.com' && $passwd == '21232f297a57a5a743894a0e4a801fc3') {
  echo json_encode($ok);
}else {
  // echo "-1";
  echo md5('admin');
}

?>
