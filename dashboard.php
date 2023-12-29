<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        nav {
            background-color: #ddd;
            padding: 10px;
            text-align: center;
        }

        nav a {
            display: inline-block;
            padding: 10px;
            margin: 0 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        section {
            padding: 20px;
        }

        .widget {
            background-color: #fff;
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .widget h2 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <a href="logout.php">Logout</a>
    <header>
        <h1>Dashboard</h1>
        <h3><?php echo "hello " . $_SESSION['login_name'] ?></h3>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Analytics</a>
        <a href="#">Settings</a>
    </nav>

    <section>
        <div class="widget">
            <h2>Widget 1</h2>
            <p>This is a placeholder for content in Widget 1.</p>
        </div>

        <div class="widget">
            <h2>Widget 2</h2>
            <p>This is a placeholder for content in Widget 2.</p>
        </div>

        <!-- Add more widgets as needed -->

    </section>

    <script>
        // You can add JavaScript code here if needed
    </script>

</body>
</html>
