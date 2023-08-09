<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div style="height: 100vh">
    <div class="row h-100 m-0">
        <div class="card w-25 mx-auto my-auto">
            <div class="card-header bg-white border-0 py-3">
                <h1 class="text-center">Login</h1>
            </div>
            <div class="card-body">
                <form action="../actions/login-action.php" method="post">
                    <input type="text" name="username" class="form-control mb-2"
                    placeholder="USERNAME" required autofocus>
                    <input type="password" name="password" id="password" class="form-control mb-2"
                    placeholder="PASSWORD" required>
                    <button type="submit" class="btn btn-primary text-white w-100"
                    name="submit">Login</button>
                </form>
                <p class="text-center small"><a href="register.php">Create Account</a></p>
                
            </div>

        </div>
    </div>


    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>