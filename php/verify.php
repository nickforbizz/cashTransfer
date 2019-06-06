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

// view the hashed password as this
//php echo md5('K1278394') 

if ($email == 'nyamburamarthairungu@gmail.com' && $passwd == '9d07ebc0ff5b896060dfe0495ed7c040') {
  echo json_encode($ok);
}else {
  // echo "-1";
  echo md5('admin');
}

?>
