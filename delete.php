<?php
include "./db1.php"; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM `user` WHERE Id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script>
                alert('Record deleted successfully!');
                window.location.href = './open.php'; // redirect back to list page
              </script>";
    }
}
?>
