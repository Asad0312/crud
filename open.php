<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>

    <style>
        /* Reset and basic font */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0b63d6, #2d9cfa);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        h2 {
            color: white;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        a {
            text-decoration: none;
            background: white;
            color: #0b63d6;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        a:hover {
            background: #2d9cfa;
            color: white;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 90%;
            max-width: 800px;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        thead {
            background-color: #0b63d6;
            color: white;
            text-align: left;
        }

        th,
        td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        tr:hover {
            background-color: #f2f7ff;
        }

        td a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
        }

        td a:first-child {
            background: #2d9cfa;
            color: white;
        }

        td a:first-child:hover {
            background: #0b63d6;
        }

        td a:last-child {
            background: #ff4d4d;
            color: white;
            margin-left: 5px;
        }

        td a:last-child:hover {
            background: #e60000;
        }

        .no-data {
            text-align: center;
            color: #555;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <h2>User Records</h2>
    <a href="./insert.php">+ Add New User</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "./db1.php";

            $query = "SELECT * FROM `user`";
            $result = mysqli_query($connection, $query);

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['Id']}</td>";
                echo "<td>{$row['Name']}</td>";
                echo "<td>{$row['Email']}</td>";
                echo "<td>{$row['Address']}</td>";
                echo "<td><a href='edit.php?id={$row['Id']}&name={$row['Name']}&email={$row['Email']}&address={$row['Address']}'>Edit</a></td>";
                echo "<td><a href='delete.php?id={$row['Id']}'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>