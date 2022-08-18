<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'blog';
    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * from post";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<ul><li> <a href='post.php?id=".$row['Pid']."'>".$row['Title']."</a> </li></ul>";
    }
 ?>