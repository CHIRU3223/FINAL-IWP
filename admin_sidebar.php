<html>
<?php 
    session_start();
    $user = $_SESSION['user'];
 ?>
    <head>
        <title>ADMIN DASHBOARD</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                background-image: url("https://wallpapertag.com/wallpaper/full/e/1/0/118962-best-background-gradient-1920x1200-for-tablet.jpg");
            }
            .sidebar{
                height:100%;
                background-color: black;
                width: 250px;
                position: fixed;
                top: 0;
                left: 0;
                overflow: hidden;
                padding-top: 10px;
            }
            .sidebar a{
                text-decoration: none;
                font-size:25px;
                color:white;
                padding:10px;
                display:block;
            }
            .sidebar a:hover{
                color: gold;
            }
            img{
                width: 100px;
                height: 100px;
                border-radius: 50%;
                padding-left: 65px;
            }
            h2
            {
                text-align: center;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="sidebar">
            <h2>Hello <?php echo $user;?> !!!</h2>
            <img src="https://www.paceind.com/wp-content/uploads/2016/09/display-14.png"><br>
            <a href="admin_dashboard.php" ><i class="fa fa-home fa-fw"></i>DASHBOARD</a><br>
            <a href="edituser.php" >EDIT PROFILE</a><br>
            <a href="admindashboard_complaints.php" >VIEW COMPLAINT</a><br>
            <a href="admindashboard_reviews.php" >VIEW REVIEWS</a><br>
            <a href="admin_view_userdetails.php" >USER DETAILS</a><br>
            <a href="admin_view_auth_details.php" >AUTHORITIES</a><br>
            <a href="logout.php"> LOG OUT</a><br>
        </div>
    </body>
</html>