<!DOCTYPE html>
<?php include("admin_sidebar.php")?>
<html>
    <head>
        <title>AdminDashBoard</title>
        <style>
            body
            {
                background-repeat: no-repeat;
                background-size: cover;
            }
            table
            {
                margin-left:250px;
                border-collapse: collapse;
            }
            h3{
                margin-left:250px;
            }
            #a
            {
                margin-top: 100px;
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
                width:90px;
            }
            .rvw
            {
                width:900px;
            }
            .ra
            {
                width:300px;
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
            button
            {
                outline: none;
                border:0;
                background: aquamarine;
                border-radius: 3px;
                color:lightgray;
            }
            /* img
            {
                width:40px;
                height:18px;
            } */
            button .edit, .del
            {
                text-align: center;
                visibility: hidden;
                font-size:0;
                
            }
            button:hover .edit
            {
                visibility: visible;
                color: blue;
                font-size:14px;
            }
            button:hover .del
            {
                visibility: visible;
                color: red;
                font-size:14px;
            }
            /* button:hover img
            {
                visibility: hidden;
                width:0px;
                height:0px;
            } */
        </style>
    </head>
    <body>
        <h3 id='a'>Reviews given by users</h3>
        <table>
        <tr>
            <th class="cid">Review Id</th>
            <th class="ra">User Name</th>
            <th class="ra">Authority Name</th>
            <th class="rvw">Review</th>
        </tr>
        <?php 
        include('config.php');
                $sql = "SELECT reviewid, username, authorityname, text FROM reviews";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr><td class='cid'>".$row["reviewid"]."</td><td class='ra'>".$row['username']."</td><td class='ra'>".$row['authorityname']."</td><td class='rvw'>".$row["text"]."</td></tr>";
                    }
                }
            ?>
        </table>
    </body>
</html>