<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Login</h2>
                <form method="post" action="process_login.php">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Tambahkan Bootstrap JS dan jQuery -->
    <script src="path/to/bootstrap/js/bootstrap.min.js"></script>
    <script src="path/to/jquery/jquery.min.js"></script>
</body>
</html>
