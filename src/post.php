<?php
session_start();
require_once 'config/database.php';
require_once 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $user_id = $_SESSION['user_id']; // Assuming user is logged in and user_id is stored in session

    if (!empty($title) && !empty($content)) {
        $stmt = $pdo->prepare("INSERT INTO posts (title, content, user_id, created_at) VALUES (?, ?, ?, NOW())");
        if ($stmt->execute([$title, $content, $user_id])) {
            header("Location: index.php"); // Redirect to main forum page after successful post
            exit();
        } else {
            $error = "Failed to create post. Please try again.";
        }
    } else {
        $error = "Title and content cannot be empty.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <h2>Create a New Post</h2>
    <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
    <form action="post.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
        
        <button type="submit">Submit Post</button>
    </form>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>