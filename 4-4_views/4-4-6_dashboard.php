<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
    include "4-4-7_nav.php" ;
    
    $obj = new User;
    $all_users = $obj->getAllUsers();

    ?>
    <div class="container my-5">
        <div class="w-75 mx-auto">
            <h2 class="display-6 mb-3">User List</h2>

            <table class="table">
                <thead class="table-secondary text-dark">
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($user = $all_users->fetch_assoc()){?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['first_name'] ?></td>
                            <td><?= $user['last_name'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td>
                                <!-- edit -->
                                <a href="4-4-10_edit-user.php?id=<?= $user['id']?>" class="btn btn-sm btn-outline-warning ms-1">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <!-- delete -->
                                <?php if($_SESSION['id'] != $user['id']) {?>
                                    <a href="4-4-11_confirm-delete.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                <?php } ?>  
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>