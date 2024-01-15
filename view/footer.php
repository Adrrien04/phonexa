

<footer x-data="{ showLinks: false }" class="main-footer" style="background-color: #333; color: #fff; padding: 10px; text-align: center;">
    <p @click="showLinks = !showLinks" style="cursor: pointer;">©Phonexa - 2024 <br> Codé avec passion par Adrrien, Oumou, Djibril et Loane &nbsp <-- Cliquez pour découvrir nos pages LinkedIn</p>
    <div x-show="showLinks" class="linkedin-links">
        <a href="https://www.linkedin.com/in/adrrien-chandrakumar/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i> Adrrien</a>
        <a href="https://fr.linkedin.com/in/oumou-keirou-camara-48a960251/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i> Oumou</a>
        <a href="https://fr.linkedin.com/in/djibrilabaltou" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i> Djibril</a>
        <a href="https://fr.linkedin.com/in/loane-cotellon-a4bb7a202" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i> Loane</a>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
