<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
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
    $obj = new User;
    $user = $obj->findUser($_GET['id']);

    ?>
    <div class="my-5">
        <div class="w-25 mx-auto text-center">
            <i class="fa-solid fa-triangle-exclamation text-warning display-1"></i>
            <h2 class="text-danger text-uppercase h4 mb-5">Delete User</h2>

            <p>Are you sure you want to delete user <span class="fw-bold"><?= $user['username']?></span>?</p>

            <form action="../4-1_action/4-1-13_deleteUser.php" method="post" class="text-center">
                <input type="hidden" name="user_id" value="<?= $user['id']?>">
                <a href="4-4-6_dashboard.php" class="btn btn-secondary me-3">Cancel</a>
                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </div>
    </div>
</body>
</html>