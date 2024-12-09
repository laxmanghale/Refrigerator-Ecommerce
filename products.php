<?php 
    if(isset($_SESSION['user_login']) && $_SESSION['user_type']=="Vendor")
    {

    $id=$_SESSION['user_login'];
    include "databaseconn.php"; 
    include "navbar.php";?>
<html>
    <head>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            padding:0;
            margin:0;
            background-color:  #F5F6FA;
            font-family: 'Nunito Sans', sans-serif;
        }
        .all-container{
            display: flex;
            flex-direction: row;
            margin:0;
            margin-left:1%;
            margin-right:1%;
           
            
        }
        .add-container{
           
            display: flex;
            
            justify-content: center;
            width:100%;
        }
        form{
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            gap:15px;
            padding: 30px 60px;
            width: 850px;
            height:700px;
         
 
        }
        .add-container p{
            font-size: 30px;
            font-weight: bold;
            margin-top:0;
            margin-bottom: 0;
        }
        input[type='text'],
        input[type='password']{

            width: 700;
            height:40px;
            padding:10px;
        }
        .nitems{
            width:700px;
            display:flex;
            flex-direction: row;
            justify-content: space-between;
         
        }
        #half{
            width:300px;
            height:40px;
        }
        input[type='textarea']{
            width: 700px;
            height:100px;
            padding:10px;
        }
        .low{
            display: flex;
            flex-direction:column;
        }
        select{
            width: 300px;
            height:40px;
        }
        .productimgs{
            border:2px solid black;
            height: 75px;
        }
        .productimgs img{
            width:70px;
            height:70px;
            border:2px solid black;
        }
        button{
            background-color: black;
            color:white;
            padding:10px 50px;
            border-radius: 5px;
        }
        .options{
            display:flex;
            flex-direction:column;
            align-items:center; 
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
         a:hover{
            background-color:#4880FF;;
            color:white;
            border-radius:6px;
        }
        #dash{
            background-color:#4880FF;
            color:white;
            border-radius:6px;
        }
    </style>
    </head>
</html>
<body>
    <div class="all-container">
        <div class="options">
            <h2>DashStack</h2>
            <a href="dashboard.php" ><img src="images/dashboard.png"> Dashboard</a>
            <a href="products.php" id="dash"><img src="images/projects.png"> Products</a>
            <a href="#"><img src="images/projects.png">Product Stock</a>
            <a href="#"><img src="images/inbox.png">Inbox</a>
            <a href="lists.php"><img src="images/projects.png"> Lists</a>
            <div class="options-down">
                <a href="#">Settings</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <div class="add-container">
           <form action="add.php" method="POST" name="form">
                <p>Product Information</p>
                <div class="productimgs">
                    <img src="./pic/top door.jpg">
                    <img src="./pic/top door.jpg">
                    <img src="./pic/top door.jpg">
                    <img src="./pic/top door.jpg">
                </div>
                <label> Name </label>
                <input type="text"  name="name" value="" requried>
                <label> Description </label>
                <input type="textarea" rowspan="30" columnspan="30" name="description" value="" requried>
                <div class="nitems">
                    <div class="low">
                        <label>   Price </label>
                        <input type="text"  id="half" name="price" value="" requried>
                    </div>
                    <div class="low">
                        <label> Quantity </label>
                        <input type="text" id="half" name="stock" value="" requried>
                    </div>
                </div>
                <label>Category</label>
                <select  name="options" >
                    <option value="Top Freeze Refrigerator">Top Freeze Refrigerator</option>
                    <option value="Door-in-Door<">Door-in-Door</option>
                    <option value="Side by Side Refrigerator">Side by Side Refrigerator</option>
                    <option value="InstaView Door-in-Door">InstaView Door-in-Door</option>
                </select>
                <button input type="submit" name="submit" >Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php 
    }
    else{
        header("login.php");
    }
    ?>