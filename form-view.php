<?php
    /*whatIsHappening();*/
?>

<?php
    $email = $street = $streetnumber = $city = $zipcode = ' ';
    $productsArray = [];
    $productPrices = [];
    if(isset($_POST['order'])){

        $productsSelected = array_keys($_POST['products']);


        foreach($productsSelected as $item){
            array_push($productsArray, $products[$item]['name']);
            array_push($productPrices, $products[$item]['price']);
        }
        $email =  $_POST['email'];
        $street = $_POST['street'];
        $streetnumber = $_POST['streetnumber'];
        $city = $_POST['city'];
        $zipcode = $_POST['zipcode'];
        $totalValue = array_sum($productPrices);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Your fancy store</title>
</head>
<body>
<div class="container">
    <h1>Place your order</h1>
    <?php // Navigation for when you need it ?>
    <?php /*
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=1">Order food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Order drinks</a>
            </li>
        </ul>
    </nav>
    */ ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" class="form-control"/>
            </div>
            <div></div>
        </div>

        <fieldset>
            <legend>Address</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Street:</label>
                    <input type="text" name="street" id="street" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Street number:</label>
                    <input type="text" id="streetnumber" name="streetnumber" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Zipcode</label>
                    <input type="text" id="zipcode" name="zipcode" class="form-control">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Products</legend>
            <?php foreach ($products as $i => $product): ?>
                <label>
                    <?php // <?p= is equal to <?php echo ?>
                    <input type="checkbox" value="1" name="products[<?php echo $i ?>]"/> <?php echo $product['name'] ?> -
                    &euro; <?= number_format($product['price'], 2) ?></label><br />
            <?php endforeach; ?>
        </fieldset>

        <button type="submit" class="btn btn-primary" name="order">Order!</button><br>
    </form>

    <div class="containe d-flex justify-content-center m-3 p-3">
        <div class='container p-2'>
            <h5>Your order:</h5>
            <?php
                foreach($productsArray as $item){
                    echo $item . '<br>';
            }
            ?>
        </div>
        <div class='container p-2'>
            <h5>Your Address:</h5>
            <?php
                echo $street . " " . $streetnumber . "<br>";
                echo $city . " " . $zipcode . "<br>";
            ?>
        </div>
    </div>


    <footer>You already ordered <strong>&euro; <?php echo $totalValue; ?></strong> in spiritual attributes.</footer>
</div>

<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>