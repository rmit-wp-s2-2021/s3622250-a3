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
                    <label for="prod-name">Name:</label>
                    <input type="text" name="prod-name">
                </div>
                <div>
                    <label for="prod-type">Product Type:</label>
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
                    <label for="prod-price">Product Price:</label>
                    <input type="text" name="prod-price">
                </div>
                <input type="submit">
            </form>
        </section>

    </main>
</body>
</html>