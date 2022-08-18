<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>comment page</title>
</head>
<body>
  <?php include 'index.php'; ?>
  
<div>
  
  <div class="nav">
    <div class="logo"><img src="./img/messages.png"></div>
    <ul>
        <a href="#HOME"><li>HOME</li></a>
        <a href="#CONTACT"><li>CONTACT</li></a>
        <a href="#comment section"><li>COMMENT</li></a>

    </ul>
  </div>
  <div class="container">
    <div class="img">
        <img src="./img/Inbox cleanup-amico.png">
    </div>
    <div class="text">
        <h3> send me your comment please !!</h3>
       <a href="#comment section"> <input type="button" value="Learn more"></a>
        <!-- <input type="button" value="comment"> -->
    </div>
  </div>
</div>
  <!-- form comment  -->

<div class="contente">
  <div class="head">
    <h1>comment section</h1>


<div class="wrapper">
  <form action="" method="post" class="form">
  <input type="text" class="name" name="name" placeholder="name">
  <br>
    <textarea name="message" cols="30" rows="10" class="message" placeholder="message"></textarea>
    <br>
    <button type="submit" class="btn" name="post_comment">post comment</button>
  </form>
  </div>
 </div>
</div>
<div class="content">
  <?php
  $sql = "SELECT * FROM demo";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    }
  }
  ?>
  <h3><?php echo $row['name']  ?></h3>
  <p><?php echo $row['message']  ?></p>

</div>
</body>
</html>
<?php


if(isset($_POST['post_comment'])){
$name=$_POST['name'];
$message=$_POST['message'];

  $sql = "INSERT INTO demo(name,message)
  VALUES ('$name','$message')";
  
  if ($conn->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>