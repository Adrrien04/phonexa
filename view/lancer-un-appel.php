<!DOCTYPE html>

<?php include_once "header.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lancer un Appel</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<body x-data="{ featureComingSoon: true }">
<div class="container mx-auto mt-8 text-center">
    <h1 class="text-3xl font-bold mb-4">Lancer un Appel</h1>
    <p class="text-gray-600 mb-8">Cette fonctionnalité est à venir bientôt. Restez à l'écoute !</p>

    <div x-show="featureComingSoon" class="bg-yellow-200 text-yellow-800 p-4 rounded-md">
        <p>Cette fonctionnalité est en cours de développement.</p>
    </div>
</div>
</body>

</body>
</html>
