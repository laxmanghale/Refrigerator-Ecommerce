<?php  
    if(isset($_SESSION['user_login']) && $_SESSION['user_type']=="Customer")

    {
            include "navbar.php";
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Dashboard</title>
    <style>
         * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F7FA;
            margin: 0;
            padding: 0;
        }
        .contents{
            display:flex;
                }


        .order-details {
            width:1083px;
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom:20px;
        }

        .order-details h1 {
            font-size: 24px;
            margin: 0;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .status {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .status .step {
            display: flex;
            align-items: center;
            flex: 1;
            text-align: center;
        }

        .status .step:not(:last-child)::after {
            content: '';
            flex: 1;
            height: 2px;
            background-color: #e0e0e0;
            margin: 0 10px;
        }

        .status .step.completed {
            color: #28a745;
        }

        .status .step.completed::after {
            background-color: #28a745;
        }

        .status .step.completed .icon {
            background-color: #28a745;
        }

        .status .icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .order-items {
            margin-top: 20px;
            margin-bottom:20px;
        }

        .order-items .item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .order-items .item:last-child {
            border-bottom: none;
        }

        .order-items .item .description {
            flex: 1;
            margin-left: 20px;
        }

        .order-summary {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .order-summary .column {
            flex: 1;
        }

        .order-summary .column:not(:last-child) {
            margin-right: 20px;
        }

        .order-summary .column h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .order-summary .column .info {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .order-summary .column .info:last-child {
            margin-bottom: 0;
        }

        .order-summary .column .info p {
            margin: 0;
        }

        .order-summary .total {
            font-size: 20px;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="contents">
        <div class="order-details">
            <h1>Order ID: 3354654654526</h1>
            <div class="status">
                <div class="step completed">
                    <div class="icon"><i class="fas fa-check"></i></div>
                    <div>Order Confirmed</div>
                    <div>Wed, 21st Nov</div>
                </div>
                <div class="step completed">
                    <div class="icon"><i class="fas fa-shipping-fast"></i></div>
                    <div>Shipped</div>
                    <div>Wed, 21st Nov</div>
                </div>
                <div class="step">
                    <div class="icon"><i class="fas fa-box"></i></div>
                    <div>Delivered</div>
                    <div>Expected by, 26th Nov</div>
                </div>
            </div>

            <div class="order-items">
                <div class="item">
                    <div class="image">
                        <img src="https://via.placeholder.com/60" alt="Item Image">
                    </div>
                    <div class="description">
                        <div>Whirlpool Icemagic 185 Litres Single Door Refrigerator (200 IMPC Prm Sapphire Linnea)</div>
                        <div>Vendor: Cannon Appliance</div>
                    </div>
                    <div>Rs 30,000</div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="https://via.placeholder.com/60" alt="Item Image">
                    </div>
                    <div class="description">
                        <div>SAMSUNG RS72R5011SL - 700 Litres Inverter Side By Side Refrigerator With SpaceMax Technology</div>
                        <div>Vendor: Cannon Appliance</div>
                    </div>
                    <div>Rs 300,000</div>
                </div>
            </div>
            <div class="order-summary">
                <div class="column">
                    <h3>Payment</h3>
                    <div class="info">
                        <p>Visa **56</p>
                    </div>
                    <h3>Need Help</h3>
                    <div class="info">
                        <p>Order Issues</p>
                    </div>
                    <div class="info">
                        <p>Delivery Info</p>
                    </div>
                    <div class="info">
                        <p>Returns</p>
                    </div>
                </div>
                <div class="column">
                    <h3>Delivery</h3>
                    <div class="info">
                        <p>Address</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="column">
                    <h3>Order Summary</h3>
                    <div class="info">
                        <p>Discount</p>
                        <p>0</p>
                    </div>
                    <div class="info">
                        <p>Delivery</p>
                        <p>Rs 800</p>
                    </div>
                    <div class="info">
                        <p>Tax</p>
                        <p>Rs 5,000</p>
                    </div>
                    <div class="total">
                        <p>Total</p>
                        <p>Rs 5,800</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
<?php }
    else{
        header("location:login.php");
    }?>
