<?php
  $x = 0.0001;
  for ($i = 0; $i <= 1000000; $i++) {
    $x += sqrt($x);
  }

  if (!empty($_SERVER["HTTP_CLIENT_IP"])){
      $ip = $_SERVER["HTTP_CLIENT_IP"];
  }elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
      $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
  }else{
      $ip = $_SERVER["REMOTE_ADDR"];
  }
  date_default_timezone_set('Asia/Taipei');
  echo "Source IP:" . $ip . ", Response by: " . gethostname() . " -- " . date('Y/m/d H:i:s'); 
  echo "\n";

?>
