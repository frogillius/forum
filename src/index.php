<?php
require_once 'config/database.php';
require_once 'includes/header.php';

// Fetch posts from the database
$query = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($query);
?>

<div class="container">
    <h1>Welcome to the PHP Forum</h1>
    <a href="signup.php">Sign Up</a> | <a href="login.php">Login</a>
    
    <h2>Forum Posts</h2>
    <div class="posts">
        <?php while ($post = $result->fetch_assoc()): ?>
            <div class="post">
                <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                <small>Posted on <?php echo $post['created_at']; ?></small>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>