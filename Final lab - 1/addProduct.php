<html>
    <head>
        <title>Add Product</title>
    </head>
    <body>

    <?php

        $name;
        $sell;
        $buy;
        $display = false;

        if(isset($_POST['name']) && isset($_POST['sell']) && isset($_POST['buy']))
        {
            $name = $_POST['name'];
            $sell = $_POST['sell'];
            $buy = $_POST['buy'];

            if(isset($_POST['display'])) 
            {
                $display = true;
            }

            if($name===null || $sell===null || $buy===null)
            {
                echo "Invalid Input";
                header("location: addProduct.php");
            }
        }

        else
        {
             echo "Invalid Input";
        }

        $c = mysqli_connect('localhost', 'root', '', 'product_db');

        $sql = "INSERT INTO products(ID, name, sell, buy, display) VALUES ('','{$name}','{$sell}','{$buy}',{$display})";
        $result = mysqli_query($c, $sql);
        
        if($result){
            echo "Successfully Inserted";
        }else{
            echo "DB insert unsuccessfully!";
        }
    
    ?>

        <table>
            <tr>
                <td>
                    <form method="POST" action="addProduct.php">
                        <fieldset>
                            <legend><b>ADD PRODUCT</b></legend>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <input type="text" name="name" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Buing Price</td>
                                    <td>
                                        <input type="number" name="buy" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Selling Price</td>
                                    <td>
                                        <input type="number" name="sell" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="checkbox" name="display" value="">Display</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="" value="Save" />
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>