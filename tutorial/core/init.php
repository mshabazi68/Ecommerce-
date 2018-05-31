<?php $db = mysqli_connect('127.0.0.1','root','','tutorial');
// fisrt parameter is about the ip address
// 2nd is where is running from where which is from the gmp_rootre
//3rd is about if there is any password set up for the localhost machince which is we

if (mysqli_connect_errno()){
  echo 'Data base conncetion failed with follwoing errors:'. mysqli_connect_error ();
  die();
} 
  ?>
