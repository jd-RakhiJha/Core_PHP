<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<style>
    body {
        background-color: #f4f5f7;
        font-family: 'Arial', sans-serif;
    }
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-card {
        background-color: #fff;
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    .form-control {
        margin-bottom: 15px;
    }
    .login-btn {
        background-color: #383e80;
        color: #fff;
        padding: 10px 20px;
        border: none;
        width: 100%;
    }
    .login-btn:hover {
        background-color: #575ea2;
    }
    .forgot-password,
    .register-link {
        display: block;
        text-align: center;
        margin-top: 10px;
    }
    .register-link a {
        color: #383e80;
        text-decoration: none;
    }
    .register-link a:hover {
        text-decoration: underline;
    }
</style>


</head>
<body>

<div class="login-container">
    <div class="login-card">
        <h2 class="text-center mb-4">Login</h2>

        <form method="post" action="<?=($_SERVER['PHP_SELF'])?>">

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <button type="submit" name="login-button" class="btn login-btn">Login</button>

            <a href="#!" class="forgot-password text-muted">Forgot password?</a>
            <p class="register-link mb-0">Don't have an account? <a href="register.php">Register here</a></p>

        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    
</body>
</html>

<?php
// Start session
session_start();

// Include your database connection
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get email and password from form submission
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query to check for user with given email
    $sql = "SELECT * FROM user WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows > 0) {
            // Fetch the user data
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Store user info in session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['name'];

                // Redirect to dashboard page
                header("Location: /demo/index.php");
                exit();  // Make sure the script stops executing after redirection
            } else {
                // If password is incorrect
                echo '<script type="text/javascript">';
                echo 'alert("Invalid password. Please try again.");';
                echo 'window.location.href="login.php";';
                echo '</script>';
            }
        } else {
            // If no user found with that email
            echo '<script type="text/javascript">';
            echo 'alert("No user found with that email address.");';
            echo 'window.location.href="login.php";';
            echo '</script>';
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Failed to prepare statement.";
    }
}
?>
