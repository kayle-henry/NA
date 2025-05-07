<?php
$title = $article['title'];
ob_start();
?>

<h1><?php echo $article['title']; ?></h1>
<p><strong>Published on:</strong> <?php echo $article['created_at']; ?></p>
<p><?php echo $article['content']; ?></p>

<h3>Comments</h3>
<?php foreach ($comments as $comment): ?>
    <p><?php echo $comment['text']; ?> - <strong><?php echo $comment['author']; ?></strong></p>
<?php endforeach; ?>

<?php
$content = ob_get_clean();
include '../layouts/main.php';
?>