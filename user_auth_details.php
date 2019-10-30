<!DOCTYPE html>
<?php include("user_sidebar.php")?>
<html>
    <head>
        <title>USER DashBoard</title>
        <style>
            body
            {
                background-repeat: no-repeat;
                background-size: cover;
            }
            table
            {
                margin-left:0px;
                border-collapse: collapse;
            }

            #a
            {
                margin-top: 30px;
            }
            tr:hover
            {
                background-color: #FFC0CB;
            }
            td,th
            {
                padding: 10px;   
                width: 280px;
                text-align: center;
                font-size: 16px;
            }
            .cid
            {
                width:60px;
            }
            .rvw
            {
                width:550px;
            }
            .ra
            {
                width:400px;
            }
            tr
            {
                background-color: aquamarine;
                border: 0;
                border: 2px solid white;
                margin-left:100px;
            }
            th
            {
                background-color: lawngreen;
            }
            .opt
            {
                width: 100px;
            }

        </style>
    </head>
    <body>
        <h3 id='a'>AUTHORITY DETAILS<h3>
        <table>
            <tr>
                <th class="cid">Authority Username</th>
                <th class="ra">First Name</th>
                <th>Last Name</th>
                <th>Contact No.</th>
                <th class="rvm">Authority EmailID</th>
            </tr>
        <?php 
            include('config.php');
            $sql = "SELECT * FROM user_details";
            $result = $conn->query($sql);
            if($result->num_rows>0)
            {
                while($row = $result->fetch_assoc())
                {
                    if($row['usertype']=="authority"){
                    echo "<tr><td class='cid'>".$row["username"]."</td><td class='ra'>".$row['firstname']."</td><td class='ra'>".$row['lastname']."</td><td class='ra'>".$row['contact']."</td><td class='rvw'>".$row["email"]."</td></tr>";
                    }
                }
            }
            ?>
        </table>
    </body>
</html>