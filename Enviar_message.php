  <?php
  $url = "http://165.22.142.228:1602/send-message-friend";

  $to = $_POST["to"];
  $from = $_POST["from"];
  $message = $_POST["message"];
  $apiurl = $_POST["apiurl"];


  $data = array(
    "to" => "$to",
    "from" => "$from",
    "message" => "$message",
    "apiurl" => "$apiurl"
  );

  $postdata = json_encode($data);

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  $result = curl_exec($ch);
  curl_close($ch);
  print_r($result);


  ?>