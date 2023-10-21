<!DOCTYPE html>
<html><head><title>Login Form</title>
<link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<div class="login-container">
        <h2>Login Form</h2>
        <form name="form1" method="POST" action="ceklogin.php">
            <div class="imgcontainer">
                <img src="avatar.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <button type="submit">Masuk</button>
            </div>
        </form>
    </div></body>