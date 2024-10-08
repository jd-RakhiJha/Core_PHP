<?php
// Start session at the top of the page
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<h1>Home</h1>

<?php if(isset($_SESSION["user_id"])): ?>
    <p>Welcome, <?= htmlspecialchars($_SESSION["username"]); ?>! You are now logged in.</p>
    <p><a href="logout.php">Log out here</a>.</p>
<?php else: ?>
    <p>Join us today by <a href="login.php">logging in</a> or <a href="register.php">creating an account</a>.</p>
<?php endif; ?>


</body>
</html>
