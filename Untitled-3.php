<?php
$title = "Articles List";
ob_start(); 
?>

<h1>All Articles</h1>
<div class="row">
    <?php foreach ($articles as $article): ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $article['title']; ?></h5>
                    <p class="card-text"><?php echo substr($article['content'], 0, 100) . '...'; ?></p>
                    <a href="view.php?id=<?php echo $article['id']; ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
include '../layouts/main.php';
?>