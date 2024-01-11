
<?php include_once "header.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emojishop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
            color: #333;
        }

        main {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .emoji-container {
            display: flex;
            flex-wrap: wrap;
        }

        .emoji {
            cursor: pointer;
            font-size: 24px;
            margin: 5px;
            transition: transform 0.2s ease-in-out;
        }

        .emoji:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
<main x-data="{ selectedEmoji: '' }">
    <section>
        <h2 class="text-3xl font-bold mb-4">Bienvenue dans l'Emojishop</h2>
        <p class="text-lg">Explorez notre collection d'emojis et trouvez celui qui vous mettra de bonne humeur!</p>
    </section>

    <section class="mt-8">
        <div class="emoji-container">
            <div class="emoji" @click="selectedEmoji = '😀'">😀</div>
            <div class="emoji" @click="selectedEmoji = '😎'">😎</div>
            <div class="emoji" @click="selectedEmoji = '🚀'">🚀</div>
            <div class="emoji" @click="selectedEmoji = '🎉'">🎉</div>
            <div class="emoji" @click="selectedEmoji = '🍕'">🍕</div>
            <div class="emoji" @click="selectedEmoji = '❤️'">❤️</div>
            <div class="emoji" @click="selectedEmoji = '🌈'">🌈</div>
            <div class="emoji" @click="selectedEmoji = '🌟'">🌟</div>
            <div class="emoji" @click="selectedEmoji = '🎸'">🎸</div>
            <div class="emoji" @click="selectedEmoji = '🍦'">🍦</div>
            <div class="emoji" @click="selectedEmoji = '🌍'">🌍</div>
            <div class="emoji" @click="selectedEmoji = '🌺'">🌺</div>
            <div class="emoji" @click="selectedEmoji = '🍀'">🍀</div>
            <div class="emoji" @click="selectedEmoji = '🎈'">🎈</div>
            <div class="emoji" @click="selectedEmoji = '🌞'">🌞</div>
            <div class="emoji" @click="selectedEmoji = '🍇'">🍇</div>
            <div class="emoji" @click="selectedEmoji = '📚'">📚</div>
            <div class="emoji" @click="selectedEmoji = '🎧'">🎧</div>
            <div class="emoji" @click="selectedEmoji = '🚲'">🚲</div>
            <div class="emoji" @click="selectedEmoji = '🏖️'">🏖️</div>
            <div class="emoji" @click="selectedEmoji = '🚁'">🚁</div>
            <div class="emoji" @click="selectedEmoji = '🎨'">🎨</div>
            <div class="emoji" @click="selectedEmoji = '🍔'">🍔</div>
            <div class="emoji" @click="selectedEmoji = '🏀'">🏀</div>
            <div class="emoji" @click="selectedEmoji = '🎮'">🎮</div>
            <div class="emoji" @click="selectedEmoji = '🌮'">🌮</div>
            <div class="emoji" @click="selectedEmoji = '🌅'">🌅</div>
            <div class="emoji" @click="selectedEmoji = '🎯'">🎯</div>
            <div class="emoji" @click="selectedEmoji = '🍭'">🍭</div>
            <div class="emoji" @click="selectedEmoji = '🎤'">🎤</div>
            <div class="emoji" @click="selectedEmoji = '🌄'">🌄</div>
            <div class="emoji" @click="selectedEmoji = '🎻'">🎻</div>
            <div class="emoji" @click="selectedEmoji = '🍰'">🍰</div>
            <div class="emoji" @click="selectedEmoji = '🌊'">🌊</div>
            <div class="emoji" @click="selectedEmoji = '🎁'">🎁</div>
            <div class="emoji" @click="selectedEmoji = '📷'">📷</div>
            <div class="emoji" @click="selectedEmoji = '🚗'">🚗</div>
            <div class="emoji" @click="selectedEmoji = '🛩️'">🛩️</div>
            <div class="emoji" @click="selectedEmoji = '🎳'">🎳</div>
            <div class="emoji" @click="selectedEmoji = '🍌'">🍌</div>
            <div class="emoji" @click="selectedEmoji = '🚤'">🚤</div>
            <div class="emoji" @click="selectedEmoji = '🎭'">🎭</div>
            <div class="emoji" @click="selectedEmoji = '🍎'">🍎</div>
            <div class="emoji" @click="selectedEmoji = '🎱'">🎱</div>
            <div class="emoji" @click="selectedEmoji = '📱'">📱</div>
            <div class="emoji" @click="selectedEmoji = '🏰'">🏰</div>
            <div class="emoji" @click="selectedEmoji = '🚈'">🚈</div>
            <div class="emoji" @click="selectedEmoji = '🚀'">🚀</div>
            <div class="emoji" @click="selectedEmoji = '🗿'">🗿</div>
            <div class="emoji" @click="selectedEmoji = '🛸'">🛸</div>
            <div class="emoji" @click="selectedEmoji = '🌅'">🌅</div>

        </div>
    </section>


    <section x-show="selectedEmoji" class="mt-8">
        <h3 class="text-xl font-bold mb-2">Emoji sélectionné:</h3>
        <div x-text="selectedEmoji" class="text-4xl"></div>
    </section>
</main>
</body>
</html>
