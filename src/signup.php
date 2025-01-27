<?php
require_once 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
    $email = trim($_POST["email"]);

    if (empty($username) || empty($password) || empty($confirm_password) || empty($email)) {
        echo "Please fill all fields.";
    } elseif ($password !== $confirm_password) {
        echo "Passwords do not match.";
    } else {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sss", $username, $password_hash, $email);
            if ($stmt->execute()) {
                echo "Registration successful.";
            } else {
                echo "Something went wrong. Please try again.";
            }
            $stmt->close();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Sign Up</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>