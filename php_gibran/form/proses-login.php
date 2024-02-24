<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'gibran@gmail.com') {
  die("Email tidak terdaftar!");
}

if ($password !== '12345') {
  die("Password salah!");
}

echo "Selamat {$email}, anda berhasil login! :)";