<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="php_006.php" method="post">
        <label for="username">Username:</label><br/>
        <input type="text" name="usernefame" id="username"/><br/>

        <label for="password">Password:</label><br/>
        <input type="password" name="efpassword" id="password"/><br/>

        <input type="submit" value="Login"/>

    </form>
</body>
</html> 


<?php 
if(isset($_POST['username']) && isset($_POST['password'])){ 

    $username = $_POST['username']; 
    $password = $_POST['password']; 

    echo "Username: " . $username . "<br/>"; 
    echo "Password: " . $password; 
} 
?>