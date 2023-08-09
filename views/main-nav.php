<nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
    <div class="container">
        <a href="dashboard.php" class="navbar-brand">
            <h1 class="h3">The Company</h1>
        </a>
        <div class="navbar-nav">
            <span class="navbar-text"><?=$_SESSION['fullname'] ?></span>
            <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
            </form>
        </div>
    </div>

    </nav>