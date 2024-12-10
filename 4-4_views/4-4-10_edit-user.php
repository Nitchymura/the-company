<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Offline Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- CDN is online version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
</head>
<body>
    <?php
    include "../4-3_classes/4-3-2_User.php";
    include "4-4-7_nav.php";

    $id = $_GET['id'];

    $obj = new User;
    $user = $obj->findUser($id);

    ?>
    <div class="container my-5">
        <div class="w-50 mx-auto">
            <form action="../4-1_action/4-1-12_editUser.php?id=<?= $id ?>" method="post">
                <h2 class="display-6 text-center text-uppercase mb-3">Edit User</h2>

                <label for="fisrt-name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first-name" value="<?= $user['first_name']?>" class="form-control mb-2
                ">

                <label for="last-name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last-name" value="<?= $user['last_name']?>" class="form-control mb-2">

                <label for="username" class="form-label fw-bold">Username</label>
                <input type="text" name="username" id="username" value="<?= $user['username']?>" class="form-control mb-3">

                <button type="submit" class="btn btn-warning">Save</button>
                <a href="4-4-6_dashboard.php" class="btn btn-secondary ms-2">Cancel</a>

            </form>
        </div>
    </div>
</body>
</html>