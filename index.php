<?php
require_once "db.php";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <style>
       
       
            @page {
                margin-left: 150px;
                font-family: DejaVu Sans;
                
                
            }

            body {
                box-sizing: border-box;
                text-align: center;
                margin-left: 200px auto;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

            }



            .button {
                background-color: #4CAF50;
                border-radius: 200px;
                color: white;
                padding: 10px 19px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }

            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 50%;
            }

            #customers td,
            #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #customers tr:hover {
                background-color: #ddd;
            }

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
    </style>
</head>

<body>

    <h3>İstifadəçilərin siyahısı</h3>

    <table id="customers">


        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Status</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {


        ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['position'] ?></td>
                    <td><?php echo $row['department'] ?></td>
                    <td><?php echo $row['level'] ?></td>
                </tr>

        <?php
            }
        }
        ?>

    </table>

    <br>
    <a href="generator.php" target="_blank" class="button">Yüklə</a>
</body>

</html>