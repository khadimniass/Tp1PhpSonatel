<?php
    include_once 'fonctions.php';
    include_once '../ERROR_MANAGER.php';
    if (isset($_POST['btn_display'])) {
        if (is_numeric($_POST["N"]) && is_positif($_POST["N"])) {
            ?><ul>
            <?php gen_number($_POST["N"]); ?>
              </ul>
        <?php
        } else {
            // echo "veillez entrer un nombre ! positif";
            header('location:index.php');
            die();
        }
    } 