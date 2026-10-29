<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        form { width: 350px; margin: 40px auto; padding: 20px; background: #fff; border: 2px solid #3b5bdb; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; box-sizing: border-box; }
        button { margin-top: 15px; padding: 10px 25px; }
    </style>
</head>
<body>
    <form action="submit.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="contact">Contact</label>
        <textarea id="contact" name="contact" rows="5" required></textarea>

        <button type="submit">Submit</button>
    </form>
    <p style="text-align:center"><a href="dashboard.php">View Dashboard</a></p>
</body>
</html>