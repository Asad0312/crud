<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>

    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #0b63d6, #2d9cfa);
        }

        form {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        form input {
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: 0.3s;
        }

        form input:focus {
            border-color: #0b63d6;
            outline: none;
            box-shadow: 0 0 5px rgba(11, 99, 214, 0.3);
        }

        form button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #0b63d6;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 5px;
        }

        form button:hover {
            background: #2d9cfa;
        }

        form a {
            display: inline-block;
            margin-top: 15px;
            color: #0b63d6;
            font-weight: 500;
            text-decoration: none;
            transition: 0.3s;
        }

        form a:hover {
            color: #2d9cfa;
            text-decoration: underline;
        }

        h2 {
            margin-bottom: 15px;
            color: #334b68;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>User Form</h2>
        <input type="text" name="name" placeholder="Enter your Name" required>
        <input type="email" name="email" placeholder="Enter your Email" required>
        <input type="text" name="address" placeholder="Enter your Address" required>
        <button name="btn">Submit</button>
        <a href="./open.php">Show Records</a>
    </form>

    <?php
        include "./db1.php";

        if(isset($_POST['btn'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $query = "INSERT INTO `user`(`Name`, `Email`, `Address`) VALUES ('$name','$email','$address')";
            $result = mysqli_query($connection, $query);

            if ($result) {
                echo "<script>alert('Data inserted successfully!');</script>";
            } else {
                echo "<script>alert('Error inserting data!');</script>";
            }
        }
    ?>
</body>
</html>
