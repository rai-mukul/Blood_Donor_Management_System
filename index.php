<!DOCTYPE html>
<html lang="en">

<head>
    <title>BDMS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="dist/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body> 
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-75 border-warning">
            <div class="card-header h4 text-center bg-warning">
                Welcome to Blood Donar Management Portal
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <!-- Donor Login Button -->
                    <a href="user/userlogin.php" class="text-decoration-none">
                    <button class="btn-donor" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" id="Layer_1" data-name="Layer 1" viewBox="0 0 122.88 117.71">
                            <defs>
                                <style>
                                    .cls-1,
                                    .cls-2 {
                                        fill-rule: evenodd;
                                    }

                                    .cls-2 {
                                        fill: #d8453e;
                                    }
                                </style>
                            </defs>
                            <title>blood-donation</title>
                            <path class="cls-1" d="M27.6,104.58V66.77h17C51.82,68.06,59,72,66.24,76.51H79.45c6,.36,9.11,6.42,3.3,10.4-4.63,3.4-10.75,3.21-17,2.64-4.32-.21-4.51,5.6,0,5.62,1.56.12,3.26-.25,4.75-.25,7.82,0,14.25-1.5,18.2-7.68l2-4.62,19.66-9.74c9.83-3.23,16.81,7.05,9.57,14.21a257.4,257.4,0,0,1-43.76,25.75c-10.84,6.6-21.69,6.37-32.52,0l-16-8.26ZM0,63.13H22.48v45.25H0V63.13Z" />
                            <path class="cls-2" d="M79.51,0a65.22,65.22,0,0,0,4.75,14.19,55.81,55.81,0,0,0,8.12,11.44L94,27.37c4.75,5.29,7.12,10.6,7.12,15.88a20.45,20.45,0,0,1-6.34,15.07,21.51,21.51,0,0,1-30.4,0A20.42,20.42,0,0,1,58,43.25C58,38,60.35,32.66,65.1,27.37l1.57-1.74a56.59,56.59,0,0,0,8.12-11.44A64.83,64.83,0,0,0,79.51,0ZM65.24,40.11a2.18,2.18,0,1,1,4.34-.39,21.11,21.11,0,0,0,2.13,7.88,14,14,0,0,0,5.44,5.63A2.18,2.18,0,1,1,74.94,57a18.17,18.17,0,0,1-7.1-7.35,25.27,25.27,0,0,1-2.6-9.53Z" />
                        </svg>
                        Donor Login
                    </button>
                    </a>
                </div>
                <div class="col-xs-12 col-md-6">
                    <!-- Admin Login Button -->
                    <a href="admin_login.php" class="text-decoration-none">
                    <button class="btn-admin" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" height="26" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;" xml:space="preserve">
                            <polygon style="fill:#FF9800;" points="24,39 19,33 19,27 29,27 29,33 " />
                            <path style="fill:#FFA726;" d="M35,21c0,1.106-0.896,2-2,2c-1.106,0-2-0.894-2-2c0-1.105,0.894-2,2-2C34.104,19,35,19.895,35,21   M17,21c0-1.105-0.896-2-2-2c-1.106,0-2,0.895-2,2c0,1.106,0.894,2,2,2C16.104,23,17,22.106,17,21" />
                            <path style="fill:#FFB74D;" d="M33,15c0-7.635-18-4.971-18,0v7c0,4.971,4.028,9,9,9c4.971,0,9-4.029,9-9V15z" />
                            <path style="fill:#424242;" d="M24,6c-6.075,0-10,4.926-10,11v2.285L16,21v-5l12-4l4,4v5l2-1.742V17c0-4.025-1.038-8.016-6-9l-1-2  H24z" />
                            <path style="fill:#784719;" d="M27,21c0-0.551,0.448-1,1-1s1,0.449,1,1c0,0.551-0.448,1-1,1S27,21.551,27,21 M19,21  c0,0.551,0.448,1,1,1s1-0.449,1-1c0-0.551-0.448-1-1-1S19,20.449,19,21" />
                            <polygon style="fill:#FFFFFF;" points="24,45 19,33 24,34 29,33 " />
                            <polygon style="fill:#D32F2F;" points="23,37 22.333,41.465 24,45.465 25.667,41.465 25,37 26,36 24,34 22,36 " />
                            <path style="fill:#3F51B5;" d="M29,33L29,33l-5,12l-5-12c0,0-11,1.986-11,13h32C40,35.025,29,33,29,33" />
                        </svg>
                        Admin Login
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>