<?php

$email = @$_REQUEST ['email'];
$password = @$_REQUEST ['password'];

if ($email !== 'deviasrilstri18@gmail.com') {
    die ("Email tidak terdaftar!");
}

if ($password !== '12345678') {
    die ("Password salah!");
}

# jika lolos alias email dan password n ya bener

echo "selamat {$email} , anda berhasil login! :)";