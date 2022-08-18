<?php 
    session_start();
    include 'pageheader.php';
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'blog';
    $conn = mysqli_connect($host,$user,$pass,$db);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['submit'])) {
        $Title = $_POST['Title'];
        $Body = $_POST['Body'];
        $Uid = $_SESSION['Uid'];
        $query = "INSERT INTO post(Title, Body, Uid)VALUES('$Title','$Body','$Uid')";
        $res=mysqli_query($conn,$query);
        if ($res) {
            header("Location: pagehome.php");
        }else{
            echo "Error: ".mysqli_error($conn);
        }
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Post</title>
</head>
<body>
    <form method = "post" action = "<?php $_PHP_SELF ?>">
        Title:<br><input type="text" name="Title" >
        </br>
        Post: <br><textarea style="overflow:auto;resize:none" input type="text" rows = 20 cols =50 name="Body" ></textarea>
        </br>
        <input type="submit" name="submit" value="POST">
    </form> 
</body>
</html>
<?php include 'pagefooter.php'; ?>