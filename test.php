<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $myvar1 = $_POST['name'];
  $myvar2 = $_POST['emailAddress'];
  $url = 'https://mck70rr8gb21mq5vtlztbycwxwz0.pub.sfmc-content.com/hect0bodabt';

  $data = array('name' => $myvar1, 'emailAddress' => $myvar2, 'submitted' => 'submitted');
  $options = array(
          'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($data)
      )
  );

  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
//  var_dump($result);
}



echo '<br>Success!!';
 ?>
