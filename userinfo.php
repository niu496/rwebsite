<?php

$con=mysqli_connect('sql306.epizy.com','epiz_26368190','o4jO58G1xzB8z');



if($con){

echo "connect";


}
else{
	echo"fail";
}

	# code...
mysqli_select_db($con,'epiz_26368190_XXX ');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="INSERT INTO `userinfo` (`id`, `user`, `email`, `mobile`, `comment`) VALUES (NULL, '$user', '$email', '$mobile', '$comment')";

 echo "$query";

 mysqli_query($con,$query);

header("location:index.php")

?>