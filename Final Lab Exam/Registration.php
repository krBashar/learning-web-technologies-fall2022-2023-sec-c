<html>
<head>
    <title>registration Page</title>
</head>
    <body>
            <form method="POST" action="checkRegi.php" enctype="">
                    <fieldset align="center">
                        <legend>Registraion </legend>
                        <table align="center">
                            <tr>
                                <td>Id</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="id" value=""/><br></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="password" value=""/><br></td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="conpassword" value=""/><br></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="name" value=""/><br></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="email" value=""/><br></td>
                            </tr>
                            <tr>
                                <td>User Type</td>
                            </tr>
                            <tr>
                            <label for="usertype">Choose a Time: </label>
                                <select name="usertype" id="usertype">
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </tr>
                            </table>
                            <br><hr>
                            <input type="submit" name="submit" value="register">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<a href="Login.php" >Login</a>

                    </fieldset>
            </form>
    </body>
</html>