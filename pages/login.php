<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1><?php echo isset($_SESSION['error_message']) ? $_SESSION['error_message'] : 'You are not logged in.'; ?></h1>
    <!-- Add login form or link to login page here -->
    
    <!-- Redirect after 5 seconds only if redirect_url is set -->
    <?php if (isset($_SESSION['redirect_url'])): ?>
    <script>
        setTimeout(function() {
            window.location.href = '<?php echo $_SESSION['redirect_url']; ?>';
        }, 5000);
    </script>
    <?php endif; ?>
</body>
</html>
