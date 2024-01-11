<?php
session_start();
include_once "config.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $query_check_email = "SELECT * FROM users WHERE email = $1";
        $result_check_email = pg_query_params($conn, $query_check_email, array($email));

        if (pg_num_rows($result_check_email) > 0) {
            echo "$email - Cet e-mail existe déjà !";
        } else {
            if (isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];

                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);

                $extensions = ["jpeg", "png", "jpg"];

                if (in_array($img_ext, $extensions) === true) {
                    $types = ["image/jpeg", "image/jpg", "image/png"];

                    if (in_array($img_type, $types) === true) {
                        $time = time();
                        $new_img_name = $time . $img_name;

                        if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                            $ran_id = rand(time(), 100000000);
                            $status = "En ligne";
                            $encrypt_pass = md5($password);
                            $insert_query = "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                            VALUES ($1, $2, $3, $4, $5, $6, $7)";
                            $result_insert_query = pg_query_params($conn, $insert_query, array($ran_id, $fname, $lname, $email, $encrypt_pass, $new_img_name, $status));

                            if ($result_insert_query) {
                                $select_query = "SELECT * FROM users WHERE email = $1";
                                $result_select_query = pg_query_params($conn, $select_query, array($email));

                                if (pg_num_rows($result_select_query) > 0) {
                                    $result = pg_fetch_assoc($result_select_query);
                                    $_SESSION['unique_id'] = $result['unique_id'];
                                    echo "success";
                                } else {
                                    echo "Cette adresse e-mail n'existe pas !";
                                }
                            } else {
                                echo "Une erreur s'est produite. Veuillez réessayer !";
                            }
                        }
                    } else {
                        echo "Veuillez télécharger un fichier image - jpeg, png, jpg";
                    }
                } else {
                    echo "Veuillez télécharger un fichier image - jpeg, png, jpg";
                }
            }
        }
    } else {
        echo "$email n'est pas une adresse e-mail valide !";
    }
} else {
    echo "Tous les champs sont requis !";
}
?>
