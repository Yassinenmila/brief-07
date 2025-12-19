<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitalwave - <?=$page?> </title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <?php require_once __DIR__ .'/header.php';?>
  
    <?php  require_once __DIR__ .'/../views/'.$page.'.views.php';?>

    <?php  require_once __DIR__.'/footer.php'; ?>
   
    <script src="../assets/script.js"></script>
</body>
</html>