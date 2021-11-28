<!DOCTYPE HTML>
    <HTML>
        <HEAD>
            <link rel='stylesheet' href='css/login.css'>
            <meta charset='utf-8'>
            <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
            <meta name='viewport' content='width=device-width, initial-scale=1' />
            <title>Admin Login</title>
            <link rel = 'icon' href = '../img/unlike.png' type = 'image/x-icon'>
        </HEAD>
        <BODY>
            <div class='main'>
                <p class='sign' align='center'>ADMIN LOGIN</p>
                <form name="f1" action='backend/authentication.php' method = "POST" >
                    <input class='un' type='text' align='center' placeholder='ADMIN ID' name='user' id='user' />
                    <input class='pass' type='password' align='center' placeholder='Admin Password' name='pass' id= 'pass' />
                    <input class='submit' align='center' name='login' value='Login' type='submit' id='btn' />
                </form>
            </div>
        </BODY>
    </HTML>