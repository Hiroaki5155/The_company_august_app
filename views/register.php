<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div style="height:100vh;">
    <div class="row h-100 m-0">
        <div class="card w-25 my-auto mx-auto">
            <div class="card-header bg-white border-0 py-3">
                <h1 class="text-center">REGISTER</h1>
            </div>
            <div class="card-body">
                <form action="../actions/register.php" method="post">
                    <div class="mb-3">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name"
                        class="form-control" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last_name"
                        class="form-control" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username"
                        class="form-control" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password"
                        class="form-control" required autofocus>
                        <div class="form-text">
                            Password must be 8 characters long.
                        </div>
                    </div>

                    <input type="submit" name="register_btn" value="Register" 
                    class="btn btn-success w-100">

                </form>
                <p class="text-center mt-3 small">Registered Already? <a href="../views">Log in</a></p>
            </div>
        </div>
    </div>
    </div>


    
</body>
</html>