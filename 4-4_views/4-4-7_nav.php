<?php
session_start()
?>

<div class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a href="4-4-6_dashboard.php" class="navbar-brand text-light">The Company</a>
        <div class="ms-auto">
            <span class="navbar-text text-light">
                <a href="4-4-8_profile.php" class="text-secondary text-decoration-none"><?= $_SESSION['username']?></a>
                <a href="../4-1_action/4-1-9_logout.php" class="text-danger text-decoration-none ms-2">Log out</a>
            </span>
        </div>
    </div>
</div>