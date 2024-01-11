<?php include_once "header.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonexa - Accueil</title>
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

        .carousel {
            overflow: hidden;
            max-width: 100%;
            position: relative;
            border-radius: 8px;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-item {
            min-width: 100%;
            box-sizing: border-box;
        }

        .carousel img {
            width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<main x-data="{ showModal: false }">
    <section>
        <div x-data="{ active: 0, timer: null }" x-init="timer = setInterval(() => { active = (active + 1) % 3 }, 5000)">
            <div class="carousel">
                <div class="carousel-inner" x-bind:style="'transform: translateX(-' + active * 100 + '%)'">

                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/5239740/pexels-photo-5239740.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/5225119/pexels-photo-5225119.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/4559756/pexels-photo-4559756.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-8">
        <h2 class="text-3xl font-bold mb-4">Avec Phonexa, Osez la connexion</h2>
        <p class="text-lg">Découvrez Phonexa, votre destination pour des conversations vidéo fluides et sécurisées. Connectez-vous en un instant avec des amis, des proches et des collègues, où que vous soyez. Rejoignez-nous dès aujourd'hui et explorez l'avenir de la communication en direct.</p>
    </section>

    <section class="mt-8">
        <button @click="showModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            En savoir plus
        </button>

        <div x-show="showModal" @click.away="showModal = false" class="fixed inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>


                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">

                                <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6-2a8.962 8.962 0 0117.777-3.405c.726 3.793.36 6.47-1.278 8.78a1 1 0 01-1.854-.83c.063-.337.095-.683.095-1.045 0-2.206-1.794-4-4-4H9c-2.206 0-4 1.794-4 4 0 1.152.487 2.23 1.345 3.071A9.007 9.007 0 016 13z"></path>
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Plus d'informations à venir
                                </h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
                                        Nous travaillons dur pour vous apporter de nouvelles fonctionnalités passionnantes. Revenez bientôt pour plus d'informations !
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button @click="showModal = false" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Fermer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>
