<?php
    session_start();
    include '../classes/User.php';

    #instantiate an object
    $user = new User; //$user -->is the object
    $all_users = $user->getAllUsers(); // call the method getAllUsers() from User.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Fontawesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <title>Dashboard</title>
</head>
<body>
    <?php
        include '../views/main-nav.php';
    ?>

    <main class="row justify-content-center gx-0">
        <div class="col-6">
            <h2 class="text-center">User List</h2>

            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>FIRSTNAME</th>
                        <th>LASTNAME</th>
                        <th>USERNAME</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($user = $all_users->fetch_assoc()) {
                    ?>
                        <tr>
                            <td>
                                <?php
                                    if ($user['photo']) {
                                ?>
                                        <img src="../assets/images/<?= $user['photo']?>" alt="<?= $user['photo']?>" class="d-block mx-auto dashboard-photo">
                                <?php
                                    }else {
                                ?>
                                    <i class="fa-solid fa-circle-user dashboard-icon"></i>
                                <?php
                                    }
                                ?>
                            </td>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['first_name'] ?></td>
                            <td><?= $user['last_name'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td>
                                <?php
                                if($_SESSION['id'] ==$user['id']){
                                ?>
                                    <a href="edit-user.php" class="btn btn-outline-warning" title="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="delete-user.php" class="btn btn-outline-danger" title="Delete">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>