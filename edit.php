<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Record</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #007bff, #00d4ff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    form {
      background: white;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      width: 350px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color: #007bff;
      letter-spacing: 1px;
    }

    input {
      width: 100%;
      padding: 10px 15px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      font-size: 14px;
      transition: 0.3s;
    }

    input:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }

    button {
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      font-size: 15px;
      cursor: pointer;
      margin-top: 10px;
      transition: 0.3s;
    }

    button:hover {
      background: #0056b3;
    }

    a {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      color: #007bff;
      font-weight: 500;
      transition: 0.3s;
    }

    a:hover {
      color: #0056b3;
    }
  </style>
</head>
<body>
  <?php  
  include "./db1.php";

  $id = $_GET["id"];
  $name = $_GET["name"];
  $email = $_GET["email"];
  $address = $_GET["address"];
  ?>

  <form action="" method="post">
    <h2>Update User</h2>
    <input type="text" name="name" placeholder="Enter your Name" required value="<?php echo $name; ?>">
    <input type="email" name="email" placeholder="Enter your Email" required value="<?php echo $email; ?>">
    <input type="text" name="address" placeholder="Enter your Address" required value="<?php echo $address; ?>">
    <button name="btn">Update</button>
    <a href="./open.php">Show Records</a>
  </form>

  <?php
  if (isset($_POST['btn'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];

      $query = "UPDATE `user` SET `Name`='$name', `Email`='$email', `Address`='$address' WHERE id = '$id'";
      $result = mysqli_query($connection, $query);

      if ($result) {
          echo "<script>
                  alert('Record updated successfully!');
                  window.location.href = 'open.php';
                </script>";
      } else {
          echo "<script>
                  alert('Error updating record.');
                </script>";
      }
  }
  ?>
</body>
</html>
