<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f2f2f2;
    }

    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form {
        text-align: center;
    }

    .login-form h2 {
        margin-bottom: 20px;
        color: #007bff;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    button {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border-radius: 4px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    .form-control {
        margin-left: 2%;

    }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                    <div class="login-form">
                        <h2>Login</h2>
                        <form action="./backend/login.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="username">Email:</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter your password">
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>