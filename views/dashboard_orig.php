<?php
session_start();
require '../classes/User.php';

#instantiate an object
$user = new User;//$user -->is the object
$all_users = $user->getAllUsers();  //call the method getAllUsers() from User.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
   <?php
   include '../views/main-nav.php';

   ?>

   <main class="row justify-content center gx-0">
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
                    while($user = $all_users->fetch_assoc()){
                ?>
                
                    <tr>
                        <td>
                            <?php
                                if($user['photo']){
                            ?>
                                <img src="../assets/images/<?=$user['photo']?>" alt="<?=$user['photo']?>"
                                class="d-block mx-auto dashboard-photo">
                            <?php
                                }else{
                            ?>
                                <i class="fa-solid fa-circle-user"></i>
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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>