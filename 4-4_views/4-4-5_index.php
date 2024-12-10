<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- Offline Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- CDN is online version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

</head>
<body>
    <div class="container px-5 my-5">
        <form action="../4-1_action/4-1-6_login.php" method="post" class="w-50 mx-auto border rounded-3 p-4">
            <h1 class="display-6 text-uppercase text-center mb-3">Login</h1>

            <input type="text" name="username" required placeholder="USERNAME" id="" class="form-control mb-3">

            <input type="password" name="password" required placeholder="PASSWORD" id="" class="form-control mb-4">

            <button type="submit" class="btn btn-primary w-100 mb-3">Submit</button>

            <div class="text-center">
                <a href="4-4-3_register.php" class="text-decoration-none">Create Account</a>
            </div>
        </form>
    </div>
</body>
</html>