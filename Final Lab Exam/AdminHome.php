<html>
<head>
    <title>Admin Home Page</title>
</head>
    <body>
            <form method="" action="" enctype="">
                    <fieldset align="center">
                        <legend>Admin Home Page </legend>
                            <?php
                                echo "<h2>Welcome {$_SESSION['name']}!!<h2>";
                            ?>
                            
                            <br><hr>
                            <input type="submit" name="" value="login">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<a href="Registration.php">Registraion</a>

                    </fieldset>
            </form>
    </body>
</html>