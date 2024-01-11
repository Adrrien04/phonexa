<?php
session_start();
include_once "model/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}
?>
<?php include_once "view/header.php"; ?>
<body>
<div class="wrapper">
    <section class="chat-area">
        <header>
            <?php
            $user_id = pg_escape_string($conn, $_GET['user_id']);
            $sql = pg_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
            $row = pg_fetch_assoc($sql);

            if(!$row) {
                header("location: users.php");
            }
            ?>
            <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <img src="model/images/<?php echo $row['img']; ?>" alt="">
            <div class="details">
                <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
                <p><?php echo $row['status']; ?></p>
            </div>
        </header>
        <div class="chat-box">

        </div>
        <form action="#" class="typing-area">
            <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" name="message" class="input-field" placeholder="Tapez un message ici..." autocomplete="off">
            <button><i class="fab fa-telegram-plane"></i></button>
        </form>
    </section>
</div>

<script src="javascript/chat.js"></script>

</body>
</html>
