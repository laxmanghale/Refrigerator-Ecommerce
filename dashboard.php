<?php 
    include "navbar.php";
    if($_SESSION['user_type']=="Vendor")
    {

    $id=$_SESSION['user_login'];
    include "databaseconn.php"; 
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color:   #F5F6FA;
            font-family: 'Nunito Sans', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x:hidden;
        }
        .dashboard
        {
            display:flex;
            margin-left:1%;
            
        }
        .options{
            display:flex;
            flex-direction:column;
            align-items:center; 
            flex-wrap:wrap;
            background-color:#ffffff;
            min-width: 230px;
            gap:2px;
            padding:10px;
        }

        
        .options-down{
            display:flex;
            flex-direction:column;
            align-items:center; 
            background-color:#ffffff;
            width:100%;
            margin-top:50px;
        }
        .options-down a{
            text-align:center;  
        }
        a{
            padding: 15px 11px;
            width:90%;
            border:none;
            background:none;
            color:black;
            text-decoration:none;
            align-items:center;
            font-size:13px; 
           
        }
        a img{
            margin-right:17px;
        }
        .dashboard a:hover{
            background-color:#4880FF;;
            color:white;
            border-radius:6px;
        }
        .user-infos {
            display: flex;
            flex-direction: column;
            
            padding: 20px;
            margin-right:3%;
            margin-left:0.8%
        }
        .cards {
            display: flex;
            margin-bottom: 20px;
            gap:30px;
            width:100%;
            cursor:pointer;
            
        }
        .card {
            width:100%;
            height:140px;
            padding: 0px 10px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
          
            transition: transform 0.5s ease;
        }
        .card:hover{
            transform: scale(1.1  );
          
        }
        .card-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
           
        }
    
        .card-content p {
            font-size: 0.8rem;

            margin-bottom: 10px;
        }
        .card-content b {
            font-size: 1rem;

            margin-bottom: 10px;
        }
        .card-content .stat {
     
            display: flex;
            align-items: center;
            font-size: 0.8rem;
            white-space: nowrap;
   
        }
       
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color:white;
        }
        table, th, td {
         
            text-align: center;
            padding: 8px;
        }
        td{
            font-size:0.8em;
            width: 20%; 
            max-width:20%;
          
           
        
        }
        th {
            background-color: #f5f5f5;
            font-weight: bold;
        }
    
        #dash{
            background-color:#4880FF;
            color:white;
            border-radius:6px;
        }
        .icon
        {
            margin-top:25px;    
        }.unknown{
            background-color:white;
            padding:20px;
            border-radius:15px;
        }
        .footer {
            margin-top: 30px;
            justify-content:right;
            display: flex;
            flex-wrap: nowrap;
            padding: 40px 80px;
            background-color: #fff;
            color: black;
            font-size: 16px;
            gap: 20px;
            overflow: hidden;
            box-sizing: border-box; 


        }

        .footer-column {
            display: flex;
            flex-direction: column;
            gap:20px;
            white-space: nowrap;

        }

        .footer-column a {
            color: gray;
            text-decoration: none;
            font-size: 14px;
            white-space: nowrap;
            margin: 0; 
            padding: 0;
            
        }

        .footer-column a:hover {
            color: black;
        }

        .footer-column p {
            margin: 0;
            color: black;
            white-space: nowrap;
        }

        .footer-column .bold {
            font-weight: bold;
        }
        .social-icons {
            display: flex;
        }
        .social-icons img {
                width: 24px;
                height: 24px;
        }


       /@media (max-width: 768px) {
        
            .options {
                width: 100%;
                min-width: unset;
                flex-direction: row;
                justify-content: space-around;
                gap: 10px;
                height: auto;
                flex-wrap:wrap;
            }

            .options a {
                padding: 10px;
                font-size: 12px;
                text-align: center;
            }

            .user-infos {
                width: 100%;
                margin: 10px 0;
                flex-wrap:wrap;
            }

            .card {
                width: calc(100% - 20px); 
                margin: 10px auto;
            }

            .dashboard {
                flex-direction: column;
                align-items: center;
                flex-wrap:wrap;
            }

            table {
                font-size: 12px;
                overflow-x: auto;
                display: block;
            }

            .navbar-center input {
                width: 200px; 
            }
            .footer {
                flex-direction: column;
                align-items: center;
            }
            .footer-column {
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
                text-align: center;
            }
        }


        @media (max-width: 480px) {

            .navbar-center input {
                width: 100px;
                margin-left: 10px;
            }

        
            .navbar {
                flex-direction: column;
                align-items: center;
            }

        
            .options {
                flex-direction: column;
                align-items: flex-start;
                flex-wrap:wrap;
                padding: 10px;
                width: 100%;
            }

            .options a {
                width: 100%;
                text-align: left;
            }

        
            .user-infos {
                width: 100%;
                padding: 10px;
            }

            .cards {
                width: 100%;
                flex-wrap: wrap;
            }

            .card {
                width: 100%;  One card per row 
            }

           
            table {
                font-size:10px;
                overflow-x: auto;
                display: block;
                white-space: nowrap;
            }

            th, td {
                padding: 5px;
                font-size: 0.8em;
            }

            .footer {
                flex-direction: column;
                gap: 10px;
                padding: 20px;
            }

            .footer-column {
                width: 100%;
                text-align: center;
            }

            .footer-column a {
                font-size: 12px;
            }
        }



    </style>
</head>

<div class="dashboard">
    <div class="options">
        <h2>DashStack</h2>
        <a href="dashboard.php" id="dash"><img src="images/dashboard.png"> Dashboard</a>
        <a href="products.php"><img src="images/projects.png"> Products</a>
        <a href="#"><img src="images/projects.png">Product Stock</a>
        <a href="#"><img src="images/inbox.png">Inbox</a>
        <a href="lists.php"><img src="images/projects.png"> Lists</a>
        <div class="options-down">
            <a href="#">Settings</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="user-infos">
        <h2>Dashboard</h2>
        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <p>Total Users</br></br>
                   <b> 40,689</b></p>
                    <div class="stat">
                        <img src="images/up.png" alt="Upwards">
                        <span>8.5% Up from yesterday</span>
                    </div>
                </div>
                <div class="icon">
                    <img src="images/icon.png" alt="User Icon">
                </div>
            </div>
        <div class="card">
                <div class="card-content">
                    <p>Total Order</br></br>
                   <b> 40,689</b></p>
                    <div class="stat">
                        <img src="images/up.png" alt="Upwards">
                        <span>8.5% Up from yesterday</span>
                    </div>
                </div>
                <div class="icon">
                    <img src="images/order.png" alt="User Icon">
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <p>Total Sales</br></br>
                   <b> 40,689</b></p>
                    <div class="stat">
                        <img src="images/up.png" alt="Upwards">
                        <span>8.5% Up from yesterday</span>
                    </div>
                </div>
                <div class="icon">
                    <img src="images/sales.png" alt="User Icon">
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <p>Total Orders Pending</br></br>   
                   <b> 40,689</b></p>
                    <div class="stat">
                        <img src="images/up.png" alt="Upwards">
                        <span>8.5% Up from yesterday</span>
                    </div>
                </div>
                <div class="icon">
                    <img src="images/orderpending.png" alt="User Icon">
                </div>
            </div>
        </div>
<div class="unknown">
    <?php 
    
    $sql = "SELECT ProductName, Location, DateTime, Quantity,Amount,Status FROM productdetails where VendorId='$id'";
    $res = mysqli_query($conn, $sql);?>
        <table>
        <b>Product Details</b>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Location</th>
                    <th>Date-Time</th>
                    <th>Piece</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($res)): ?>
                <tr>
                    <td><?php echo $row['ProductName']; ?></td>
                    <td><?php echo $row['Location']; ?></td>
                    <td><?php echo $row['DateTime']; ?></td>
                    <td><?php echo $row['Quantity']; ?></td>
                    <td><?php echo $row['Amount']; ?></td>
                    <td><?php if($row['Status']=='Delivered'){ ?> <img src="images/delivered.png"> <?php } else{  ?><img src="images/pending.png"><?php }?> </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </div>
</div>

<?php 
    } 
    else
    (   header("location:login.php"))?>