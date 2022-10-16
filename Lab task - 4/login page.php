<html>
<head>
    <title>Login Page</title>
</head>
    <body>
        <?php
            session_start();
            echo $_SESSION["valid"]
        ?>
            <form method="post" action="LoginValidation.php" enctype="">
                    <fieldset>
                        <legend>Login </legend>
                        <table>
                            <tr>
                                <td> Username:</td>
                                <td><input type="text" name="username" value=""/><br></td>
                            </tr>
                            <tr>
                                <td> Password:</td>
                                <td><input type="password" name="password" value=""/> <br></td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="" /> Remember Me</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="" value="submit" placeholder="submit"/></td>
                                <td><a href"www.google.com">Forgot Password</td>
                            </tr>

                        </table>
                    </fieldset>
            </form>
    </body>
</html>