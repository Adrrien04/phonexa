<?php
session_start();
include_once "model/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>
<?php include_once "view/header.php"; ?>
<body>
<div class="wrapper">
    <section class="users">
        <header>
            <div class="content">
                <?php

                $sql = pg_query_params($conn, "SELECT * FROM users WHERE unique_id = $1", array($_SESSION['unique_id']));
                $row = pg_fetch_assoc($sql);
                ?>
                <img src="model/images/<?php echo isset($row['img']) ? $row['img'] : 'chemin_par_defaut'; ?>" alt="">
                <div class="details">
                    <span><?php echo isset($row['fname']) ? $row['fname'] . " " . $row['lname'] : 'Nom inconnu'; ?></span>
                    <p><?php echo isset($row['status']) ? $row['status'] : 'Statut inconnu'; ?></p>
                </div>
            </div>
            <a href="model/logout.php?logout_id=<?php echo isset($row['unique_id']) ? $row['unique_id'] : ''; ?>"
               class="logout">Déconnexion</a>
        </header>
        <div class="search">
            <span class="text">Sélectionnez un utilisateur pour commencer la discussion</span>
            <input type="text" placeholder="Entrez le nom à rechercher...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">

        </div>
    </section>
</div>

<script src="javascript/users.js"></script>
<?php include_once "view/footer.php"; ?>
</body>
</html>
