<?php 
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'mysite2');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($connect, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid email or password.";
        }
        
        mysqli_stmt_close($stmt);
    } else {
        $error = "Database error: " . mysqli_error($connect);
    }
}
mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - UNIFY TECH NETWORK</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100">
    <div class="container mx-auto px-6 py-8">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-800 text-center mb-8">Login to Your Account</h2>
                
                <?php if (isset($error)): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>

                <form method="POST" class="space-y-6">
                    <div>
                        <label class="block text-gray-700 mb-2" for="login-email">Email Address</label>
                        <input 
                            type="email" 
                            id="login-email" 
                            name="email" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            required
                        >
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="login-password">Password</label>
                        <input 
                            type="password" 
                            id="login-password" 
                            name="password" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            required
                        >
                    </div>
                    <button type="submit" name="login" class="w-full bg-red-600 text-white py-3 rounded-lg hover:bg-red-700 transition duration-200">
                        Sign In
                    </button>
                </form>

                <!-- Reset Password Link -->
                <div class="mt-4 text-center">
                    <a href="resetpassword.php" class="text-sm text-red-600 hover:text-red-700">
                        Forgot Password?
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
