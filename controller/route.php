<?php
function getPageContent($page)
{
  if ($page == 'accueil') {
    include_once 'view/accueil.php';
  } elseif ($page == 'lancer-un-appel') {
    include_once 'view/lancer-un-appel.php';
  } elseif ($page == 'emojiShop') {
    include_once 'view/emojiShop.php';
  } elseif ($page == 'signup') {
    include_once 'view/signup.php';
  } elseif ($page == 'login') {
    include_once 'view/login.php';
  } elseif ($page == 'signup') {
    include_once 'view/signup.php';
  } else {
    include_once 'view/accueil.php';
  }
}
?>
