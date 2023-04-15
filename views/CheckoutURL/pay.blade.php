<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script>
    <title>Payment Checkout</title>
    <style>
      .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
      }

      button {
        background-color: red;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
</head>
<body>
  <p>For Bkash Payment Click Pay With Bkash Button</p>
  <div class="center">
    <form action="/bkash/checkout-url/create" method="POST">
      @csrf
      <button type="submit" id="bKash_button">Pay with bKash</button>
    </form>
  </div>

</body>
</html>