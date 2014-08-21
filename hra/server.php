
<?php  
// Run from command prompt > php -q chatbot.demo.php
include "./websocket.class.php";

// Extended basic WebSocket as ChatBot
class ChatBot extends WebSocket{
  function process($user,$msg){
    echo "$user > $msg";
    $this->broadcast($msg);
  }
}
echo "starting";
$master = new ChatBot("0.0.0.0", 12345);
echo "done";