  <!DOCTYPE html>
<html lang="en">
<head>

    <title>Midterm Activity 1</title>
</head>
<body>
    <?php
    session_start();
    $error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
    $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';

    unset($_SESSION['error']);
    unset($_SESSION['message']);
    ?>

    <form action="handleForm.php" method="post">
        Username: <input type="text" placeholder="First name: " name="username"></p>
        Password: <input type="password" placeholder="Password: " name="password"></p>
        <input type="submit" value="Login" name="login"></p>
        <input type="submit" value="Logout" name="logout"></p>
    </form>

    <?php
    if (!empty($error)) {
        echo $error;
    }

    if (!empty($message)) {
        echo $message;
    }

    if (isset($_SESSION['username'])) {
       echo "User logged in: " . $_SESSION['username'] . " ";
        echo "Password: " . $_SESSION['password'] . " "; }
    ?>
</body>
</html>
