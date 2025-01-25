<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'mysite2');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Password Reset Request Handler
if (isset($_POST['reset_request'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    
    // Check if email exists
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) > 0) {
        // Generate a unique reset token
        $reset_token = bin2hex(random_bytes(32));
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));
        
        // Store reset token in database
        $update_query = "UPDATE users SET reset_token = ?, reset_expiry = ? WHERE email = ?";
        $update_stmt = mysqli_prepare($connect, $update_query);
        mysqli_stmt_bind_param($update_stmt, "sss", $reset_token, $expiry, $email);
        
        if (mysqli_stmt_execute($update_stmt)) {
            // TODO: Implement email sending functionality with reset link
            echo "<script>alert('Password reset link sent to your email.');</script>";
        } else {
            echo "<script>alert('Error generating reset token.');</script>";
        }
    } else {
        echo "<script>alert('Email not found.');</script>";
    }
}

// Password Reset Confirmation Handler
if (isset($_POST['reset_password'])) {
    $new_password = mysqli_real_escape_string($connect, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($connect, $_POST['confirm_password']);
    $reset_token = mysqli_real_escape_string($connect, $_POST['reset_token']);
    
    if ($new_password === $confirm_password) {
        $query = "UPDATE users SET password = ?, reset_token = NULL, reset_expiry = NULL WHERE reset_token = ? AND reset_expiry > NOW()";
        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "ss", $new_password, $reset_token);
        
        if (mysqli_stmt_execute($stmt)) {
            if (mysqli_affected_rows($connect) > 0) {
                echo "<script>alert('Password reset successfully!'); window.location.href='login.php';</script>";
            } else {
                echo "<script>alert('Invalid or expired reset token.');</script>";
            }
        } else {
            echo "<script>alert('Error resetting password.');</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match.');</script>";
    }
}

mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Reset - UNIFY TECH NETWORK</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100">
    <div class="container mx-auto px-6 py-8">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-800 text-center mb-8">Password Reset</h2>
                
                <form method="POST" class="space-y-6">
                    <div>
                        <label class="block text-gray-700 mb-2" for="reset-email">Email Address</label>
                        <input 
                            type="email" 
                            id="reset-email" 
                            name="email" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            required
                        >
                    </div>
                    <button type="submit" name="reset_request" class="w-full bg-red-600 text-white py-3 rounded-lg hover:bg-red-700 transition duration-200">
                        Send Reset Link
                    </button>
                    <div class="text-center">
                        <a href="login.php" class="text-red-600 hover:underline">Back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>