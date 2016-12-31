<?php
  include 'connection.php';
  session_destroy();
   
  $uri_redirect = explode('?','http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) ;
  if(isset($uri_redirect[0])){
      $uri_redirect = $uri_redirect[0].'?id=101&el=1' ;
  }
//  var_dump($uri_redirect) ; exit ;
         header("location: ".$uri_redirect);
     