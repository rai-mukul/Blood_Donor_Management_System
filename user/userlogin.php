<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="../dist/css/custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>BDMS - Donor Login</title>
</head>
</head>

<body>
    <div class="login-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <h3 class="mb-3">Donor Login</h3>
                                    <?php if (isset($_SESSION['login_error']) && $_SESSION['login_error'] === true) : ?>
                                        <div id="errorMessage" class="mb-3 text-center">
                                            <div class="alert alert-danger alert-dismissible">
                                                Username & Password did not match! Try Again.
                                            </div>
                                        </div>
                                        <?php
                                        // Unset the login_error session variable after displaying the error message
                                        unset($_SESSION['login_error']);
                                        ?>
                                        <script>
                                            // Remove the error message after 5 seconds
                                            setTimeout(function() {
                                                var errorMessage = document.getElementById('errorMessage');
                                                errorMessage.parentNode.removeChild(errorMessage);
                                            }, 2000); // 5000 milliseconds = 5 seconds
                                        </script>
                                    <?php endif; ?>
                                    <form action="backend_user_login.php" method="post" class="row g-4">

                                        <div class="col-12">
                                            <label for="username" class="form-label">Username<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-4 float-end mt-4" name="userin">Login</button>
                                        </div>
                                    </form>
                                    <hr bg-info>

                                    <p class="text-center mb-0">Are you an Admin? <a href="../admin_login.php">Login Here</a></p>

                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div class="form-right h-100 bg-danger text-white text-center pt-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="100px" width="100px" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
                                        <g>
                                            <circle style="fill:#A0EBFF;" cx="256" cy="256" r="256" />
                                            <path style="fill:#FFFFFF;" d="M290.811,102.036h-1.833V68.475c0-18.534-15.027-33.562-33.562-33.562s-33.562,15.027-33.562,33.562   v33.562h-0.66c-47.79,0-86.533,38.743-86.533,86.533v119.962c0,47.79,38.743,86.533,86.533,86.533h13.778v9.503   c0,11.069,8.975,20.04,20.04,20.04c11.069,0,20.04-8.97,20.04-20.04v-9.503h15.759c47.79,0,86.533-38.743,86.533-86.533V188.57   C377.344,140.774,338.601,102.036,290.811,102.036z M255.416,55.24c7.306,0,13.23,5.924,13.23,13.23   c0,7.306-5.924,13.23-13.23,13.23s-13.23-5.924-13.23-13.23C242.186,61.164,248.11,55.24,255.416,55.24z" />
                                            <path style="fill:#B6F0FF;" d="M286.623,102.036h-1.613V68.475c0-18.534-13.251-33.562-29.594-33.562v20.332   c6.441,0,13.23,4.388,13.23,13.23c0,8.55-6.82,13.23-13.23,13.23v342.866c9.59-0.22,17.311-9.073,17.311-19.999v-9.503h13.896   c42.138,0,76.298-38.743,76.298-86.533V188.57C362.921,140.774,328.76,102.036,286.623,102.036z" />
                                            <path style="fill:#68C4DE;" d="M221.189,380.646c-39.762,0-72.11-32.348-72.11-72.11V188.564c0-39.762,32.348-72.11,72.11-72.11   h69.622c39.762,0,72.11,32.348,72.11,72.11v119.967c0,39.762-32.348,72.11-72.11,72.11h-69.622V380.646z" />
                                            <path style="fill:#FC611F;" d="M149.105,188.068l-0.026,0.502v119.962c0,39.762,32.348,72.11,72.11,72.11h69.622   c39.762,0,72.11-32.348,72.11-72.11V188.564l-0.026-0.502H149.105V188.068z" />
                                            <path style="fill:#E34E10;" d="M347.776,188.068h-92.365v192.579h30.418c34.171,0,61.967-32.348,61.967-72.11V188.564   L347.776,188.068z" />
                                            <path style="fill:#FFFFFF;" d="M177.275,310.129h28.196v-7.757h-28.196V310.129z M177.275,343.316h28.196v-7.757h-28.196V343.316z    M177.275,276.941h28.196v-7.757h-28.196V276.941z M177.275,243.753h28.196v-7.757h-28.196V243.753z M177.275,202.808v7.757h28.196   v-7.757H177.275z M191.37,218.757h-14.095v7.757h14.095V218.757z M191.37,318.321h-14.095v7.757h14.095V318.321z M191.37,285.133   h-14.095v7.757h14.095V285.133z M191.37,251.945h-14.095v7.757h14.095V251.945z" />
                                            <path style="fill:#FC611F;" d="M271.473,461.035c0,8.868-7.188,16.056-16.056,16.056c-8.868,0-16.056-7.188-16.056-16.056   s16.056-30.464,16.056-30.464S271.473,452.168,271.473,461.035z" />
                                            <path style="fill:#E34E10;" d="M255.416,430.566v46.52c6.825,0,12.355-7.188,12.355-16.056   C267.771,452.168,255.416,430.566,255.416,430.566z" />
                                        </g>
                                    </svg>
                                    <h2 class="fs-1 pt-5">Donate Blood</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>