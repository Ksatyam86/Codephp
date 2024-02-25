<html>
      
    <head>
        <meta charset="UTF-8">
        <title>OOPS CRUD</title>
    </head>
    <body>

      
        <form method="POST" action="savedata.php">
            <table>
                
                <tr>
                    <td>
                        Username
                        <input type="text" name="user" autocomplete="off" >
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                        <input type="password" name="pass" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="login" value="Login">
                    </td>
                </tr>
            </table>

            <a href="reg.php">New Registration</a>
    </body>
</html>