<?php
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
?>

<?php include_once "header.php"; ?>
<body>
<div class="wrapper">
    <section class="form login">
        <header>P H O N E X A</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="field input">
                <label>Adresse e-mail</label>
                <input type="text" name="email" placeholder="Entrez votre e-mail" required>
            </div>
            <div class="field input">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Continuer vers la discussion">
            </div>
        </form>
        <div class="link">Pas encore inscrit ? <a href="index.php">Inscrivez-vous maintenant</a></div>
    </section>
</div>

<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/login.js"></script>

</body>
</html>
