<?php

$auth = function ($request, $reponse, $next){
  if(isset($_SESSION['user']) and is_array($_SESSION['user'])){
  $reponse = $next($request, $reponse);
  }else{
      $reponse = $reponse->withStatus(401)->write('Page Protected');
  }
  
  return $reponse;
};

//$app->add($auth);
