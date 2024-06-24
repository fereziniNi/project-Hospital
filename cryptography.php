<?php
function CreatThing($size) {
      //                   1         2         3
      if ($size==0) { $size=8; }
      //INDICE   0123456789012345678901234567890
      $sLetters ='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $sNumbers='0123456789';
      $lnt=$size;                           
      $newPassword='';
      for( $lni=0; $lni<$lnt; $lni++) {
        if (($lni % 2)==0) {
          $luck=intval(rand(0,25));
          $newPassword.=substr($sLetters,$luck,1);
        } else {
          $luck=intval(rand(0,9));
          $newPassword.=substr($sNumbers,$luck,1);
        }
      }
      return $newPassword;
}

function doPassword($username,$password) {
    $salt = hash('sha256', uniqid(mt_rand(), true) . CreatThing(18) . strtolower($username));
    $hash = $salt . $password;
    $loops=132;
    for ( $i = 0; $i < $loops; $i ++ ) {
      $hash = hash('sha256', $hash);
    }
    $hash = $salt . $hash;
    return $hash;
}

function checkPassword($password,$dbpassword) {
    // The first 64 characters of the hash is the salt
    $salt = substr($dbpassword, 0, 64);
    //echo("Sal: ".$salt."<br>");
    $hash = $salt . $password;
    // Hash the password as we did before
    $loops=132;
    for ( $i = 0; $i < $loops; $i++ ) {
      $hash = hash('sha256', $hash);
      //echo($hash."<br>");
    }
    $hash = $salt . $hash;
    //echo("Final: ".$hash."<br>");
    if ( $hash == $dbpassword ) {
      return true;
    } else {
      return false;
    }
}
?>