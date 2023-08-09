<?php
   // session_start();//start the session if we are going to use session variable
    require_once '../classes/User.php';

    $user_obj = new User;
    //call the getUser() method
    $user =$user_obj->getUser(); //getUser() --> is coming from user.php
    //$user = ['id' => 1, 'first_name' => 'John', 'last_name' => 'Smith', ...]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Fontawesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Edit User</title>
</head>
<body>
    <!--include navigation -->
    <?php
    include '../views/main-nav.php';
    ?>
    <main class="row justify-content-center gx-0">
        <div class="col-4">
            <h2 class="text-center mb-4">Edit User</h2>

            <form action="../actions/edit-user-action.php" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center mb-3">
                    <div class="col-6">
                        <?php
                        if($user['photo']){
                            ?>
                            <img src="../assets/images/<?=$user['photo']?>" alt="<?=user['photo']?>"
                            class="d-block mx-auto edit-photo">
                        <?php
                        }else{
                        ?>
                        <i class="fa-solid fa-circle-user text-secondary text-center edit-icon"
                        style="font-size: 7em";></i>
                        <?php
                        }
                        ?>
                        
                        <!-- jpeg, jpg, tiff, gif-->
                        <input type="file" name="photo" id="photo" class="form-control mt-2" accept="image/*">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="first-name" class="form-label">Firstname</label>
                    <input type="text" name="first_name" id="first-name"
                    class="form-control" value="<?=$user['first_name']?>"required>
                </div>
                <div class="mb-3">
                    <label for="last-name" class="form-label">Lastname</label>
                    <input type="text" name="last_name" id="last-name"
                    class="form-control" value="<?=$user['last_name']?>"required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username"
                    class="form-control" maxlength="15" value="<?=$user['username']?>"required>
                </div>
                <div class="text-end">
                    <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
                </div>


            </form>
        </div>
    </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>