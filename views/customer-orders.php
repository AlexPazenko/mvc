<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>Simple PHP MVC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<section>
    <h1>Customer order(s):</h1>
    <ul>

        <?php
        foreach($data as $order) {
            echo '<li> Order ID:'. $order['orderId'] .', <br> Product Name: '. $order['productName'].
                 ', <br> Quantity: '. $order['amount'].', <br> Price: '. $order['productPrice'].
                ', <br> Total Price: '.$order['amount'] * $order['productPrice'].'</li>';
        }
        ?>
    </ul>
    <p>
        Back to <a href="/">Home page</a>.
    </p>
    <section>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>