 <?php
  

function send_LINE($msg){
 $access_token = 'xkxBiTvXTU7e9dB69ayL+XjLPleibdeWH5QEEaKdx7hYceCQIzk1UaPneuqkY+isiXLLj23iGWxJLuc3VYlIHL5FBg5F3C2XfWRVq+PF3p5Bfu7FcLz9cTJCFaQJtjjO6T+Zi33i/sY79VG8gRqRpgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U46ad193039048ef668e434eed4046029',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
