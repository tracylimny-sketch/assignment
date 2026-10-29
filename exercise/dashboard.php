<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 80%; margin: 30px auto; }
        th, td { border: 1px solid #3b5bdb; padding: 8px; text-align: left; }
        th { background: #e7ecff; }
    </style>
</head>
<body>
    <h2 style="text-align:center">Dashboard</h2>
    <table>
        <tr><th>Id</th><th>Name</th><th>Email</th><th>Contact</th></tr>
        <?php
        $result = $conn->query("SELECT id, name, email, contact FROM my_contact ORDER BY id");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['contact']) . "</td>
            </tr>";
        }
        $conn->close();
        ?>
    </table>
    <p style="text-align:center"><a href="index.php">Back to form</a></p>
</body>
</html>