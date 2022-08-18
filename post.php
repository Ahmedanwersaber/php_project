<?php 
	session_start();
	include 'pageheader.php';
	$host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'blog';
    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $Pid = $_GET['id'];
    $sql = "SELECT * FROM post INNER JOIN user USING (Uid) WHERE Pid ='$Pid'";
    $output = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($output);
    echo "<p><b><header>" .$row['Title']. "</b> by <b>" .$row['username']. "</header></b></p>";
    echo "<p>" .$row['Body']. "</p>__________________________________________________________";
    echo "<p><b><header>Comments:</p></b></header>";
    $sql = "SELECT * FROM comment INNER JOIN user USING (Uid) WHERE Pid ='$Pid'";
    $output = mysqli_query($conn,$sql);
    if (mysqli_num_rows($output) > 0){
    	while ($row = mysqli_fetch_assoc($output)){
    	echo "<b>" .$row['username']."</b>: ".$row['CBody']."<br><br>";
    	}	
    }else{
    	echo "<p>No comments on this post yet.</p>";
    }
    echo "__________________________________________________________<br><br>";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Post</title>
</head>
<body>
	<form method = "post" action = "<?php $_PHP_SELF ?>">
		Add your comment: <input name = "comment" type ="text">
		<input name = "Add" type = "submit" value = "Add Comment">
	</form>
	<?php 
		$Uid = $_SESSION['Uid'];
		if (isset($_POST['Add'])) {
		$CBody = $_POST['comment'];
		$sql = "INSERT INTO comment(CBody,Uid,Pid)VALUES('$CBody','$Uid','$Pid')";
		$res=mysqli_query($conn,$sql);
	 	if ($res) {
	 		header("Location:post.php?id=".$row['Pid']."");
	 	}else{
	 		echo "Error: ".mysqli_error($conn);
 		}
	}
	 ?>
</body>
</html>
<?php 	include 'pagefooter.php'; ?>