<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin|Unauthorized</title>
    <?php include 'includes/headerData.php' ?>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 100px;
        }

        .error-container {
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
        }

        .error-icon {
            margin-bottom: 30px;
        }

        .error-message {
            font-size: 24px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="error-container">
            <img src="data:image/png;base64,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">
            <p class="error-message"><?php echo isset($_SESSION['error_message']) ? $_SESSION['error_message'] : 'You are not authorized to access this panel.'; ?></p>
            <a href="../" class="btn btn-primary" onclick="clearSessionAndLocalStorage()">Go For Login <i class="bi bi-box-arrow-in-right"></i></a>
        </div>
    </div>
    <?php include 'includes/bodyScript.php' ?>

    <script>
        function clearSessionAndLocalStorage() {
            // AJAX request to trigger session clearing on the server side
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "clear_session.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Clear local storage once session is cleared on the server
                    localStorage.clear();
                    // Redirect or perform any other action as needed
                    window.location.href = "../";
                }
            };
            xhr.send();
        }
    </script>

</body>

</html>