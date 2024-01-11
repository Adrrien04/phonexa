<?php 
  session_start();
  include_once "model/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            $row = mysqli_fetch_assoc($sql);
          ?>
          <img src="model/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="model/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Déconnexion</a>
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

</body>
</html>
