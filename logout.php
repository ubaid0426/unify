<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }
        .logout-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .logout-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h2>Logout</h2>
        <p>Are you sure you want to log out?</p>
        <form id="logoutForm" action="index.php">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

    <script>
        document.getElementById('logoutForm').addEventListener('submit', function(e) {
            // Clear any stored authentication tokens
            localStorage.removeItem('authToken');
            // You can add more logout logic here if needed
        });
    </script>
</body>
</html>