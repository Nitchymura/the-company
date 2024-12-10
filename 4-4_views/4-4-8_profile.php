<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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

    $obj = new User;
    $user = $obj->findUser($_SESSION['id']);
    ?>
    <div class="container my-5">
        <div class="card w-50 mx-auto">
            <div class="card-header">
                <div class="row">
                    <div class="col-4">
                        <!-- image -->
                         <?php if($user['photo']) {  ?>
                            <img src="../4-2_assets/images/<?= $user['photo'] ?>" alt="" class="profile-photo d-block mx-auto img-thumbnail">
                        <?php }else{ ?>
                        <i class="fa-solid fa-user text-secondary fa-10x"></i>
                        <?php } ?>
                    </div>
                    <div class="col align-self-center">
                        <form action="../4-1_action/4-4-14_uploadPhoto.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="image" id="" class="form-control corm-control-sm d-block mb-1">
                            <button type="submit" class="btn btn-sm btn-outline-secondary">Upload Photo</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h2 class="h3 mb-2"><?= $_SESSION['full_name'] ?></h2>
                <h3 class="h5"><?= $_SESSION['username'] ?></h3>
            </div>
        </div>
    </div>
</body>
</html>