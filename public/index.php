<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vite Vue PHP</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap">
    <link rel="stylesheet" href="css/style.css">

    <script type="module" src="http://localhost:3000/main.js"></script>
</head>
<body>
    <?php echo 'Ceci est du PHP'; ?>

    <div class="vue-app">
        <hello-world msg="Vue"></hello-world>
    </div>

    <?= 'Ceci est aussi du PHP'; ?>

    <div class="vue-app">
        <hello-world msg="Encore Vue"></hello-world>
    </div>

    <img src="/assets/logo.svg" alt="Logo">
</body>
</html>
