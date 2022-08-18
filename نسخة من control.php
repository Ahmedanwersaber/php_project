<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>New Post</h1>
    Title:<?php
     echo $_POST["Title"];
     ?>
     </br>
   Post:<?php
     echo $_POST["Post"];
     ?>
</body>
</html>