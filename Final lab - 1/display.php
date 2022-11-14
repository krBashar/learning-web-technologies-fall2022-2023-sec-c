<html>
    <head>
        <title>Display</title>
    </head>
    <body>
    <table>
        <tr>
            <td>
            <form method="post" action="">
                    <fieldset>
                        <legend><b>DISPLAY</b></legend>

                        <table border="1">
                        <tr>
                            <th>NAME</th>
                            <th>PROFIT</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                        $name;
                        $sell;
                        $buy;

                        $c = mysqli_connect('localhost', 'root', '', 'product_db');
                        $sql = "select * from products";
                        $result = mysqli_query($c, $sql);
                        $count = "SELECT COUNT(*) FROM products";

                        for($i=0; $i<$count; $i++)
                        {
                            $row = mysqli_fetch_assoc($result);
                            if($row['Display'] !== true) 
                            {
                                continue;
                            }
                            else
                            {
                                $name = $row['Name'];
                                $sell = $row['Sell'];
                                $buy = $row['Buy'];
                                $profit= $sell - $buy;
                                echo "<tr><td>{$name}</td>";
                                echo "<td>{$profit}</td>";
                                echo "<td><a href=\"#\">edit</a></td>";
                                echo "<td><a href=\"#\">delete</a></td></tr>";
                            }
                        }

                        ?>
                        </table>
                    </fieldset>
            </form>
            </td>
        </tr>
    </table>
    </body>
</html>