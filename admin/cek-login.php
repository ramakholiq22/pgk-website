<?php
 session_start();

 $user = strtoupper($_POST['user']);
 $pass = md5($_POST['pass']);

 // menentukan user yang bisa login
 $valid_user = 'ADMINPGK';
 $valid_pass = md5(ADMINPGK123);

 if(!empty($user) and !empty($pass)){
  if($user == $valid_user and $pass == $valid_pass){
   $_SESSION['login'] = true;
   $_SESSION['user'] = $user;

   header('Location: index.php');
  }else{
   header('Location: login.php?pesan=username dan password anda salah');
  }
 }else{
  header('Location: login.php?pesan=username dan password tidak boleh kosong');
 }
 ?>