<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Offline Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- CDN is online version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>
<body>
    <div class="container my-4 px-5">
        <form action="../4-1_action/4-1-4_register.php" method="post" class="border rounded-3 w-75 mx-auto p-4">
            <h1 class="display-6 text-uppercase text-center mb-3">Register</h1>

            <label for="first-name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first-name" class="form-control mb-2">

            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" class="form-control mb-2">

            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" class="form-control mb-2">

            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control mb-4">

            <button type="submit" class="btn btn-success w-100">Register</button>

            <p class="text-center">
                Registered already? <a href="4-4-5_index.php">Log in</a>.
            </p>

        </form>
    </div>
    
</body>
</html>