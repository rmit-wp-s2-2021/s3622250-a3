<?php
$prodname_error = $prodcat_error = $prodprice_error = "";
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $prodname = $_POST['prod-name'];
    $prodcat = $_POST['prod-type'];
    $prodprice = $_POST['prod-price'];
    $valid = true;
    if(empty($prodname))
    {
        $valid = false;
        $prodname_error = "Product name is required";
    }
    if(empty($prodcat))
    {  
        $prodcat_error = "Product Category is required";
    }
    else if(!preg_match("/^Beverages$/", $prodcat))
    {
        $prodcat_error = "Product Category has to be Beverages";
    }

    if(!preg_match('/\.\d{2,}/', $prodprice))
    {
        $prodprice_error = "Product Price must be 2 decimal places";
    }
    
}


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/product.css">
    <title>Product</title>
</head>
<body>
    <main>
        <section>
            <form class="product-form" method="post">
                <div>
                    <p class="error"><?php echo $prodname_error; ?></p>
                </div>
                <div>
                    <label for="prod-name">Name:</label>
                    <input type="text" name="prod-name">
                </div>
                <div>
                    <p class="error"><?php echo $prodcat_error; ?></p>
                </div>
                <div>
                    <label for="prod-type">Product Category:</label>
                    <input type="text" name="prod-type">
                </div>
                <div>
                    <label for="prod-supplier">Name:</label>
                    <select name="prod-supplier">
                        <option value="Pavlova, Ltd.">Pavlova, Ltd.</option>
                        <option value="Exotic Liquids">Exotic Liquids</option>
                        <option value="HotNCold">HotNCold</option>
                    </select>
                </div>
                <div>
                    <p class="error"><?php echo $prodprice_error; ?></p>
                </div>
                <div>
                    <label for="prod-price">Product Price:</label>
                    <input type="text" name="prod-price">
                </div>
                <div>
                    <input type="submit">
                </div>
                
            </form>
        </section>

    </main>
</body>
</html>