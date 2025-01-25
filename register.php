<?php 
$connect = mysqli_connect('localhost', 'root', '', 'mysite2');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($connect, $_POST['phonenumber']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($connect, $_POST['confirmpassword']);

    // Check if passwords match
    if ($password !== $confirmpassword) {
        echo "<script>alert('Passwords do not match!');</script>";
        exit();
    }

    // SQL query without password hashing
    $query = "INSERT INTO users (fullname, email, phonenumber, password) VALUES (?, ?, ?, ?)";

    // Prepare and bind the statement
    $stmt = mysqli_prepare($connect, $query);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $phonenumber, $password);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('User successfully registered!'); window.location.href='login.php';</script>";
        } else {
            echo "Error: " . mysqli_error($connect);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($connect);
    }
}

mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIFY TECH NETWORK - Registration</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> 
</head>
<body class="min-h-screen bg-gradient-to-br from-orange-300 to-red-600">
    <div class="container mx-auto px-6 py-8">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-800 text-center mb-8">Create Your Account</h2>
                <form class="space-y-6" method="POST">
                    <div>
                        <label class="block text-gray-700 mb-2" for="register-name">Full Name</label>
                        <input 
                            type="text" 
                            id="register-name" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            name="fullname" 
                            required
                        >
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="register-email">Email Address</label>
                        <input 
                            type="email" 
                            id="register-email" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            name="email" 
                            required
                        >
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="register-phone">Phone Number</label>
                        <input 
                            type="tel" 
                            id="register-phone" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            name="phonenumber" 
                            required
                        >
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="register-password">Password</label>
                        <input 
                            type="password" 
                            id="register-password" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            name="password" 
                            required
                        >
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="register-confirm">Confirm Password</label>
                        <input 
                            type="password" 
                            id="register-confirm" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                            name="confirmpassword" 
                            required
                        >
                    </div>
                    <button type="submit" name="submit" class="w-full bg-red-600 text-white py-3 rounded-lg hover:bg-red-700 transition duration-200">
                        Create Account
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>