<?php 
    if(isset($_SESSION['user_login']) && $_SESSION['user_type']=="Vendor")
    {

    $id=$_SESSION['user_login'];
    include "databaseconn.php"; 
    include "navbar.php";?>

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
            background-color: #F5F6FA;
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
        table {
                font-size:20px;
                width:100%;
            }

            th, td {
                text-align:center;
                padding: 5px;
                font-size: 0.8em;
            }
            td{
                background-color:  #F5F6FA;
            }
        .dashboard a:hover{
            background-color:#4880FF;;
            color:white;
            border-radius:6px;
        }
        .user-infos {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            padding: 20px;
            margin-right:3%;
            margin-left:0.8%;
            width:100%;
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
                background-color: #fff;
                border:2px solid black;
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
        <a href="dashboard.php" ><img src="images/dashboard.png"> Dashboard</a>
        <a href="products.php"><img src="images/projects.png"> Products</a>
        <a href="#"><img src="images/projects.png">Product Stock</a>
        <a href="#"><img src="images/inbox.png">Inbox</a>
        <a href="lists.php" id="dash"><img src="images/projects.png"> Lists</a>
        <div class="options-down">
            <a href="#">Settings</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="user-infos">
       <h2>Details</h2>
       <h3>Your Products:</h3>
       <?php 
        $sql = "SELECT Name, Category, Description, Price,Stock FROM products where VendorId='$id'";
        $res = mysqli_query($conn, $sql);?>
       <table>
        <thead>
           
            <th>Name</th>
            <th>Category</th>
            <th>Quanity</th>
            <th>Price</th>
            <th>Rating</th>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($res)):?>
            <tr>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Category'];?></td>
            <td><?php echo $row['Description'];?></td>
            <td><?php echo $row['Price'];?></td>
            <td><?php echo $row['Stock'];?></td>
            </tr>
            <?php 
                endwhile;
                }
                else{
                    (header("location:login.php"));
                    }?>
        </tbody>
       </table>
    </div>
</div>

