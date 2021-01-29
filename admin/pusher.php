<?php
  require '../vendor/autoload.php';

  $options = array(
    'cluster' => 'ap3',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'de6e3e8267c7962d2434',
    'b5699fe96f17fe4b7886',
    '1122382',
    $options
  );

  function pusher_trigger($pusher, $channel, $event, $data){
    $pusher->trigger($channel, $event, $data);
  }
  // 
?>