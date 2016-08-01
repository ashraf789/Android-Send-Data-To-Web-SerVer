<?php
 $conn = mysqli_connect("localhost","root","","user");
 if(!$conn) echo "Database connection failed ";

	@$name = $_POST["userName"];
	@$email = $_POST["userEmail"];
	@$phone = $_POST["userPhone"];
	@$password = $_POST["userPassword"];

   $sql = "INSERT INTO info(user_name,user_email,user_phone,user_password) VALUES 		('$name','$email','$phone','$password')";

  

if(mysqli_query($conn,$sql)){
	echo "name = ".$name." email = ".$email." phone = ".$phone." password = ".$password;
}else{
        echo "Data saving failure ";
}
?>