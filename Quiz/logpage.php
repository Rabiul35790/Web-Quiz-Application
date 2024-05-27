<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty.css">
    <title>Log in Page</title>
</head>
<body>
    
    <p class="tex"><strong><i>Explore Your <br/>Quality</i></strong></p>
    <form class = "box" action="home.php" method="post">
        <h1>
            Log in
        </h1>
        <input type="email" name = "" placeholder="Enter your email" id="email" required>
        <input type="password" name="" placeholder="Enter password" id="password" required>
        <input type="submit" name="" value="Login" onclick="auth()">
    </form>
    <script language = "javascript">
        function auth()
        {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if(email == "admin@gmail.com" && password == "admin123")
        {
            window.location.assign('home.php');
        }
        else
        {
            alert("Invalid Informations");
            window.location.assign("logpage.php");
            return;
        }
        }
        </script>
</body>

</html>