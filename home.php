<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Blog Management</a>
    </nav>

    <div class="container mt-4">
        <?php echo $content; ?>
    </div>

    <footer class="text-center mt-4">
        <p>&copy; 2025 Blog Management System</p>
    </footer>
</body>
</html>
