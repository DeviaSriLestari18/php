<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <div>
            <label>Email</label> <br>
            <input name= "email" type="email" placeholder="Masukan email">
        </div>
        <div>
            <label>kata Sandi</label> <br>
            <input name= "password" type="password" placeholder="Masukan kata sandi">
        </div>
        <div>
            <button>submit</button>
        </div>
    </form>
</body>
</html>

<?php 

$email = @$_POST ['email'];
$password = @$_POST ['password'];

if ($email) {
    echo "<strong>Email:</strong> {$email} <br>";
}

if ($password) {
    echo "<strong>Kata Sandi:</strong> {$password} <br>";
}

?>