<?php
session_start();
?>
<div id="TitleUser">
    <h4><?php
             if(isset($_SESSION['user']) && isset($_SESSION['user']['prenom']) && isset($_SESSION['user']['nom'])){
                echo '<a href="profile.php" class="user-btn">' . $_SESSION['user']['prenom'] . " " . $_SESSION['user']['nom'] . '</a><br/>';}
        ?>
    </h4>
</div>

<div id="Menu">
    <a href="index.php">Hotel</a>
    <a href=" ">xxxxxxxx</a>
    <a href=" ">xxxxxxxx</a>
    <a href=" ">xxxxxxxx</a>
    <?php
    if (isset($_SESSION['user']['type'])) {
    if ($_SESSION['user']['type'] == 2) {
        echo "<a href='detailUtilisateur.php'>ALL Users</a>";
    } elseif ($_SESSION['user']['type'] == 1) {
        // Usuário do tipo 1, não exibe nada
    }
    } else {    }
    ?>
    <?php
    if (!isset($_SESSION['user'])) {
        echo "<a href='login.php'>Se connecter</a>";
    } else {
        echo "<a href='réservations.php'>réservations</a>";
        echo "<a href='logout.php'>Déconnexion</a>";
    }
    ?>
    

</div>