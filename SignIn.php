<?php

// mysqli_connect("serverName","UserName","PassWord","DataBaseName");

 $conn = mysqli_connect("localhost","root","","user");
 if(!$conn) echo "Database connection failed ";


	@$email = $_POST["userEmail"];
	@$password = $_POST["userPassword"];

   $sql = "SELECT *FROM info WHERE user_email='$email' AND user_password='$password' ";

$result = mysqli_query($conn,$sql);
$response = array();
$flag = 0;
while($row = mysqli_fetch_array($result)){
        $response = array("id"=>$row[0],"name"=>$row[1],"email"=>$row[2],"phone"=>$row[3]);
$flag = 1;
}
if($flag == 1)
     echo json_encode(array("user_data"=>$response));//Convert to json data
else echo "-1";
?>